<?php
class User_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }

	public function get_user($user_id = FALSE)
		{
				if ($user_id === FALSE)
				{
						$query = $this->db->get('users');
						return $query->result_array();
				}

				$query = $this->db->get_where('users', array('user_id' => $user_id));
				return $query->row_array();
		}
		
	public function save_user(){
		$data = array(
				'user_name' 	=> $this->input->post('username'), 
				'user_password' => md5($this->input->post('upassword')), 
			);
			
		$result=$this->db->insert('users',$data);
		return $result;
	}
	
	public function update_pass()
		{
		$data = array(
				//'user_level' 	=> $this->input->post('username'), 
				'user_password' => md5($this->input->post('upassword')), 
			);
			$this->db->where('user_id', $this->input->post('id'));
			$this->db->update('users', $data); 
		}
	

}