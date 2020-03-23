<?php
class Ledger extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
	 if($this->session->userdata('logged_in') !== TRUE){
	 redirect('login'); }
	 	if($this->session->userdata('level')!=='1'){
			redirect('home');
		}
                $this->load->model('ledger_model');
                $this->load->helper('url_helper');
        }

    public function index()
        {

	$this->load->library('pagination');
   $config = array();
        $config["base_url"] = base_url() . "ledger";
        $config["total_rows"] = $this->ledger_model->get_count();
        $config["per_page"] = 100;
        $config["uri_segment"] = 2;

    $config['full_tag_open'] = "<div class='pagination'>";
    $config['full_tag_close'] = '</div>';
    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>السابق';
    $config['next_link'] = 'التالي<i class="fa fa-long-arrow-right"></i>';
    $config['last_link'] = 'الاخيرة';
    $config['first_link'] = 'الاولى';

	
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['ledger'] = $this->ledger_model->get_ledger($config["per_page"], $page);

        //$this->load->view('authors/index', $data);
    //}

		//	$data['ledger'] = $this->ledger_model->get_ledger();
		
			$this->load->view('templates/header');
			$this->load->view('ledger/index', $data);
			$this->load->view('templates/footer');
			
		
        }
		
	    public function viewdate()
        {
			$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
				$this->form_validation->set_rules(
						'sdate', 'sdate',
						'required');
			
               
				
                if ($this->form_validation->run() == FALSE)
        {	
			$this->load->view('templates/header');
			$this->load->view('ledger/dateform');
			$this->load->view('templates/footer');
		}
		else
                {
					
        $data['ledger'] = $this->ledger_model->get_ledger_dates();
        $this->load->view('templates/header');
        $this->load->view('ledger/indexd', $data);
        $this->load->view('templates/footer');
		
		
		}
		}		

	public function delete($id)
        {
            $this->ledger_model->delete_ledger($id);

			redirect('ledger/');	
		}
	
	public function edit($id)
        {
			
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
				
                $this->form_validation->set_rules(
						'acc', 'acc',
						'required');
                
				$this->form_validation->set_rules(
						'par', 'par',
						'required');
                $this->form_validation->set_rules(
						'amnt', 'amnt',
						'required');
                
				$this->form_validation->set_rules(
						'statement', 'statement',
						'required');
                $this->form_validation->set_rules(
						'datetime', 'datetime',
						'required');
                
				
                if ($this->form_validation->run() == FALSE)
                {
					$date['ledger'] = $this->ledger_model->get_ledger_id($id);
						$this->load->view('templates/header');
                        $this->load->view('ledger/edit', $date);
						$this->load->view('templates/footer');

                }
                else
                {
						$data=$this->ledger_model->update_ledger();
						
				redirect('ledger/');
									
                }	
		}
		

}

