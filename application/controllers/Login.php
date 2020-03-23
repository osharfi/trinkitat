<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    $this->load->view('login_view');
  }

  function auth(){
    $name    = $this->input->post('name',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($name,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
		$usnm  = $data['user_name'];
        $level = $data['user_level'];
		$userid = $data['user_id'];
        $sesdata = array(
            'username'  => $usnm,
            'level'     => $level,
            'userid'     => $userid,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
       
            redirect('home/');
        
		
    }else{
        echo $this->session->set_flashdata('msg','هناك خطأ في معلومات الدخول');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('home/');
  }

}
