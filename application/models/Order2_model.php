<?php
class Order2_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }


	public function get_order($orderid = FALSE)
		{
				if ($orderid === FALSE)
				{
						$this->db->from('orders');
						$this->db->join('customer', 'orders.customer = customer.customerID', 'left');
						$this->db->where('sec', '2');
						$query = $this->db->get();							
						return $query->result_array();
				}

				$this->db->select('orders.*,suborder.*, customer.*,stock.stockname');
				$this->db->from('orders');
				$this->db->join('customer', 'orders.customer = customer.customerID', 'left');
				$this->db->join('suborder', 'orders.orderid = suborder.orderid', 'inner');
				$this->db->join('stock', 'suborder.stockid = stock.stockid', 'left');
				$this->db->where('orders.orderid', $orderid);
				$query =$this->db->get();
				return $query->result_array();
		}
		
		
	public function get_customers()
		{
				
						$query = $this->db->get('customer');
						return $query->result_array();
	
		}
		
	public function get_stock()
		{
		$query = $this->db->get_where('stock', array('sec in (2, 3)' => null));										
		return $query->result_array();
		}
		
	public function delete_order($orderid)
		{
		$this->db->delete('orders', array('orderid' => $orderid));
		$this->db->delete('ledger', array('ref' => 's'.$orderid));
		}	
		
	public function pay_order($orderid)
		{
			$data = array(
        'paid' => $this->input->post('paid')+$this->input->post('oldpaid')
					);

		$this->db->where('orderid', $orderid);
		$this->db->update('orders', $data);	
		
		$custmr = $this->db->query("SELECT * FROM customer left join orders on orders.customer = customer.customerID where orders.orderid = ".$orderid." LIMIT 1;");
		
		
		$custmrr = $custmr->row_array();
		
		if ($this->input->post('pmethod')==1)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '113', 
				'amnt' 	=> -($this->input->post('paid')), 
				'statement' => $custmrr['customerName'].' مبيعات '.$orderid,
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$orderid,
			);
		} 
		elseif ($this->input->post('pmethod')==2)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '115', 
				'amnt' 	=> -($this->input->post('paid')), 
				'statement' => $custmrr['customerName'].' مبيعات '.$orderid.' شيك رقم '.$this->input->post('cheqno'),
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$orderid,
			);
		}
		$result3=$this->db->insert('ledger',$data3);
		
		$data4 = array(
				'par' 	=> '12', 
				'acc' 	=> '12'.$this->input->post('customer'), 
				'amnt' 	=> ($this->input->post('paid')), 
				'statement' => $custmrr['customerName'].' مبيعات '.$orderid.' سداد ',
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$orderid,
			);
		$result4=$this->db->insert('ledger',$data4);
		
			
		$data5 = array(
				'par' 	=> '4', 
				'acc' 	=> '42', 
				'amnt' 	=> $this->input->post('paid'), 
				'statement' => $custmrr['customerName'].' مبيعات '.$orderid,
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$orderid,
			);
		$result5=$this->db->insert('ledger',$data5);
		
		return $orderid;
	
		}
		
	public function save_order(){
		$data = array(
		
				'customer' 	=> $this->input->post('customer'), 
				'paid'		=> $this->input->post('paid'), 
				'total' 	=> $this->input->post('total'),
				'sec' 		=> '2'
			);
			
		$result=$this->db->insert('orders',$data);
		$sales = $this->db->insert_id();
		
		$custmr = $this->db->query("SELECT * FROM customer where customerID = ".$this->input->post('customer')." LIMIT 1;");
		$custmrr = $custmr->row_array(); 
		
		for($i = 1; $i <= 10; $i++) {
   if( !empty($this->input->post('typeofprint_'.$i)) ) {
		$suborder = array(
				'orderid' 	=> $sales, 
				'stockid' 	=> $this->input->post('typeofprint_'.$i), 
				'width' 	=> $this->input->post('width_'.$i), 
				'height' 	=> $this->input->post('height_'.$i), 
				'ltotal' 	=> $this->input->post('total_'.$i), 
				'quantity' 	=> $this->input->post('quantity_'.$i),
			);
			
		$resultsub =$this->db->insert('suborder',$suborder);
   }
		}
		
	if ($this->input->post('paid')!=0)
	{	
		$data2 = array(
				'par' 	=> '4', 
				'acc' 	=> '42', 
				'amnt' 	=> $this->input->post('paid'), 
				'statement' => $custmrr['customerName'].' مبيعات '.$sales,
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$sales,
			);
			
		$result2=$this->db->insert('ledger',$data2);
		
	
	if ($this->input->post('pmethod')==1)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '113', 
				'amnt' 	=> -($this->input->post('paid')), 
				'statement' => $custmrr['customerName'].' مبيعات '.$sales,
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$sales,
			);
		} 
	elseif ($this->input->post('pmethod')==2)
		{
		$data3 = array(
				'par' 	=> '11', 
				'acc' 	=> '115', 
				'amnt' 	=> -($this->input->post('paid')), 
				'statement' => $custmrr['customerName'].' مبيعات '.$sales.' شيك رقم '.$this->input->post('cheqno'),
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$sales,
			);
		}
		
		$result3=$this->db->insert('ledger',$data3);
	}
		
	if ($this->input->post('total')>$this->input->post('paid'))
		{
		$data4 = array(
				'par' 	=> '12', 
				'acc' 	=> '12'.$this->input->post('customer'), 
				'amnt' 	=> -(($this->input->post('total'))-($this->input->post('paid'))), 
				'statement' => $custmrr['customerName'].' مبيعات '.$sales.' مديونية ',
				'user' => $this->session->userdata('userid'),
				'ref' 	=> 's'.$sales,
			);
		$result4=$this->db->insert('ledger',$data4);
	
		} 

   return  $sales;
	}

}