<?php
class Dash_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }


	public function get_info()
		{
			
			$this->db->select('(select count(*) from orders) as orders, (select count(*) from orders where sec = 1) as orders1, (select sum(amnt) from ledger where acc = 111 and par = 11) as box, (select sum(amnt) from ledger where acc = 112 and par = 11) as box1, (select sum(paid) from orders) as paid, (select sum(paid) from orders where sec=1) as paid1,  (select sum(total)-sum(paid) from orders where sec=1) as dept1,  (select sum(total)-sum(paid) from orders) as dept', FALSE);
			
		$query = $this->db->get();
		return $query->row_array();
		}
	


}