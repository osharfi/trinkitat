<?php
class Stock extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	if($this->session->userdata('logged_in') !== TRUE){ redirect('login'); }
            
			$this->load->model('stock_model');
            $this->load->helper('url_helper');
        }

    public function index()
        {
		if($this->session->userdata('level')==='1'){

			$data['stock'] = $this->stock_model->get_stock();
		
			$this->load->view('templates/header');
			$this->load->view('stock/index', $data);
			$this->load->view('templates/footer');
			
		}else{
			echo "Access Denied";
		}
        }

    public function view($stockid = NULL)
        {
                $data['stock_item'] = $this->stock_model->get_stock($stockid);
				
    if (empty($data['stock_item']))
        {
                show_404();
        }
		
	if($this->session->userdata('level')==='1'){
        $this->load->view('templates/header');
        $this->load->view('stock/view', $data);
        $this->load->view('templates/footer');
		}else{
			echo "Access Denied";
		}
		}
		
		
	public function statement($stockid = NULL)
        {
                $data['stock_item'] = $this->stock_model->get_stock_statement($stockid);
				
   
		
	if($this->session->userdata('level')==='1'){
        $this->load->view('templates/header');
        $this->load->view('stock/statement', $data);
        $this->load->view('templates/footer');
		}else{
			echo "Access Denied";
		}
		}
			
		
		
		
	function newc(){
		
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'stockname', 'اسم النوع',
						'required|min_length[2]',
						array(
								'required'      => 'الرجاء ادخال %s.',
								
						)
				);
				$this->form_validation->set_rules(
						'stockid', 'الكود',
						'required|is_unique[stock.stockid]',
						array(
								'required'      => 'لم تدخل %s.',
								'is_unique'     => 'هذا %s موجود من قبل.'
						)
				);
            
				
                if ($this->form_validation->run() == FALSE)
                {
						$this->load->view('templates/header');
                        $this->load->view('stock/new');
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->stock_model->save_stock();
						
					redirect('stock/');
						
                }
        }

	function edit($stockid){
		
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'stockname', 'اسم النوع',
						'required|min_length[2]',
						array(
								'required'      => 'الرجاء ادخال %s.',
								
						)
				);
				
				
                if ($this->form_validation->run() == FALSE)
                {
						$data2['stock'] = $this->stock_model->get_stock($stockid);
						$this->load->view('templates/header');
                        $this->load->view('stock/edit', $data2);
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->stock_model->update_stock();
						
					redirect('stock/');
						
                }
        }

function newpur(){
		
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				       
				 $this->form_validation->set_rules(
						'total', 'total',
						'required|min_length[1]');		
                 $this->form_validation->set_rules(
						'supplier', 'supplier',
						'required|min_length[1]');			
						
				
                if ($this->form_validation->run() == FALSE)
                {
					$data2['supplier'] = $this->stock_model->get_supplier();
					$data2['stock'] = $this->stock_model->get_stock();
					$data2['accn'] = $this->stock_model->get_accn();

					$this->load->view('templates/header');
                    $this->load->view('stock/newpur', $data2);
					$this->load->view('templates/footer');
                }
                else
                {
						$data=$this->stock_model->save_purchase();
						
					$data2['stock'] = $this->stock_model->get_stock();
				
				redirect('stock/');			
                }
        }		
}

