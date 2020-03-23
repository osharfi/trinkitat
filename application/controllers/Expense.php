<?php
class Expense extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('expense_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){

			$data['expense'] = $this->expense_model->get_expense();
		
			$this->load->view('templates/header');
			$this->load->view('expense/index', $data);
			$this->load->view('templates/footer');

		}else{
			echo "Access Denied";
		}
        }

   		
			
	function newc(){
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'amnt', 'amnt',
						'required|min_length[1]');
                $this->form_validation->set_rules(
						'acc', 'acc',
						'required|min_length[1]');
				
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('templates/header');
                        $this->load->view('expense/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->expense_model->save_expense();
						
				redirect('expense/');
						
						
                }
        }
	}

	
}

