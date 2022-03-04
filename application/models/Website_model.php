<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}

	public function savesignup($data){

		$table=TP."signup";
		$data['added_on']=date('Y-m-d');
		$data['status']=1;
		if($this->db->insert($table,$data)){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	public function officer_details_model($data){

		$table="officer_details";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function getofficerdetails(){
		$query=$this->db->get('officer_details');
    	return $query->result_array();
	}

	public function update_officerrecords($data){
		$username =$data['username'];
		$query=$this->db->get_where('officer_details',array('username' => $username));
    	$no_of_rows= $query->num_rows();
		$final['username'] = $data['username'];
		$final['password'] = $data['password'];
		$final['verify_status']=1;
		$id = $data['id'];
		  $this->db->set($final); 
         $this->db->where("id", $id); 
         $query= $this->db->update("officer_details", $final); 
		return $query;
	}

	public function get_idpass($id){
		$query=$this->db->get_where('officer_details',array('id' => $id));
    	return $query->row_array();

	}

	public function getlogindetails($data){
		$username = $data['txtUserid'];
		$query = $this->db->get_where('officer_details',array('username'=>$username));
		$result =  $query->row_array();
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;
	}

	public function add_depart($data){
		$table="department";  
		$data['added_on']=date('Y-m-d');
		unset($data['save_dep']);	
		$status=$this->db->insert($table,$data);
		if($status){
		     return true;
		}
		else{
			return false;
		}
	}
	public function get_departlist(){
		$query = $this->db->get_where('department',array('status'=>1));
		return  $query->result_array();
	}

	public function delete_department($id){
		 $status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("department", $status); 
		 return $query;	
	}

	public function updt_depart($data){
		$id = $data['id'];
		$department['department'] =$data['department'];
		$this->db->set($department);
		$this->db->where("id",$id);
		$query = $this->db->update("department",$department);
		return $query;
		
	}

	public function add_post($data){
		$table="post";  
		$data['added_on']=date('Y-m-d');
		unset($data['save_post']);
		$status=$this->db->insert($table,$data);
		if($status){
		     return true;
		}
		else{
			return false;
		}
	}

	public function get_postlist(){
		$this->db->where('t1.status',1);
		$this->db->Select('t1.*,t2.department');
		$this->db->from('post t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$query = $this->db->get();
		$records= $query->result_array();
		return $records;
		// $query = $this->db->get_where('post',array('status'=>1));
	}

	public function delete_post(){
		 $status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("post", $status); 
		 return $query;
	}
}

	