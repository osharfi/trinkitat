<?php
class Staff_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }

	public function get_staff($id = FALSE)
		{
				if ($id === FALSE)
				{
						$query = $this->db->get('staff');
						return $query->result_array();
				}

				$query = $this->db->get_where('staff', array('id' => $id));
				return $query->row_array();
		}
		
	public function save_staff(){
		$data = array(
				'name' 	=> $this->input->post('name'), 
				'phone' => $this->input->post('phone'), 
				'position' 	=> $this->input->post('position'), 
				'certificate' => $this->input->post('certificate'), 
				'account' 	=> $this->input->post('account'), 
				'salary' 	=> $this->input->post('salary'), 
				'transport' 	=> $this->input->post('transport'), 
				'bonus' 	=> $this->input->post('bonus'), 
				'living' 	=> $this->input->post('living'), 

			);
			
		$result=$this->db->insert('staff',$data);
		return $result;
	}
	
	
	public function update_staff(){
		$data = array(
				'name' 	=> $this->input->post('name'), 
				'phone' => $this->input->post('phone'), 
				'position' 	=> $this->input->post('position'), 
				'certificate' => $this->input->post('certificate'), 
				'account' 	=> $this->input->post('account'), 
				'salary' 	=> $this->input->post('salary'), 
				'transport' 	=> $this->input->post('transport'), 
				'bonus' 	=> $this->input->post('bonus'), 
				'living' 	=> $this->input->post('living'), 

			);
			
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('staff', $data); 
	}
	
	
	public function get_staff_statement($id = FALSE){
		
			$this->db->from('ledger');
			$this->db->join('staff', 'ledger.acc = staff.account', 'left');
			$this->db->where('par', 22);
			$this->db->where('staff.id', $id);
			$this->db->order_by('ledger.datetime'); 
			$query = $this->db->get();							
			return $query->result_array();
				
	}
	
	public function put_salary(){
		
		$date = $this->input->post('date');
		$month = ' مرتب شهر '.$this->input->post('month');
		$user = $this->session->userdata('userid');
	
	$sql ="insert into ledger (amnt, user, statement, datetime, acc, par )
select salary+transport+bonus+living, ".$user.", '".$month."', '".$date."', account, 22 from staff
";
			$this->db->query($sql);	

$sql2 ="insert into ledger (amnt, user, statement, datetime, acc, par, ref)
select -(salary+transport+bonus+living), ".$user.", name'".$month."', '".$date."', 35, 3, br from staff
";
			$this->db->query($sql2);				
			
	}
	
		public function delete_staff($id)
		{
		$this->db->delete('staff', array('id' => $id));
		}	
}