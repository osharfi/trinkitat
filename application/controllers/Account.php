<?php
class Account extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
                $this->load->model('account_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1'){

		
			$data['account'] = $this->account_model->get_accounts();
		
			$this->load->view('templates/header');
			$this->load->view('account/index', $data);
			$this->load->view('templates/footer');

		}else{
			echo "Access Denied";
		}
        }

    function statement($accid)
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){
			
			$data['account'] = $this->account_model->get_statement($accid);
			$this->load->view('templates/header');
			$this->load->view('account/statement', $data);
			$this->load->view('templates/footer');
		
		}else{
			echo "Access Denied";
		}
        }
		
		
		  function incomestatement()
        {
		if($this->session->userdata('level')==='1' ){
			
			$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				$this->form_validation->set_rules(
						'sdate', 'sdate',
						'required');
				$this->form_validation->set_rules(
						'edate', 'edate',
						'required');
               
				
                if ($this->form_validation->run() == FALSE)
        {	
			$this->load->view('templates/header');
			$this->load->view('account/incomestatement');
			$this->load->view('templates/footer');
		}
		else
                {
			$data['account'] = $this->account_model->get_incomestatement();		
			$this->load->view('templates/header');
			$this->load->view('account/incomestatement', $data);
			$this->load->view('templates/footer');
				}
		}else{
			echo "Access Denied";
		}
        }	
		
	function statementsr()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){
			
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'acc', 'الحساب',
						'required|min_length[1]'
						);
				$this->form_validation->set_rules(
						'sdate', 'sdate',
						'required');
				$this->form_validation->set_rules(
						'edate', 'edate',
						'required');
               
				
                if ($this->form_validation->run() == FALSE)
        {	
			$data['accountlst'] = $this->account_model->get_accounts_list();		
			$this->load->view('templates/header');
			$this->load->view('account/statementsr', $data);
			$this->load->view('templates/footer');
		}
		else
                {
			$data['account'] = $this->account_model->get_statementsr();		
			$data['accountlst'] = $this->account_model->get_accounts_list();		
			$this->load->view('templates/header');
			$this->load->view('account/statementsr', $data);
			$this->load->view('templates/footer');
				}
		}else{
			echo "Access Denied";
		}
        }	
		
function statementsrp()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){
			
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'acc', 'الحساب',
						'required|min_length[1]'
						);
				$this->form_validation->set_rules(
						'sdate', 'sdate',
						'required');
				$this->form_validation->set_rules(
						'edate', 'edate',
						'required');
               
				
                if ($this->form_validation->run() == FALSE)
        {	
			$data['accountlst'] = $this->account_model->get_accounts_list();		
			$this->load->view('templates/header');
			$this->load->view('account/statementsrp', $data);
			$this->load->view('templates/footer');
		}
		else
                {
			$data['account'] = $this->account_model->get_statementsrp();		
			$data['accountlst'] = $this->account_model->get_accounts_list();		
			$this->load->view('templates/header');
			$this->load->view('account/statementsrp', $data);
			$this->load->view('templates/footer');
				}
		}else{
			echo "Access Denied";
		}
        }	
		

    function day1()
        {
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='2'){

			$data['account'] = $this->account_model->get_day1();
		
			$this->load->view('templates/header');
			$this->load->view('account/day1', $data);
			$this->load->view('templates/footer');
		
		}else{
			echo "Access Denied";
		}
        }
  		
 
		
	function newacc(){
		if($this->session->userdata('level')==='1'){
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'accno', 'accno',
						'required|min_length[1]');
                $this->form_validation->set_rules(
						'accname', 'accname',
						'required|min_length[1]');
				 $this->form_validation->set_rules(
						'par', 'par',
						'required|min_length[1]');		
				
                if ($this->form_validation->run() == FALSE)
                {
				$data['account'] = $this->account_model->get_accounts_list();
	
						$this->load->view('templates/header');
                        $this->load->view('account/newacc', $data);
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->account_model->save_account();
						
				redirect('account/');
						
						
                }
        }
	}
	
	function transfer(){
		if($this->session->userdata('level')==='1'||$this->session->userdata('level')==='2'){
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules(
						'amnt', 'amnt',
						'required|min_length[1]');
                
                if ($this->form_validation->run() == FALSE)
                {
				$data['account'] = $this->account_model->get_accounts_list();
						$this->load->view('templates/header');
                        $this->load->view('account/transfer', $data);
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->account_model->save_transfer();
						
				redirect('home/');
						
						
                }
        }
	}

	
}

