<?php
class Staff extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('staff_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){

			$data['staff'] = $this->staff_model->get_staff();
		
			$this->load->view('templates/header');
			$this->load->view('staff/index', $data);
			$this->load->view('templates/footer');
			
		}else{
			echo "Access Denied";
		}
        }

    public function view($id = NULL)
        {
                $data['staff_item'] = $this->staff_model->get_staff($id);
				
    if (empty($data['staff_item']))
        {
                show_404();
        }
		
	if($this->session->userdata('level')==='1'){
        $this->load->view('templates/header');
        $this->load->view('staff/view', $data);
        $this->load->view('templates/footer');
		}else{
			echo "Access Denied";
		}
		}
		
		
	public function statement($id = NULL)
        {
     
	if($this->session->userdata('level')==='1')
			{
			$data['staff'] = $this->staff_model->get_staff_statement($id);
			$this->load->view('templates/header');
			$this->load->view('staff/statement', $data);
			$this->load->view('templates/footer');
			}
		}
						
	function newc(){
			if($this->session->userdata('level')==='1')
			{
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'name', 'الاسم',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.'
						
						)
				);
            
				
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('templates/header');
                        $this->load->view('staff/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->staff_model->save_staff();
						
				redirect('staff/');
						
				}		
                }
        }

function edit($id){
			if($this->session->userdata('level')==='1')
			{
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'name', 'الاسم',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.'
						
						)
				);
            
				
                if ($this->form_validation->run() == FALSE)
                {
				$data['staff'] = $this->staff_model->get_staff($id);

						$this->load->view('templates/header');
                        $this->load->view('staff/edit', $data);
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->staff_model->update_staff($id);
						
				redirect('staff/');
				}		
						
                }
        }
	function putsalary(){
			if($this->session->userdata('level')==='1')
			{
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'date', 'التاريخ',
						'required',
						array(
								'required'      => 'لم تدخل %s.'
						)
				);
                $this->form_validation->set_rules(
						'month', 'شهر',
						'required',
						array(
								'required'      => 'لم تدخل %s.'
						)
				);
				
                if ($this->form_validation->run() == FALSE)
                {

						$this->load->view('templates/header');
                        $this->load->view('staff/putsalary');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->staff_model->put_salary();
						
				redirect('staff/');
				}		
						
                }
        }
		
			public function delete($id)
        {
			if($this->session->userdata('level')==='1')
                $this->staff_model->delete_staff($id);
			
			redirect('staff/');	
		}
	

}

