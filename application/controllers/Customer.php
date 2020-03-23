<?php
class Customer extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('customer_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){

			$data['customer'] = $this->customer_model->get_customer();
		
			$this->load->view('templates/header');
			$this->load->view('customer/index', $data);
			$this->load->view('templates/footer');
			
		}else{
			echo "Access Denied";
		}
        }

    public function view($customerID = NULL)
        {
                $data['customer_item'] = $this->customer_model->get_customer($customerID);
				
    if (empty($data['customer_item']))
        {
                show_404();
        }
		
	if($this->session->userdata('level')==='1'){
        $this->load->view('templates/header');
        $this->load->view('customer/view', $data);
        $this->load->view('templates/footer');
		}else{
			echo "Access Denied";
		}
		}
		
		
	public function statement($customerID = NULL)
        {
     
			
			$data['order'] = $this->customer_model->get_customer_statement($customerID);
			$this->load->view('templates/header');
			$this->load->view('customer/statement', $data);
			$this->load->view('templates/footer');
			
		
		
		}
			
		
		
		
	function newc(){
		
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				
                $this->form_validation->set_rules(
						'fullname', 'الاسم',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.',						)
				);
            
				$this->form_validation->set_rules(
						'phone', 'الهاتف',
						'required|is_unique[customer.customerPhone]',
						array(
								'required'      => 'لم تدخل %s.',
								'is_unique'     => 'هذا %s موجود من قبل.'
						)
				);
            
				
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('templates/header');
                        $this->load->view('customer/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->customer_model->save_customer();
						
				redirect('customer/');
						
						
                }
        }

	

	function edit($id){
		
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'fullname', 'الاسم',
						'required|min_length[5]',
						array(
								'required'      => 'لم تدخل %s.',						)
				);
            
				$this->form_validation->set_rules(
						'phone', 'الهاتف',
						'required',
						array(
								'required'      => 'لم تدخل %s.',
								
						)
				);
				
                if ($this->form_validation->run() == FALSE)
                {
						
					$date['customer'] = $this->customer_model->get_customer($id);
						$this->load->view('templates/header');
                        $this->load->view('customer/edit', $date);
						$this->load->view('templates/footer');
                }
                else
                {
						$data=$this->customer_model->update_customer();
						
				redirect('customer/');
						
						
                }
        }
			
		
}

