<?php
class Shop_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }


	public function get_order($orderid = FALSE)
		{
				if ($orderid === FALSE)
				{
						$this->db->from('shoporder');
						$this->db->join('customer', 'shoporder.customer = customer.customerID', 'left');
						$query = $this->db->get();							
						return $query->result_array();
				}

				$this->db->select('shoporder.*,subshop.*, customer.*,stock.stockname');
				$this->db->from('shoporder');
				$this->db->join('customer', 'shoporder.customer = customer.customerID', 'left');
				$this->db->join('subshop', 'shoporder.orderid = subshop.orderid', 'inner');
				$this->db->join('stock', 'subshop.stockid = stock.stockid', 'left');
				$this->db->where('shoporder.orderid', $orderid);
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
		$query = $this->db->get_where('stock', array('sec in (1, 3)' => null));										
		return $query->result_array();
		}
		
	
		
	public function get_item_name($id)
		{
		$query = $this->db->get_where('stock', array('stockid' => $id));	
		$ret = $query->row();
		return $ret->stockname;									
		}
		
	public function get_item_price($id)
		{
		$query = $this->db->get_where('stock', array('stockid' => $id));	
		$ret = $query->row();
		return $ret->sell;									
		}	
		
	public function delete_order($orderid)
		{
		$this->db->delete('shoporder', array('orderid' => $orderid));
		$this->db->delete('ledger', array('ref' => 's'.$orderid));
		}	
		
	
		
	public function save_order(){
		$data = array(
		
				'customer' 	=> '0',
				'paid'		=> $this->cart->total(), 
				'total' 	=> $this->cart->total()				
			);
			
		$this->db->insert('shoporder',$data);
		
		$id = $this->db->insert_id();
return (isset($id)) ? $id : FALSE;
	}
	
	
public function insert_order_details($data)

{
$this->db->insert('subshop', $data);

}	
		
}