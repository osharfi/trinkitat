<?php
class Customer_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }

	public function get_customer($customerID = FALSE)
		{
				if ($customerID === FALSE)
				{
						$query = $this->db->get('customer');
						return $query->result_array();
				}

				$query = $this->db->get_where('customer', array('customerID' => $customerID));
				return $query->row_array();
		}
		
	public function save_customer(){
		$data = array(
				'customerName' 	=> $this->input->post('fullname'), 
				'customerPhone' => $this->input->post('phone'), 
			);
			
		$result=$this->db->insert('customer',$data);
		return $result;
	}
	
	public function update_customer()
		{
		$data = array(
				'customerName' 	=> $this->input->post('fullname'), 
				'customerPhone' => $this->input->post('phone'), 
			);
			$this->db->where('customerID', $this->input->post('id'));
			$this->db->update('customer', $data); 
		}
	
	
	public function get_customer_statement($customerID = FALSE){
		
			$this->db->from('orders');
			$this->db->join('customer', 'orders.customer = customer.customerID', 'left');
			$this->db->where('customer', $customerID);
			$query = $this->db->get();							
			return $query->result_array();
				
	}
	
}