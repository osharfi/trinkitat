<?php
class Order2 extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
						 if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
                $this->load->model('order2_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('sec')==='2' || $this->session->userdata('sec')==='0')
			{
			$data['order'] = $this->order2_model->get_order();
		
			$this->load->view('templates/header');
			$this->load->view('order2/index', $data);
			$this->load->view('templates/footer');
			}
        }

    public function view($orderid = NULL)
        {
                $data['order_item'] = $this->order2_model->get_order($orderid);
				
    if (empty($data['order_item']))
        {
                show_404();
        }
		
        $this->load->view('order2/view', $data);
			
		}
		
	function newc(){
		if($this->session->userdata('sec')==='2' || $this->session->userdata('sec')==='0')
			{
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');	
                $this->form_validation->set_rules(
						'customer', 'customer',
						'required|min_length[1]'
				);
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|min_length[1]'
				);
    
				$this->form_validation->set_rules(
						'typeofprint_1', 'typeofprint_1',
						'required|min_length[1]'
				);	
				$ttl = $this->input->post('total');
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|less_than_equal_to['.$ttl.']'
				);	
				
				
                if ($this->form_validation->run() == FALSE)
                {
					$data['customer'] = $this->order2_model->get_customers();
						$data['stock'] = $this->order2_model->get_stock();

						$this->load->view('templates/header');
                        $this->load->view('order2/new', $data);
						$this->load->view('templates/footer');

                }
                else
                {
					
				$orderid=$this->order2_model->save_order();
					
				$link = "<script>window.open('". site_url('order2/view/'.$orderid)." ', '_blank',  'width=450,height=500,left=160,top=170')</script>";
					
				echo $link;
				
redirect('order2/');                }
			}
        }

		function pay($orderid = NULL){
		
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');	
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|min_length[1]'
				);
    
				$ttl = $this->input->post('total');
				$this->form_validation->set_rules(
						'paid', 'paid',
						'required|less_than_equal_to['.$ttl.']'
				);	
				
				
                if ($this->form_validation->run() == FALSE)
                {
				$data['order_item'] = $this->order2_model->get_order($orderid);

						$this->load->view('templates/header');
                        $this->load->view('order2/pay', $data);
						$this->load->view('templates/footer');

                }
                else
                {
					
				$orderid=$this->order2_model->pay_order($orderid);
					
				$link = "<script>window.open('". site_url('order2/view/'.$orderid)." ', '_blank',  'width=450,height=500,left=160,top=170')</script>";
					
				echo $link;
				
redirect('order2/');
                }
        }
	public function delete($orderid)
        {
			if($this->session->userdata('level')==='1')
                $this->order2_model->delete_order($orderid);
			
redirect('order2/');
		}
}
