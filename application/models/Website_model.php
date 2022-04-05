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
    	if($no_of_rows!=0){
    		return false;
    	}else{
    		$final['username'] = $data['username'];
			$final['password'] = $data['password'];
			$final['verify_status']=1;
			$id = $data['id'];
			 $this->db->set($final); 
	         $this->db->where("id", $id); 
	         $query= $this->db->update("officer_details", $final); 
			return $query;

    	}
		
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
	public function delete_post($id){
		 $status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $sid); 
         $query= $this->db->update("post", $status); 
		 return $query;
	}
	public function updt_post($data){
		$id = $data['id'];
		$post['depart_id'] =$data['depart_id'];
		$post['post'] =$data['post'];
		$this->db->set($post);
		$this->db->where("id",$id);
		$query = $this->db->update("post",$post);
		return $query;
	}

	public function get_postlistbyid($depart_id){
		$depart_ids= $depart_id['depart_id'];
		// print_r($depart_ids);die;
		$query = $this->db->get_where('post',array('depart_id'=>$depart_ids,'status'=>1));
		return  $query->result_array();
	}

	public function add_mydocument($data){
		$table="my_document";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}

	}

	public function add_myoffice($data){
		$table="myoffice";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function add_myreport($data){
		$table="myreport";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function add_office_expense($data){
		$table="office_expense";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}

	}

	public function add_myteamoffice_model($data){
		$table="myteamoffice";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function create_generalgroup($data){
		$table="generalgroup";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function create_clubgroup($data){
		$table="my_clubgroup";  
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function add_state($data){
		// echo PRE;
		unset($data['save_state']);
		$table="state";
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
		
	}

	public function get_statelist(){
		$query = $this->db->get_where('state',array('status'=>1));
		return  $query->result_array();
	}

	public function updt_state($data){
		$id = $data['id'];
		$menu['menu'] =$data['menu'];
		$this->db->set($menu);
		$this->db->where("id",$id);
		$query = $this->db->update("menu",$menu);
		return $query;
	}

	public function delete_states($id){
		$status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("state", $status); 
		 return $query;
	}

	public function add_menu($data){
		unset($data['save_menu']);
		$table="menu";
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}	
	}

	public function get_menulist(){
		$query = $this->db->get_where('menu',array('status'=>1));
		return  $query->result_array();
	}
	public function get_submenulist($id){
		$query = $this->db->get_where('submenu',array('status'=>1,'menu_id'=>$id));
		return  $query->result_array();
	}
	public function get_submenulist_all(){
		$this->db->where('t1.status',1);
		$this->db->select('t1.*,t2.menu');
		$this->db->from('stk_submenu t1');
		$this->db->join('stk_menu t2','t1.menu_id=t2.id','left');
		$qry = $this->db->get();
		if($qry->num_rows()>0)
		{
			return $result = $qry->result_array();

		}else
		{
			return 0;
		}




		// $query = $this->db->get_where('submenu',array('status'=>1));
		// $result = $query->result_array();
	}
	public function updt_menu($data){
		// print_r($data);die;
		$id = $data['id'];
		$menu['menu'] =$data['menu'];
		$this->db->set($menu);
		$this->db->where("id",$id);
		$query = $this->db->update("menu",$menu);
		return $query;
	}

	public function	delete_menus($id){
		$status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("menu", $status); 
		 return $query;

	}

	public function add_submenu($data){
		unset($data['save_submenu']);
		$table="submenu";
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function updt_submenu($data){
		$id = $data['id'];
		$submenu['menu_id'] =$data['menu_id'];
		$submenu['submenu'] =$data['submenu'];
		$this->db->set($submenu);
		$this->db->where("id",$id);
		$query = $this->db->update("submenu",$submenu);
		return $query;
	}

	public function delete_submenus($id){
		$status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("submenu", $status); 
		 return $query;
	}

	public function add_childsubmenu($data){
		unset($data['save_submenu']);
		$table="childsubmenu";
		$data['added_on']=date('Y-m-d');
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}

	}

	public function get_childsubmenulist($data){
		$this->db->where('t1.status',1);
		$this->db->select('t1.*,t2.submenu,t3.menu');
		$this->db->from('childsubmenu t1');
		$this->db->join('submenu t2','t1.submenu_id=t2.id','left');
		$this->db->join('menu t3','t1.menu_id=t3.id','left');
		$qry = $this->db->get();
		// $qry = $this->db->get();

		if($qry->num_rows()>0)
		{
			return $result = $qry->result_array();

		}else
		{
			return 0;
		}
	}

	public function updt_childsubmenu($data){
		$id = $data['id'];
		$submenu['menu_id'] =$data['menu_id'];
		$submenu['submenu_id'] =$data['submenu_id'];
		$submenu['child_submenu'] =$data['child_submenu'];
		$this->db->set($submenu);
		$this->db->where("id",$id);
		$query = $this->db->update("childsubmenu",$submenu);
		return $query;
	}

	// '''''''''''''''''''''''''''''''''''''''''''''''''''''Vacency''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
	public function add_vecency($data){
		// print_r($data);die;
		$table="vecency";
		$state_id = $data['state_id'];
		$query = $this->db->get_where('vecency',array('status'=>1,'state_id'=>$state_id));
		$check = $query->num_rows();
		if($check==0){
			$data['added_on']=date('Y-m-d');
			$status=$this->db->insert($table,$data);
			if($status){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
		
	}

	public function list_vecency(){
		$this->db->where('t1.status',1);
		$this->db->select('t1.*,t2.state');
		$this->db->from('vecency t1');
		$this->db->join('state t2','t1.state_id=t2.id','left');
		$qry = $this->db->get();
		if($qry->num_rows()>0)
		{
			return $result = $qry->result_array();

		}else
		{
			return 0;
		}

	}

	public function update_vecency($data){
		$id = $data['id'];
		$vecency['state_id'] =$data['state_id'];
		$vecency['code'] =$data['code'];
		$state_id = $data['state_id'];
		$query = $this->db->get_where('vecency',array('status'=>1,'state_id'=>$state_id));
		$check = $query->num_rows();
			$this->db->set($vecency);
		    $this->db->where("id",$id);
		    $query = $this->db->update("vecency",$vecency);
		    return $query;
	}

	public function delete_vecency($id){
		 $status['status'] = 0;
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("vecency", $status); 
		 return $query;	
	}


	public function insert_applyform($data){
		$data['added_on']=date('Y-m-d');
		$table = 'vacency_apply';
		$status=$this->db->insert($table,$data);
		if($status){
			return true;
		}
		else{
			return false;
		}	
	}

	public function get_applylist($data){
		$query = $this->db->get_where('vacency_apply',array('status'=>1));
		return  $query->result_array();
	}




}
?>

	