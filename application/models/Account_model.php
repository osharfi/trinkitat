<?php
class Account_model extends CI_Model{
	
	public function __construct()
        {
                $this->load->database();
        }

public function get_statement($accid)
		{
	
		$this->db->select(' * FROM ledger WHERE acc IN (SELECT accno FROM accounts WHERE id='.$accid.') and par IN (SELECT par FROM accounts WHERE id='.$accid.') order by datetime 
', FALSE);
			
		$query = $this->db->get();
		return $query->result_array();
			
		} 
		
public function get_statementsr()
		{
	$acc = $this->input->post('acc');
	$par = $this->input->post('par');
	$sdate = date('Y-m-d H:i:s', strtotime($this->input->post('sdate')));
	$edate = date('Y-m-d H:i:s', strtotime($this->input->post('edate')));
	
	$this->db->select('(select sum(amnt) from ledger where acc = '.$acc.' and par = '.$par.' and datetime < "'.$sdate.'" ) as pretotal, id, datetime, amnt, statement from ledger where datetime BETWEEN "'.$sdate.'" and "'.$edate.'" and acc = '.$acc.' and par = '.$par.' ORDER BY ledger.datetime', FALSE);
			
		$query = $this->db->get();
		return $query->result_array();
			
		} 
		
	public function get_statementsrp()
		{
	//$acc = $this->input->post('acc');
	$par = $this->input->post('acc');
	$sdate = date('Y-m-d H:i:s', strtotime($this->input->post('sdate')));
	$edate = date('Y-m-d H:i:s', strtotime($this->input->post('edate')));
	
	$this->db->select('(select sum(amnt) from ledger where  par = '.$par.' and datetime < "'.$sdate.'" ) as pretotal, id, datetime, amnt, statement, acc from ledger where datetime BETWEEN "'.$sdate.'" and "'.$edate.'" and par = '.$par.' ORDER BY ledger.datetime', FALSE);
			
		$query = $this->db->get();
		return $query->result_array();
			
		} 		
		
public function get_incomestatement()
		{

	$sdate = date('Y-m-d H:i:s', strtotime($this->input->post('sdate')));
	$edate = date('Y-m-d H:i:s', strtotime($this->input->post('edate')));
	
	$this->db->select('(select sum(amnt) from ledger where acc = 41 and par = 4 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as pincome, (select sum(amnt) from ledger where acc = 42 and par = 4 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as hincome, (select sum(amnt) from ledger where acc = 33 and par = 3 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as purchase, (select sum(amnt) from ledger where acc = 35 and par = 3 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as salary, (select sum(amnt) from ledger where acc = 35 and par = 3 and ref = 1 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as psalary, (select sum(amnt) from ledger where acc = 35 and par = 3 and ref = 2 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as hsalary, (select sum(amnt) from ledger where acc = 319 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "311",  (select sum(amnt) from ledger where acc = 321 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "321",  (select sum(amnt) from ledger where acc = 312 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "312",  (select sum(amnt) from ledger where acc = 322 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "322", (select sum(amnt) from ledger where acc = 313 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "313",  (select sum(amnt) from ledger where acc = 323 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "323", (select sum(amnt) from ledger where acc = 314 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "314",  (select sum(amnt) from ledger where acc = 324 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "324", (select sum(amnt) from ledger where acc = 315 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "315",  (select sum(amnt) from ledger where acc = 325 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "325", (select sum(amnt) from ledger where acc = 316 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "316",  (select sum(amnt) from ledger where acc = 326 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "326", (select sum(amnt) from ledger where acc = 317 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "317",  (select sum(amnt) from ledger where acc = 327 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "327", (select sum(amnt) from ledger where acc = 318 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "318",  (select sum(amnt) from ledger where acc = 328 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "328", (select sum(amnt) from ledger where acc = 319 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "319",  (select sum(amnt) from ledger where acc = 329 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "329", (select sum(amnt) from ledger where acc = 3110 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3110",  (select sum(amnt) from ledger where acc = 3210 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3210", (select sum(amnt) from ledger where acc = 3111 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3111",  (select sum(amnt) from ledger where acc = 3211 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3211", (select sum(amnt) from ledger where acc = 3112 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3112",  (select sum(amnt) from ledger where acc = 3212 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3212", (select sum(amnt) from ledger where acc = 3113 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3113",  (select sum(amnt) from ledger where acc = 3213 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3213", (select sum(amnt) from ledger where acc = 3114 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3114",  (select sum(amnt) from ledger where acc = 3214 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3214",  (select sum(amnt) from ledger where acc = 3115 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3115",  (select sum(amnt) from ledger where acc = 3215 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3215",  (select sum(amnt) from ledger where acc = 3116 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3116",  (select sum(amnt) from ledger where acc = 3216 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3216",  (select sum(amnt) from ledger where acc = 3117 and par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3117",  (select sum(amnt) from ledger where acc = 3217 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3217",  (select sum(amnt) from ledger where acc = 3218 and par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as "3218",  (select sum(amnt) from ledger where par = 31 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as ptexp,  (select sum(amnt) from ledger where  par = 32 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as htexp, (select sum(amnt) from ledger where  par = 3 and acc = 34 and datetime BETWEEN "'.$sdate.'" and "'.$edate.'" ) as tax' , FALSE);
			
		$query = $this->db->get();
		return $query->row_array();
			
		} 
		

 	public function get_day1()
		{				
	$acc = 112;
	$par = 11;
	$this->db->select('(select sum(amnt) from ledger where acc = '.$acc.' and par = '.$par.' and date(datetime) < CURDATE() ) as pretotal, id, datetime, amnt, statement from ledger where date(datetime) = CURDATE() and acc = '.$acc.' and par = '.$par.' ORDER BY ledger.datetime', FALSE);
		
		$query = $this->db->get();
		return $query->result_array();
		} 
		
 	public function get_day2()
		{
	
	$acc = 113;
	$par = 11;
	$this->db->select('(select sum(amnt) from ledger where acc = '.$acc.' and par = '.$par.' and date(datetime) < CURDATE() ) as pretotal, id, datetime, amnt, statement from ledger where date(datetime) = CURDATE() and acc = '.$acc.' and par = '.$par.' ORDER BY ledger.datetime', FALSE);
				$query = $this->db->get();
				return $query->result_array();
		} 
		
 	public function get_accounts()
		{
				
		$this->db->select('id, accname, accno, (select accname from  accounts t where m.par = t.accno) as parent, (select sum(amnt) from ledger where ledger.acc = m.accno and ledger.par = m.par) as balance  FROM accounts m', FALSE);
			
		$query = $this->db->get();
		return $query->result_array();
		} 
	 
	 public function get_accounts_list()
		{		
		$query = $this->db->get('accounts');
		return $query->result_array();
		} 

	public function save_transfer(){
		if ($this->input->post('tdate')=='')
		{

		$data = array(
				'par' 	=> $this->input->post('creditpar'), 
				'acc' 	=> $this->input->post('credit'), 
				'amnt' 	=> $this->input->post('amnt'), 
				'statement' => $this->input->post('statement').' '.$this->input->post('debitnm'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result=$this->db->insert('ledger',$data);
		
		$data2 = array(
				'par' 	=> $this->input->post('debitpar'), 
				'acc' 	=> $this->input->post('debit'), 
				'amnt' 	=> -$this->input->post('amnt'), 
				'statement' => $this->input->post('statement').' '.$this->input->post('creditnm'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result2=$this->db->insert('ledger',$data2);
		} else {
		$tdate = date('Y-m-d H:i:s', strtotime($this->input->post('tdate')));

		$data = array(
				'par' 	=> $this->input->post('creditpar'), 
				'acc' 	=> $this->input->post('credit'), 
				'amnt' 	=> $this->input->post('amnt'), 
				'datetime' 	=> $tdate,
				'statement' => $this->input->post('statement').' '.$this->input->post('debitnm'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result=$this->db->insert('ledger',$data);
		
		$data2 = array(
				'par' 	=> $this->input->post('debitpar'), 
				'acc' 	=> $this->input->post('debit'), 
				'amnt' 	=> -$this->input->post('amnt'), 
				'datetime' 	=> $tdate,
				'statement' => $this->input->post('statement').' '.$this->input->post('creditnm'),
				'user' => $this->session->userdata('userid'),
			);
			
		$result2=$this->db->insert('ledger',$data2);
		}
		}	
	
	public function save_account(){
		$data = array(
				'par' 		=> $this->input->post('par'), 
				'accno' 	=> $this->input->post('accno'), 
				'accname' 	=> $this->input->post('accname'), 
			);
			
		$result=$this->db->insert('accounts',$data);
		
		return $result;
	}

}