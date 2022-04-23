<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}

	public function savesignup($data){
		// echo PRE;
		// print_r($data);die;
		$batchno = $data['batch_no'];
		$query=$this->db->get_where('signup',array('batch_no' => $batchno));
    	$rows= $query->num_rows();
    	if($rows==0){
    		$table=TP."signup";
    		$final['state']=$data['state'];
    		$final['depart_id']=$data['dpartment'];
    		$final['post_id']=$data['post'];
    		$final['batch_no']=$data['batch_no'];
    		$final['branch_code']=$data['branch_code'];
    		$final['officer_name']=$data['officer_name'];
    		$final['mobile_no']=$data['mobile_no'];
    		$final['email_id']=$data['email_id'];
    		$final['join_in_branch']=$data['join_in_branch'];
			$final['added_on']=date('Y-m-d');
			if($this->db->insert($table,$final)){
				return $this->db->insert_id();
			}
			else{
				return false;
			}
    	}
    	else{
    		   return false;
    	}
		
	}

	public function officer_details_model($data){
		$table="officer_details";  
		$data['added_on']=date('Y-m-d');
		unset($data['department']);
		unset($data['post']);
		$status=$this->db->insert($table,$data);
		$str = $this->db->last_query();
		// print_r($str);die;
		if($status){
			return true;
		}
		else{
			return false;
		}
	}

	public function signup_list($signup_id){
		$this->db->where('t1.id',$signup_id);
		$this->db->select('t1.*,t2.department,t3.post');
		$this->db->from('signup t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$this->db->join('post t3','t1.post_id=t3.id','left');
		// $this->db->order_by('t1.depart_id','desc');
		$query = $this->db->get();
		return  $query->result_array();
		
		// $query=$this->db->get_where('signup',array('id' => $signup_id));
		// return $query->result_array();
	}

	public function getofficerdetails(){
		$this->db->select('t1.*,t2.department,t3.post');
		$this->db->from('officer_details t1');
		$this->db->join('department t2','t1.department_id=t2.id','left');
		$this->db->join('post t3','t1.post_id=t3.id','left');
		$query = $this->db->get();
		return  $query->result_array();
		// $query=$this->db->get('officer_details');
  //   	return $query->result_array();
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

	public function kyc_details(){
		$id =$_SESSION['user_id'];
		$query=$this->db->get_where('officer_details',array('id' => $id));
    	return $query->row_array();
	}
// ,t2.e_contract,t2.my_office,t2.my_project,t2.vecency,t2.events,t2.gallery
	public function getuser($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t1.post_id,t3.state');
		$this->db->from('officer_details t1');
		$this->db->join('signup t3','t1.signup_id=t3.id','left');
		$query = $this->db->get();
		return  $query->result_array();
	}
	public function getmenudetailsbyid($finalrecord){
		$post_id = $finalrecord['post_id'];
		$state = $finalrecord['state'];
		$query=$this->db->get_where('menu_control',array('post_id' => $post_id,'state'=>$state));
    	return $query->row_array();


	}

	public function myteam_revenuelistbydaily($user_id,$date){
		$user_id= $user_id['id'];
		
		$query = $this->db->get_where('revenue_report_team',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}
	public function myteam_revenuelistbymonthly($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('revenue_report_team',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}

	public function myteam_revenuelistbyyearly($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('revenue_report_team',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}
	public function myteam_securitylistbydaily($user_id,$date){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('security_report_team',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_securitylistbymonthly($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('security_report_team',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_securitylistbyyearly($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('security_report_team',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_grouplistbydaily($user_id,$date){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('group_report_team',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_grouplistbymonthly($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('group_report_team',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_grouplistbyyearly($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('group_report_team',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_clublistbydaily($user_id,$date){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('club_report_team',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_clublistbymonthly($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('club_report_team',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function myteam_clublistbyyearly($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('club_report_team',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function myteam_travellinglistbydaily($user_id,$date){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('travelling_report_team',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_travellinglistbymonthly($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('travelling_report_team',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}
	public function myteam_travellinglistbyyearly($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('travelling_report_team',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
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
	public function get_expenselist(){
		$this->db->select('t1.*,t2.officer_first_name,t2.officer_middle_name,t2.officer_last_name');
		$this->db->from('expense t1');
		$this->db->join('officer_details t2','t1.user_id=t2.id','left');
	    $query = $this->db->get();
		return  $query->result_array();
	}

    public function insert_expense($expenses){
    	$data = json_decode($expenses);
    	if(!empty($data)){
    		$table = 'expense';
    		foreach ($data as $key => $value) {
    			$status=$this->db->insert($table,$value);
				
    		}
    		
    		if($status){
				     return true;
				}
				else{
					return false;
				}
    	}
    }

    public function expensemonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('expense',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}

	public function expenseyear($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('expense',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}

	public function expensedaily($user_id,$date){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('expense',array('user_id'=>$user_id,'added_on'=>$date,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}

    public function insert_requisition($form_data){
    	$data = json_decode($form_data);
    	$table = 'office_resource_requipment';
    	if(!empty($data)){
    		foreach ($data as $key => $value) {
    			$status=$this->db->insert($table,$value);
    		}
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
    public function insert_group_resource($final){
    	$table = 'group_resource';
    	if(!empty($final)){
    		$status=$this->db->insert($table,$final);
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



	public function userdetails(){
		$batch_no = $_SESSION['batch_no'];
		$this->db->where('t1.batch_no',$batch_no);
		$this->db->select('t1.*,t2.code,t3.state');
		$this->db->from('signup t1');
		$this->db->join('vecency t2','t1.state=t2.state_id','left');
		$this->db->join('state t3','t1.state = t3.id','left');
		$query = $this->db->get();
		return  $query->row_array();
	}

	public function open_monthly_report($id){

	}

	public function get_alldepartpostlist(){
		$this->db->select('t1.*,t2.department');
		$this->db->from('post t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$this->db->order_by('t1.depart_id','desc');
		$query = $this->db->get();
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

	public function permissiongenerate($data){
		$post_id = $data['post_id'];
		$state = $data['state'];
		$query = $this->db->get_where('menu_control',array('post_id'=>$post_id,'state'=>$state,'status'=>1));
		$check = $query->num_rows();
		if($check>>0){
			$this->db->where(['post_id'=>$post_id,'state'=>$state]);
            $query= $this->db->update('menu_control',$data); 
		    return $query;
		}else{
			$table="menu_control";  
			$data['added_on']=date('Y-m-d');
			$status=$this->db->insert($table,$data);
			if($status){
				return true;
			}
			else{
				return false;
			}
		}

	}
	public function get_menucontrollist($data){
		$state= $data['state'];
		$this->db->where('t1.state',$state);
		$this->db->select('t1.*,t2.post,t3.department');
		$this->db->from('menu_control t1');
		$this->db->join('post t2','t1.post_id=t2.id','left');
		$this->db->join('department t3','t2.depart_id=t3.id','left');
		$query = $this->db->get();
		// return $query->num_rows();
		return $query->result_array();
	}
	public function get_postlist(){
		$this->db->where('t1.status',1);
		$this->db->Select('t1.*,t2.department');
		$this->db->from('post t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$query = $this->db->get();
		$records= $query->result_array();
		return $records;
	}

	public function get_officer_list_for_myofficedetails(){
		$this->db->where('t1.verify_status',1);
		$this->db->select('t1.batch_no,t1.Join_in_branch,t1.id,t1.mobile_no,t1.email_id,t1.officer_first_name,t1.officer_middle_name,t1.officer_last_name,t3.code,t4.department,t5.post,t6.state');
		$this->db->from('officer_details t1');
		$this->db->join('signup t2','t1.batch_no=t2.batch_no','left');
		$this->db->join('vecency t3','t2.state=t3.state_id','left');
		$this->db->join('department t4','t1.department_id=t4.id','left');
		$this->db->join('post t5','t1.post_id=t5.id','left');
		$this->db->join('state t6','t2.state=t6.id','left');
		$query = $this->db->get();
	    return $query->result_array();
	}

	public function revenuelist($user_id){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('revenue_report',array('user_id'=>$user_id,'status'=>1));
		return  $query->result_array();

	}

	public function securitylist($user_id){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('security_report',array('user_id'=>$user_id,'status'=>1));
		return  $query->result_array();
	}

	public function grouplist($user_id){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('group_report',array('user_id'=>$user_id,'status'=>1));
		return  $query->result_array();
	}

	public function clublist($user_id){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('club_report',array('user_id'=>$user_id,'status'=>1));
		return  $query->result_array();
	}
	public function travellinglist($user_id){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('travelling_report',array('user_id'=>$user_id,'status'=>1));
		return  $query->result_array();
	}

	// '''''''''''''''''''''''''''''''find report list BY MONTH''''''''''''''''''''''''''''''''
	public function revenuelistbymonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('revenue_report',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}
	public function revenuelistbyyear($user_id,$year){
		
		$user_id= $user_id['id'];
		$query = $this->db->get_where('revenue_report',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		// $lastquery = $this->db->last_query();
		return  $query->result_array();
	}

	public function securitylistbymonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('security_report',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function securitylistbyyear($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('security_report',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function grouplistbymonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('group_report',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function grouplistbyyear($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('group_report',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function clublistbymonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('club_report',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function clublistbyyear($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('club_report',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function travellinglistbymonth($user_id,$month){
		$user_id= $user_id['id'];
		$year = date('Y');
		$query = $this->db->get_where('stk_travelling_report',array('user_id'=>$user_id,'month(added_on)'=>$month,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
	}

	public function travellinglistbyyear($user_id,$year){
		$user_id= $user_id['id'];
		$query = $this->db->get_where('stk_travelling_report',array('user_id'=>$user_id,'year(added_on)'=>$year,'status'=>1));
		return  $query->result_array();
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

	public function addteam_model($data){
		$batch_no =$data['batch_no'];
		$user_id =$data['user_id'];
		$query = $this->db->get_where('team',array('user_id'=>$user_id,'batch_no'=>$batch_no));
		// echo $this->db->last_query();die;
		$count =  $query->num_rows();
		if($count==0){
			$table="team";
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


	public function my_team_insert_reports($form_1,$form_2,$form_3,$form_4,$form_5){
		$status1 = $this->revenue_team($form_1);
		$status2 =$this->security_team($form_2);
		$status3 =$this->group_team($form_3);
		$status4 =$this->club_team($form_4);
		$status5 =$this->travelling_team($form_5);
		
		if($status1 && $status2 && $status3 && $status4 && $status5){
			return true;
		}
		else{
			return false;
		}
	}
	public function revenue_team($form_1){
		$revenue = json_decode($form_1);
		$table="revenue_report_team";
		foreach ($revenue as $key => $value) {
		  $qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}

	public function security_team($form_2){
		$security = json_decode($form_2);
		$table="security_report_team";
		foreach ($security as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function group_team($form_3){
		$group = json_decode($form_3);
		$table="group_report_team";
		foreach ($group as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function club_team($form_4){
		$club = json_decode($form_4);
		$table="club_report_team";
		foreach ($club as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function travelling_team($form_5){
		$travelling = json_decode($form_5);
		$table="travelling_report_team";
		foreach ($travelling as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
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


	public function insert_reports($form_1,$form_2,$form_3,$form_4,$form_5){
		$status1 = $this->revenue($form_1);
		$status2 =$this->security($form_2);
		$status3 =$this->group($form_3);
		$status4 =$this->club($form_4);
		$status5 =$this->travelling($form_5);
		print_r($status1);
		print_r($status2);
		print_r($status3);
		print_r($status4);
		if($status1 && $status2 && $status3 && $status4 && $status5){
			return true;
		}
		else{
			return false;
		}
	}
	public function revenue($form_1){
		$revenue = json_decode($form_1);
		$table="revenue_report";
		foreach ($revenue as $key => $value) {
		  $qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}

	public function security($form_2){
		$security = json_decode($form_2);
		$table="security_report";
		foreach ($security as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function group($form_3){
		$group = json_decode($form_3);
		$table="group_report";
		foreach ($group as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function club($form_4){
		$club = json_decode($form_4);
		$table="club_report";
		foreach ($club as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
			return true;
		}
		else{
			return false;
		}
	}
	public function travelling($form_5){
		$travelling = json_decode($form_5);
		$table="travelling_report";
		foreach ($travelling as $key => $value) {
			$qry=$this->db->insert($table,$value);
		}
		if($qry){
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

	