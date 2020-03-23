<?php
class Expense2 extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('Expense2_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){

		if($this->session->userdata('sec')==='2' || $this->session->userdata('sec')==='0') {
			$data['expense'] = $this->Expense2_model->get_expense();
		
			$this->load->view('templates/header');
			$this->load->view('expense2/index', $data);
			$this->load->view('templates/footer');
}
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
                        $this->load->view('expense2/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->Expense2_model->save_expense();
						
				redirect('expense2/');
						
						
                }
        }
	}

	
}

