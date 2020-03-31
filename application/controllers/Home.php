<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dash_model');
	}
	function index(){
		
		if($this->session->userdata('level')==='1'){
			
		$data['allinfo'] = $this->dash_model->get_info();	
		
		$this->load->view('templates/header');
		$this->load->view('dash_view', $data);
		$this->load->view('templates/footer');
		}
	elseif($this->session->userdata('level')==='2'){
		
		$this->load->view('templates/header');
		$this->load->view('home_view');
		$this->load->view('templates/footer');
	}
	else
	{
		 redirect('login/');
		}
	}
//some
}
