<?php
class User extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('user_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1'){

			$data['user'] = $this->user_model->get_user();
		
			$this->load->view('templates/header');
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
			
		}else{
			echo "Access Denied";
		}
        }

    public function view($user_id = NULL)
        {
					if($this->session->userdata('level')==='1'){

                $data['user_item'] = $this->user_model->get_user($user_id);
				
    if (empty($data['user_item']))
        {
                show_404();
        }
		}else{
			echo "Access Denied";
		}
		
		
	if($this->session->userdata('level')==='1'){
        $this->load->view('templates/header');
        $this->load->view('user/view', $data);
        $this->load->view('templates/footer');
		}else{
			echo "Access Denied";
		}
		}
			
		
		
	function newc(){
			if($this->session->userdata('level')==='1'){

                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				
                $this->form_validation->set_rules(
						'username', 'الاسم',
						'required|min_length[5]|is_unique[user.user_name]',
						array(
								'required'      => 'لم تدخل %s.',						)
				);
            
				$this->form_validation->set_rules(
						'upassword', 'المرور',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.',
						)
				);
            
				
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('templates/header');
                        $this->load->view('user/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->user_model->save_user();
						
				redirect('user/');
						
						
                }
				}else{
			echo "Access Denied";
		}
        }

	

	function edit($id){
		
					if($this->session->userdata('userid')===$id){

                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                
            
				$this->form_validation->set_rules(
						'upassword', 'ك المرور',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.',
								
						)
				);
				
                if ($this->form_validation->run() == FALSE)
                {
						
					$date['user'] = $this->user_model->get_user($id);
						$this->load->view('templates/header');
                        $this->load->view('user/edit', $date);
						$this->load->view('templates/footer');
                }
                else
                {
						$data=$this->user_model->update_pass();
						
				redirect('home/');
						
						
                }
        }
	}
		
}

