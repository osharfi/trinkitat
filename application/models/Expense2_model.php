<?php
class Expense2_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }


 	public function get_expense()
		{
				
				$this->db->from('ledger');
				$this->db->join('accounts', 'ledger.acc = accounts.accno', 'left');
				$this->db->where('ledger.par', '32');
				$this->db->order_by('ledger.datetime', 'DESC');
				$query = $this->db->get();
				return $query->result_array();
		} 
		
	public function save_expense(){
		$data = array(
				'par' 	=> '32', 
				'acc' 	=> $this->input->post('acc'), 
				'amnt' 	=> -$this->input->post('amnt'), 
				'statement' => $this->input->post('statement'),
				'user' => $this->session->userdata('userid'),
			);
		$result=$this->db->insert('ledger',$data);
		
	if ($this->input->post('pmethod')==1)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '113', 
				'amnt' 	=> $this->input->post('amnt'), 
				'statement' => $this->input->post('statement').' مصروفات '.$this->input->post('acc'),
				'user' => $this->session->userdata('userid'),
			);
		} 
		elseif ($this->input->post('pmethod')==2)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '116', 
				'amnt' 	=> ($this->input->post('amnt')), 
				'statement' => $this->input->post('statement').' شيك رقم '.$this->input->post('cheqno').' مصروفات '.$this->input->post('acc'),
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$orderid,
			);
		}
		$result3=$this->db->insert('ledger',$data3);
			
			
		return $result;
	}
	
	

}