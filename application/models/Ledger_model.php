<?php
class Ledger_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }

		public function get_count() {
        return $this->db->count_all('ledger');
		}


				
	public function get_ledger($limit, $start) {
        $this->db->limit($limit, $start);
		$this->db->limit($limit, $start);
		$this->db->order_by("id", "desc");

        $query = $this->db->get('ledger');

        return $query->result_array();
   	
				
		}
		
	public function get_ledger_id($id)
		{

				$query = $this->db->get_where('ledger', array('id' => $id));
				return $query->row_array();
				
		}
		
	public function get_ledger_dates()
		{

	$sdate = date('Y-m-d H:i:s', strtotime($this->input->post('sdate')));
	
	$query = $this->db->get_where('ledger', array('datetime' => $sdate));

		return $query->result_array();
			
		} 
		
	public function update_ledger()
		{

		$data = array(
				'acc' => $this->input->post('acc'),
				'par' => $this->input->post('par'),
				'statement' => $this->input->post('statement'),
				'datetime' => $this->input->post('datetime'),
				'amnt' => $this->input->post('amnt')
		);

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('ledger', $data); 
				
		}
				
		
			
	public function delete_ledger($id)
		{
		$this->db->delete('ledger', array('id' => $id));
		}	
		

}