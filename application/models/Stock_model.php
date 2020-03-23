<?php
class Stock_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }
	public function get_stock($stockid = FALSE)
		{
				if ($stockid === FALSE)
				{
			$this->db->select(' *, (select COALESCE(sum(suborder.quantity* (suborder.width)/100 *(suborder.height)/100), 0) FROM suborder where stock.stockid=suborder.stockid) as sout,(select COALESCE(sum(stockpur.quantity), 0) FROM stockpur WHERE stockpur.stockid = stock.stockid) as sin FROM stock ORDER BY stock.stockid ASC', FALSE);
			
		$query = $this->db->get();
		return $query->result_array();
			
						//$query = $this->db->get('stock');
						//return $query->result_array();
				}
				$query = $this->db->get_where('stock', array('stockid' => $stockid));
				return $query->row_array();
		}
		
	public function get_supplier()
		{
				$query = $this->db->get_where('accounts', array('par' => 23));
				return $query->result_array();
		}	
	
	public function get_accn()
		{
				$query = $this->db->get_where('accounts', array('par' => 11));
				return $query->result_array();
		}		

		
	public function save_stock(){
		$data = array(
				'stockname' => $this->input->post('stockname'), 
				'sell' 		=> $this->input->post('sell'),
				'buy' 		=> $this->input->post('buy'),
				'stockid' 	=> $this->input->post('stockid'), 
				'sec' 		=> $this->input->post('sec'), 
			);
			
		$result=$this->db->insert('stock',$data);
		return $result;
		}
	
	public function update_stock()
		{

		$data = array(
				'stockname' => $this->input->post('stockname'), 
				'sell' 		=> $this->input->post('sell'),
				'buy' 		=> $this->input->post('buy'),

		);

			$this->db->where('stockid', $this->input->post('stockid'));
			$this->db->update('stock', $data); 
				
		}
		
	public function get_stock_statement($stockid = FALSE){
		
		/* $query = $this->db->get_where('ledger', array('acc' => $stockid, 'par' => 41));
		return $query->result_array(); */
		}
	
	public function save_purchase(){
		$data = array(
				'par' 	=> 3, 
				'acc' 	=> 33, 
				'amnt' 	=> -$this->input->post('total'), 
				'statement' => $this->input->post('supplier').' '.$this->input->post('accname').' '.$this->input->post('statement'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result=$this->db->insert('ledger',$data);
		
		$data1 = array(
				'par' 	=> 23, 
				'acc' 	=> $this->input->post('supplier'), 
				'amnt' 	=> $this->input->post('total'), 
				'statement' => $this->input->post('supplier').' '.$this->input->post('accname').' '.$this->input->post('statement'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result=$this->db->insert('ledger',$data1);
		
		for($i = 1; $i <= 10; $i++) {
	if( !empty($this->input->post('typeofprint_'.$i)) ) {
		$suborder = array(
				'stockid' 	=> $this->input->post('typeofprint_'.$i), 
				'quantity' 	=> $this->input->post('quantity_'.$i),
			);
			
		$resultsub =$this->db->insert('stockpur',$suborder);
		}
		}
		
		for($i = 1; $i <= 10; $i++) {
	if( !empty($this->input->post('accn_'.$i)) ) {
		$payment = array(
				'par' 	=> 23, 
				'acc' 	=> $this->input->post('supplier'), 
				'datetime' 	=> $this->input->post('date_'.$i), 
				'amnt' 	=> -$this->input->post('amnt_'.$i), 
				'statement' => 'سداد '.$this->input->post('supplier').' '.$this->input->post('accname').' '.$this->input->post('statement').' '.$this->input->post('chqn_'.$i),
				'user' => $this->session->userdata('userid'),
			);
		$result11=$this->db->insert('ledger',$payment);
		
				$payment2 = array(
				'par' 	=> 11, 
				'acc' 	=> $this->input->post('accn_'.$i), 
				'datetime' 	=> $this->input->post('date_'.$i), 
				'amnt' 	=> $this->input->post('amnt_'.$i), 
				'statement' => 'سداد'.$this->input->post('supplier').' '.$this->input->post('accname').' '.$this->input->post('statement').' '.$this->input->post('chqn_'.$i),
				'user' => $this->session->userdata('userid'),
			);
		$result112=$this->db->insert('ledger',$payment2);
	}
		}	
	}
}