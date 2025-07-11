<?php
class Website_model extends CI_Model{
	
	function __construct(){
		parent::__construct(); 
		$this->db->db_debug = false;
	}

	public function savesignup($data){
		    $table=TP."signup";
    		$final['state']=$data['state'];
    		$final['depart_id']=$data['depart_id'];
    		$final['post_id']=$data['post_id'];
    		$final['batch_no']=$data['batch_no'];
    		$final['branch_code']=$data['branch_code'];
    		$final['officer_name']=$data['officer_name'];
    		$final['mobile_no']=$data['mobile_no'];
    		$final['email_id']=$data['email_id'];
    		$final['join_in_branch']=$data['join_in_branch'];
			$final['added_on']=date('Y-m-d');
			// echo PRE;
			// print_r($final);die;
			if($this->db->insert($table,$final)){
				return $this->db->insert_id();
			}
			else{
				return false;
			}
		// $batchno = $data['batch_no'];
		// $query=$this->db->get_where('signup',array('batch_no' => $batchno));
  //   	$rows= $query->num_rows();
  //   	if($rows==0){
    		
  //   	}
  //   	else{
  //   		   return false;
  //   	}
		
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


	public function forgot_pass_candidate($data){
		// echo PRE;
		$this->db->select('id,user_name,mobile_no');
		$this->db->from('stk_vacency_signup');
		$this->db->where(['user_name'=>$data['user_name'],'status'=>1]);
		$qry = $this->db->get()->row_array();
		if(!empty($qry['id'])){
			$status=$this->db->get_where('stk_vacency_candidate_details',array('signup_id'=>$qry['id']))->row('payment_status');
			if($status==1){
				return $qry;
			}
		}
	}

	public function forgot_pass_officer($data){
		
		$this->db->select('id,username,password,mobile_no');
		$this->db->from('stk_officer_details');
		$this->db->where(['username'=>$data['user_name'],'status'=>1]);
		return $this->db->get()->row_array();
	}

	public function deleted_officer($id){
		$signup_id=$this->db->get_where('officer_details',array('id'=>$id))->row('signup_id');
	
		if(!empty($signup_id)){
			$this->db->where("id",$signup_id);
	    	$qry=$this->db->delete('signup');
	    	if($qry==true){
	    		 $this->db->where("id",$id);
	    		$query=$this->db->delete('officer_details');
	    	}
		}else{
			 $this->db->where("id",$id);
	    	 $query=$this->db->delete('officer_details');
		}
		return $query;
	}

	public function signup_list($signup_id){
		$this->db->where('t1.id',$signup_id); 
		$this->db->select('t1.*,t2.department,t3.post,t4.state as state_name'); 
		$this->db->from('signup t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$this->db->join('post t3','t1.post_id=t3.id','left'); 
		$this->db->join('state t4','t1.state=t4.id','left'); 
		// $this->db->order_by('t1.depart_id','desc');
		$query = $this->db->get(); 
		return  $query->row_array();
		
		// $query=$this->db->get_where('signup',array('id' => $signup_id));
		// return $query->result_array();
	}

	public function getofficerdetails(){
		$this->db->where('t1.status',1);
		$this->db->select('t1.*,t2.department,t3.post');
		$this->db->from('officer_details t1');
		$this->db->join('department t2','t1.department_id=t2.id','left');
		$this->db->join('post t3','t1.post_id=t3.id','left');
		$query = $this->db->get();
		return  $query->result_array();
		// $query=$this->db->get('officer_details');
  //   	return $query->result_array();
	}

	public function get_officerdetails_for_update($id){
		$this->db->where(['t1.status'=>1,'t1.id'=>$id]);
		$this->db->select('t1.*,t2.department,t3.post');
		$this->db->from('officer_details t1');
		$this->db->join('department t2','t1.department_id=t2.id','left');
		$this->db->join('post t3','t1.post_id=t3.id','left');
		$query = $this->db->get();
		return  $query->result_array();
	}

	public function get_officer_details(){

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
		$this->db->select('username,password,mobile_no');
		$this->db->where('id',$id);
		$query=$this->db->get('officer_details');
    	return $query->row_array();
	}

	public function kyc_details($id){
		$id =$_SESSION['user_id'];
		$query=$this->db->get_where('officer_details',array('id' => $id));
    	return $query->row_array();
	}

	public function getuser($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t1.post_id,t3.state,t1.officer_first_name,t1.officer_middle_name,t1.officer_last_name');
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

	public function e_contract_doc_list($id){
		$allrecord = $this->all_recordlist($id);
		$qry = $this->db->get_where('my_document',array('depart_id'=>$allrecord['department_id'],'posts'=>$allrecord['post_id']));
		return $qry->row_array();
		
	}

	public function all_recordlist($id){
		$query=$this->db->select('department_id, post_id')->from('officer_details')->where('id',$id)->get()->row_array();
		return $query;
	}



	public function insert_member_all_records($data,$result){
		
		$signup_id = $data['signup_id'];
		$data['added_on']=date('Y-m-d');
		if(!empty($data['applicant_name'])){
			$status=$this->db->insert('member_details',$data);
			$result['member_details_id'] = $this->db->insert_id();	
			if(!empty($result['member_details_id'])){
				$records = $this->uploads_membersrecords($result);
				$final_records = $this->send_mail_id_pass_model($signup_id);
				return $final_records;	
			}
			else{
				return false;
			}
		}
			
	}

	public function send_mail_id_pass_model($signup_id){
		$query=$this->db->get_where('project_member',array('id' =>$signup_id,'status'=>1));
    	return $query->row_array();
	}
	
	public function upldate_members_id_pass($updt){
		$id = $updt['id'];
		 $this->db->where("id",$id); 
	    $query= $this->db->update("project_member",$updt);
	    if($query){
	    	$qry=$this->db->get_where('project_member',array('id' =>$id,'status'=>1));
    	    return $qry->row_array();
	    }
	    else{	
	    	return $query;
	    }
	}


	public function uploads_membersrecords($result){
		$status=$this->db->insert('upload_member_docs',$result);
		// $str = $this->db->last_query();
		if($status){
			return true;
		}
		else{
			return false;
		}
	}


	public function get_signupdetails($last_id){
		// print_r($last_id);die;
		$this->db->where('t1.id',$last_id);
		$this->db->select('t1.*,t2.state,t3.division');
		$this->db->from('project_member t1');
		$this->db->join('state t2','t1.state_unit_name=t2.id','left');
		$this->db->join('division t3','t1.division_unit_name=t3.id','left');
		$query = $this->db->get();
		return $query->row_array();
	}
	// '''''suppense function start'''''''''
	public function get_teamlist($depart_id){
		$id = $depart_id['depart_id'];
		$this->db->where('t1.depart_id',$id);
		$this->db->select('t1.*,t2.state,t3.reg_no,t3.officer_first_name as team_head_first_name,t3.officer_middle_name as team_head_middle_name,t3.officer_last_name as team_head_last_name,t3.father_first as team_father_first,t3.father_middle as team_father_middle,t3.father_last as team_father_last');
		$this->db->from('team t1');
		$this->db->join('state t2','t1.state=t2.id','left');
		$this->db->join('officer_details t3','t1.user_id=t3.id','left');
		$query = $this->db->get();
		return $query->result_array();

	}
	// '''''suppense function end'''''''''


	// public function get_teamlistofficer($depart_id){
	// 	$id = $depart_id['depart_id'];
	// 	$this->db->where('department_id',$id);
	// 	$this->db->select('t1.*,t2.state,t3.division');
	// 	$this->db->from('officer_details t1');
	// 	$this->db->join('state t2','t1.state_unit_name=t2.id','left');
	// 	$this->db->join('division t3','t1.division_unit_name=t3.id','left');
	// 	$this->db->last_query();
	// 	$query = $this->db->get();
	// 	return $query->row_array();
	// }

	public function vacencylist(){
		$this->db->where('t2.payment_status',1);
		$this->db->select('t1.*,t2.father_name,t2.gender,t2.category,t2.aadharno,t3.photo,t3.signature,t4.department,t5.post as Profile');
		$this->db->from('stk_vacency_signup t1');
		$this->db->join('vacency_candidate_details t2','t1.id=t2.signup_id','left');
		$this->db->join('upload_candidate_vacency t3','t2.id=t3.details_id','left');
		$this->db->join('department t4','t1.depart_id=t4.id','left');
		$this->db->join('stk_post t5','t1.post=t5.id','left');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function getgrouplist(){
		$this->db->where(array('t1.username!='=>'','t1.password!='=>''));
		$this->db->select('t1.*,t2.state,t3.division,t4.applicant_name,t4.username as sponsor_id');
		$this->db->from('stk_group_signup t1');
		$this->db->join('state t2','t1.state_unit_name=t2.id');
		$this->db->join('stk_division t3','t1.division_unit_name=t3.id');
		$this->db->join('stk_project_member t4','t1.sponsor_id=t4.id','left');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function vacencylist_by_state($state){

		$this->db->where(array('t2.payment_status'=>1,'t1.state_unit_name'=>$state));
		$this->db->select('t1.*,t2.father_name,t2.gender,t2.category,t2.aadharno,t3.photo,t3.signature,t4.department,t5.post as Profile');
		$this->db->from('stk_vacency_signup t1');
		$this->db->join('vacency_candidate_details t2','t1.id=t2.signup_id','left');
		$this->db->join('upload_candidate_vacency t3','t2.id=t3.details_id','left');
		$this->db->join('department t4','t1.depart_id=t4.id','left');
		$this->db->join('stk_post t5','t1.post=t5.id','left');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
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
		// echo PRE;
		// print_r($data);die;
		$username = $data['txtUserid'];
		$password = $data['txtPassword'];
		$query = $this->db->get_where('officer_details',array('username'=>$username,'password'=>$password));
		$result =  $query->row_array();
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;
	}


	public function checkvacenylogin($data){
		$emailid =  $data['emailid'];
		$password = $data['password'];
		$where = "email='$emailid' OR user_name='$emailid' AND password='$password'";
		$query = $this->db->get_where('vacency_signup',$where);
		$result =  $query->row_array();
		if(!empty($result['id'])){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;

	}


	public function get_vacencydetailsbyid($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t1.*,t2.father_name,t2.gender,t2.category,t2.aadharno,t3.photo,t3.signature,t4.department');
		$this->db->from('stk_vacency_signup t1');
		$this->db->join('vacency_candidate_details t2','t1.id=t2.signup_id','left');
		$this->db->join('upload_candidate_vacency t3','t2.id=t3.details_id','left');
		$this->db->join('department t4','t1.depart_id=t4.id','left');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else{
			return false;
		}
	}

	public function get_accounts($id){
		$where = array('member_id'=>$id);
		return $this->db->get_where('stk_account_details',$where)->result_array();
	}

	public function get_vacencydetailsbyidsforresult($id){
		$this->db->where('t1.applicant_no',$id);
		$this->db->select('t1.*,t2.email,t2.mobile_no,t3.permanent_address,t4.post as post_name');
		$this->db->from('admitcard t1');
		$this->db->join('vacency_signup t2','t1.applicant_no=t2.id','left');
		$this->db->join('vacency_candidate_details t3','t2.id=t3.signup_id','left');
		$this->db->join('stk_post t4','t2.post=t4.id','left');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else{
			return false;
		}
	}


	public function varificationcheck($data){
		$query = $this->db->get_where('officer_details',array('service_did'=>$data['service_no'],'verify_status'=>'1'));
		return $query->num_rows();


	}


	public function save_result($data){
		$admitcard_id =$data['admitcard_id'];
		// $admitcard_id =7;
		$records  =$this->check_recult($admitcard_id);
		if(empty($records)){
			$table="result";  
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

	public function check_recult($admitcard_id){
		$query = $this->db->get_where('result',array('admitcard_id'=>$admitcard_id,'status'=>1));
		return  $query->row_array();
	}
// ab hmm log dekh lete hai result_array(); tum dekh rhi ho n????? ok  v hmm log model me hi hai...
	public function get_resultlist($depart_id){ 
		$this->db->where('t2.depart_id',$depart_id);// ye where condition hai jo pahle bata chuke hai
		$this->db->select('t1.*'); // ye select  function hai 
		$this->db->from('result t1');
		$this->db->join('vacency_signup t2','t1.applicant_no=t2.id');
		$query=$this->db->get(); // yha tk sayad ho chuka tha

		// $query = $this->db->get_where('result',array('status'=>1));
		return  $query->result_array(); 

	}



	public function get_state(){
		$this->db->select('id,name,state_code');
		$this->db->from('all_state');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function insert_admitcard($data){
		$table="admitcard";  
		$data['added_on']=date('Y-m-d');	
		$status=$this->db->insert($table,$data);
		if($status){
		     return true;
		}
		else{
			return false;
		}
	}


	public function check_admitcard($applicant_no){
		$this->db->select('id');
		$this->db->from('admitcard');
		$this->db->where('applicant_no',$applicant_no);
		$query = $this->db->get();
		$result =  $query->row_array();
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Please Fillup The Form");
		}
		return $result;
	}

	public function get_admitcardlist($depart_id){
		$this->db->where('t2.id',$depart_id);
		$this->db->select('t1.* ,t2.id as depart_id');
		$this->db->from('admitcard t1');
		$this->db->join('department t2','t1.designation=t2.department');
		$query = $this->db->get();
		$result =  $query->result_array();
		if(!empty($result)){
			return $result;
		}
		else{
			return false;
		}
	}

	public function admitcard_publish($id){
		// $id = $id['id'];
		// print_r($id );die;
		$publish['publish_admitcard'] =1; 
        $this->db->where("id",$id); 
        $query= $this->db->update("admitcard", $publish); 
	    return $query;	
	}

	public function result_publish($id){
		$id = $id['id'];
		$publish['result_publish'] =1; 
        $this->db->where("id",$id); 
        $query= $this->db->update("result", $publish); 
	    return $query;
	}

	public function loginvacency_foradmitcard($data){
		$emailid =  $data['emailid'];
		$password =  $data['password'];
		$where = "email='$emailid'  OR user_name='$emailid' AND password='$password'";
		$query = $this->db->get_where('vacency_signup',$where);
		$result =  $query->row_array();
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;	
	}


	public function getmemberlist_model($member_no){
		// $this->db->Select();
		// $this->db->from('member_details t1');
		// $this->db->join('project_member t2','t1.signup')
		$query = $this->db->get_where('member_details',array('membership_no'=>$member_no,'status'=>1));
		return  $query->row_array();
	}

	public function account_creates_model($data){
		 $membership_on = $data['member_id'];
		 $where = "username='$membership_on'";

		 $result = $this->db->get_where('stk_project_member',$where)->num_rows();
		 $ac_no = $this->account_no_create();
	
		 if($result>0 && !empty($ac_no)){
		 
		 	$final['account_no'] = $ac_no;
		 	$final['member_id'] = $data['member_id'];
		 	$final['username'] = $data['username'];
		 	$final['state_unit_name'] = $data['state_unit_name'];
		 	$final['division_unit'] = $data['division_unit_name'];
		 	$final['dist_unit'] = $data['dist_unit'];
		 	$final['sponsor_id'] = $data['sponsor_id'];
		 	$final['mobile_no'] = $data['mobile_no'];
		 	$final['email'] = $data['email'];
		 	$final['account_holder_name'] = $data['account_holder_name'];
		 	$final['father_husband_name'] = $data['father_husband_name'];
		 	$final['dob'] = $data['dob'];
		 	$final['occupation'] = $data['occupation'];
		 	$final['gender'] = $data['gender'];
		 	$final['aadhar_no'] = $data['aadhar_no'];
		 	$final['pan_no'] = $data['pan_no'];
		 	$final['village'] = $data['village'];
		 	$final['panchayat'] = $data['panchayat'];
		 	$final['ward_no'] = $data['ward_no'];
		 	$final['police_station'] = $data['police_station'];
		 	$final['block'] = $data['block'];
		 	$final['subdivision'] = $data['subdivision'];
		 	$final['district'] = $data['district'];
		 	$final['pin_code'] = $data['pin_code'];
		 	$final['form'] = $data['form'];
		 	$final['nationality'] = $data['nationality'];
		 	$final['category'] = $data['category'];
		 	$final['ident_marks'] = $data['ident_marks'];
		 	$final['marital_status'] = $data['marital_status'];
		 	$final['saving_plan_name'] = $data['saving_plan_name'];
		 	$final['team_year'] = $data['team_year'];
		 	$final['maintenance_fee'] = $data['maintenance_fee'];
		 	$final['nominee_name'] = $data['nominee_name'];
		 	$final['relation'] = $data['relation'];
		 	$final['age'] = $data['age'];
		 	$final['nominee_aadhar'] = $data['nominee_aadhar'];
		 	$final['group_name'] = $data['group_name'];
		 	$final['group_no'] = $data['group_no'];
		 	$final['meeting_no'] = $data['meeting_no'];
		 	$final['collective_saving_form_no'] = $data['collective_saving_form_no'];
		 	$final['upi_banking'] = $data['upi_banking'];
		 	$final['image'] = $data['image'];
		 	$final['added_on'] = date('Y-m-d');
		 	$table = 'account_details';
		 	$status=$this->db->insert($table,$final);
		 	$last_insert_id = $this->db->insert_id();
			if(!empty($last_insert_id)){
			     return $last_insert_id;
			}
			else{
				return false;
			}
		 }
		 else{
		 	$record['verify']="Member Id does not Exist!";
		 }
	}

	public function get_account_no($inst_id){
		$this->db->select('account_no,mobile_no');
		$this->db->from('account_details');
		$this->db->where('id',$inst_id);
		$query = $this->db->get();
		return $query->row_array();

	}

	public function account_no_create(){
		$this->db->select('*');
		$this->db->from('account_details');
		$this->db->order_by('account_no','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->num_rows();
		if($result==null){
			$account_no = 'SATYA1000001';
			return $account_no;

		}
		else{
			$result = $query->row_array();
			$ac_no = trim($result['account_no'],"SATYA");
			$ac_no = $ac_no+1;
			$final_acno = 'SATYA'.$ac_no;
			return $final_acno;
		}
	}

	public function insert_division($data){
		$table="division`";  	
		$status=$this->db->insert($table,$data);
		if($status){
		     return true;
		}
		else{
			return false;
		}
	}


	public function admitcard_download($id){
		$query = $this->db->get_where('admitcard',array('applicant_no'=>$id,'status'=>1));
		return  $query->result_array();
	}

	public function result_download($id){
		$query = $this->db->get_where('result',array('applicant_no'=>$id,'status'=>1));
		return  $query->result_array();
	}

	public function pdf_generate_admitcard($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t1.*,t2.aadharno,t3.name,t5.post as post_name,t4.mobile_no');
		$this->db->from('admitcard t1');
		$this->db->join('vacency_candidate_details t2','t1.applicant_no=t2.signup_id','left');
		$this->db->join('all_state t3','t1.state_code=t3.state_code','left');
		$this->db->join('vacency_signup t4','t2.signup_id=t4.id','left');
		$this->db->join('stk_post t5','t4.post=t5.id','left');
		$query = $this->db->get();
		$result =  $query->row_array();
		if(!empty($result)){
			return $result;
		}
		else{
			return false;
		}
	}

	public function pdf_generate_result($id){

		$this->db->where('t1.id',$id);
		$this->db->select('t1.*,t4.name as state,t2.photo,t2.signature');
		$this->db->from('result t1');
		$this->db->join('stk_admitcard t2','t1.admitcard_id=t2.id','left');
		$this->db->join('vacency_candidate_details t3','t2.applicant_no=t3.signup_id','left');
		$this->db->join('all_state t4','t2.state_code=t4.state_code','left');
		$this->db->join('vacency_signup t5','t3.signup_id=t5.id','left');
		// $this->db->join('stk_post t6','t5.post=t6.id','left');

		$query = $this->db->get();
		$result =  $query->row_array();
		if(!empty($result)){
			return $result;
		}
		else{
			return false;
		}
	}
		

	public function admitcard_updated($data){
		$id = $data['id']; 
        $this->db->where("id",$id); 
        $query= $this->db->update("admitcard", $data); 
		return $query;	
	}

	public function result_updated($data){
		$id = $data['id']; 
        $this->db->where("id",$id); 
        $query= $this->db->update("result", $data); 
		return $query;	
	}



	public function checkvacenydetails($id){
		$this->db->select('id,signup_id');
		$this->db->from('vacency_candidate_details');
		$this->db->where('signup_id',$id);
		$query = $this->db->get();
		$result =  $query->row_array();
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Please Fillup The Form");
		}
		return $result;

	}

	public function details_sms($lastids){
		$this->db->where(['t1.id'=>$lastids,'t1.payment_status'=>1]);
		$this->db->select('t2.user_name,t2.password,t1.*,t2.mobile_no,t3.department as department_name,t4.post as post_name,t5.photo,t5.signature');
		$this->db->from('stk_vacency_candidate_details t1');
		$this->db->join('stk_vacency_signup t2','t1.signup_id=t2.id','left');
		$this->db->join('stk_department t3','t2.depart_id=t3.id','left');
		$this->db->join('stk_post t4','t2.post=t4.id','left');
		$this->db->join('stk_upload_candidate_vacency t5','t1.id=t5.details_id','left');
		$query = $this->db->get();
		$result =  $query->row_array();
		return $result;
		
	}

	public function getdetailsuser($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t1.*,t2.department,t3.post as post_name,t4.state,t5.division');
		$this->db->from('vacency_signup t1');
		$this->db->join('department t2','t1.depart_id=t2.id','left');
		$this->db->join('post t3','t1.post=t3.id','left');
		$this->db->join('state t4','t1.state_unit_name=t4.id','left');
		$this->db->join('division t5','t1.division_unit_name=t5.id','left');
		$query = $this->db->get();
		// $query = $this->db->get_where('vacency_signup',array('id'=>$id));
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
	public function get_post_list(){
		$query = $this->db->get_where('post',array('status'=>1));
		return  $query->result_array();
		// $query = $this->db->get_where('department',array('status'=>1));
		// return  $query->result_array();
	}

	public function update_officerdetails($data){
		unset($data['save_dep']);
		$this->db->where('id',$data['id']);
		 return $this->db->update('officer_details',$data);

	}	
	public function get_expenselist($depart_id){
		$this->db->where('t2.department_id',$depart_id['depart_id']);
		$this->db->select('t1.*,t2.officer_first_name,t2.officer_middle_name,t2.officer_last_name,t2.batch_no,t2.reg_no,t2.mobile_no,t3.name as state_name');
		$this->db->from('expense t1');
		$this->db->join('officer_details t2','t1.user_id=t2.id','left');
		$this->db->join('all_state t3','t2.state_id=t3.id','left');
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

    public function savevacencysignup($data){
    	$mobile_no = $data['mobile_no'];
    	if(!empty($mobile_no)){
    	  // $query = $this->db->get_where('vacency_signup',array('mobile_no'=>$mobile_no));
		  //  $rows =  $query->num_rows();
		   // if($rows==0 || $rows!=0){
		   	$result=$this->create_user_pass_for_candidate();
		   	if(!empty($result)){
		   		$table = 'vacency_signup';
			   	$data['added_on']=date('Y-m-d');
			   	unset($data['OTP']);
			   	$data['user_name']=$result['username'];
			   	$data['password']=$result['password'];
		    	$status=$this->db->insert($table,$data);
		    	$last_inst_id = $this->db->insert_id();
		    	// $last_query = $this->db->last_query();
				if(!empty($last_inst_id)){ return $last_inst_id; }
				else{ return false; }
		   	}
		   // }
		   // else{ return 'Mobile No. Already Exist!'; }
    	}	
    }

   

    public function create_user_pass_for_candidate(){
    	$this->db->select('id,user_name');
    	$this->db->from('vacency_signup');
    	$this->db->order_by('id','DESC');
    	$qry = $this->db->get();
    	$record =  $qry->row_array();
    	if(!empty($record)){
    		$condt= ((int)date('d').$record['id'])+1;
    		$user = 'CANDSF-'.$condt;
			$pass = date('my').$condt.date('d');
			$update['username'] =$user;
			$update['password'] =$pass;
			return $update;	
			}
		else{
			$condt= 01;
    		$user = 'CANDSF-'.date('d').$condt;
			$pass = date('my').$condt.date('d');
			$update['username'] =$user;
			$update['password'] =$pass;
			return $update;	
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

	public function get_officer_list($id){
			$qry = $this->db->get_where('officer_details',array('id'=>$id));
			return$qry->row_array();
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

	public function get_officer_list_for_myofficedetails($depart_id){
		$this->db->where(['t1.verify_status'=>1,'t1.department_id'=>$depart_id]);
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
		$post['apply_fee'] =$data['apply_fee'];
		$post['security_fund'] =$data['security_fund'];
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

	public function get_divisionlist($state_id){
		$query = $this->db->get_where('division',array('status'=>1,'state_id'=>$state_id['id']));
		return  $query->result_array();
	}

	public function addteam_model($data){

		// $batch_no =$data['batch_no'];
		$user_id =$data['user_id'];
		$service_did=$data['service_did'];
		$check = $this->check_officer($service_did);
		if($check>0){
			$query = $this->db->get_where('team',array('user_id'=>$user_id,'service_did'=>$service_did,'status'=>1));
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
		else{
			return false;
		}
	}

	public function check_officer($service_did){
		$query = $this->db->get_where('officer_details',array('service_did'=>$service_did,'status'=>1));
		
			$count =  $query->num_rows();
			if($count>0){
				return $count;
			}else{
				return $count;
			}

	}


	public function my_team_insert_reports($form_1,$form_2,$form_3,$form_4,$form_5){
		$status1 =$this->revenue_team($form_1);
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
		// print_r($status1);
		// print_r($status2);
		// print_r($status3);
		// print_r($status4);
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

	public function delete_member_model($data){
		$status['status'] = 0;
		$id  =$data['id'];
		 $this->db->set($status); 
         $this->db->where("id", $id); 
         $query= $this->db->update("member_details", $status); 
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

	// $this->db->where('t1.id',$id);
	// 	$this->db->select('t1.*,t2.aadharno,t3.name,t5.post as post_name,t4.mobile_no');
	// 	$this->db->from('admitcard t1');
	// 	$this->db->join('vacency_candidate_details t2','t1.applicant_no=t2.signup_id','left');
	// 	$this->db->join('all_state t3','t1.state_code=t3.state_code','left');
	// 	$this->db->join('vacency_signup t4','t2.signup_id=t4.id','left');
	// 	$this->db->join('stk_post t5','t4.post=t5.id','left');

	public function get_applylist($depart_id,$payment_status){
		if($payment_status==1){
			    $this->db->where(['t1.depart_id'=>$depart_id,'t2.payment_status'=>1]);
				$this->db->select('t1.*,t2.father_name,t2.father_occupation,t2.mother_name,t2.mother_occupqation,t2.annual_encome,t2.gender	,t2.correspondent_address,t2.permanent_address,t2.place,t2.nationality,t2.category,t2.identification_marks,t2.aadharno,t2.panno,t2.marital_status,t2.ins_details,t2.exam_passed,t2.board_university,t2.pasing_year,t2.total_marks,t2.mark_obtained,t2.division,t2.persentage_marks,t2.confirm_1,t3.photo,t3.signature,t3.marksheet,t3.other_quali,t3.exprience,t3.aadhar,t3.thumb,t4.state as state,t5.post as post_name,t6.division');
				$this->db->from('vacency_signup t1');
				$this->db->join('vacency_candidate_details t2','t1.id=t2.signup_id','left');
				$this->db->join('upload_candidate_vacency t3','t2.id=t3.details_id','left');
				$this->db->join('state t4','t1.state_unit_name=t4.id','left');
				$this->db->join('stk_post t5','t1.post=t5.id','left');
				$this->db->join('division t6','t1.division_unit_name=t6.id','left');

				$qry = $this->db->get();
				if($qry->num_rows()>0)
				{
					return $result = $qry->result_array();

				}else
				{
					return 0;
				}

		}
		else{
			$this->db->where(['t1.depart_id'=>$depart_id,'t2.payment_status'=>0]);
			$this->db->select('t1.*,t2.father_name,t2.father_occupation,t2.mother_name,t2.mother_occupqation,t2.annual_encome,t2.gender	,t2.correspondent_address,t2.permanent_address,t2.place,t2.nationality,t2.category,t2.identification_marks,t2.aadharno,t2.panno,t2.marital_status,t2.ins_details,t2.exam_passed,t2.board_university,t2.pasing_year,t2.total_marks,t2.mark_obtained,t2.division,t2.persentage_marks,t2.confirm_1,t3.photo,t3.signature,t3.marksheet,t3.other_quali,t3.exprience,t3.aadhar,t3.thumb,t4.state as state,t5.post as post_name,t6.division');
			$this->db->from('vacency_signup t1');
			$this->db->join('vacency_candidate_details t2','t1.id=t2.signup_id','left');
			$this->db->join('upload_candidate_vacency t3','t2.id=t3.details_id','left');
			$this->db->join('state t4','t1.state_unit_name=t4.id','left');
			$this->db->join('stk_post t5','t1.post=t5.id','left');
			$this->db->join('division t6','t1.division_unit_name=t6.id','left');
			$qry = $this->db->get();
			 
			if($qry->num_rows()>0)
			{
				return $result = $qry->result_array();

			}else
			{
				return 0;
			}
		}
		
	}   


	public function vacencydetails_submit($data){
		
		$records['signup_id'] =  $data['signup_id'];
		$records['father_name'] =  $data['father_name'];
		$records['father_occupation'] =  $data['father_occupation'];
		$records['mother_name'] =  $data['mother_name'];
		$records['mother_occupqation'] =  $data['mother_occupqation'];
		$records['annual_encome'] =  $data['annual_encome'];
		$records['gender'] =  $data['gender'];
		$records['correspondent_address'] =  $data['correspondent_address'];
		$records['permanent_address'] =  $data['permanent_address'];
		$records['place'] =  $data['place'];
		$records['nationality'] =  $data['nationality'];
		$records['category'] =  $data['category'];
		$records['identification_marks'] =  $data['identification_marks'];
		$records['aadharno'] =  $data['aadharno'];
		$records['panno'] =  $data['panno'];
		$records['marital_status'] =  $data['marital_status'];
		$records['ins_details'] =  $data['ins_details'];
		$records['exam_passed'] =  $data['exam_passed'];
		$records['board_university'] =  $data['board_university'];
		$records['pasing_year'] =  $data['pasing_year'];
		$records['total_marks'] =  $data['total_marks'];
		$records['mark_obtained'] =  $data['mark_obtained'];
		$records['division'] =  $data['division'];
		$records['persentage_marks'] =  $data['persentage_marks'];
		$records['confirm_1'] =  $data['confirm_1'];
		$records['amount'] =  $data['amount'];
		$records['candidate_name'] =  $data['candidate_name'];
		$length = 15;
		 $request_no=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
		$records['request_no']=$request_no;
		$records['added_on'] =  date('Y-m-d');
		// ..............Records Value....................
		if(!empty($data['photo'])){
			$uploads['photo'] = $data['photo'];
		}
		if(!empty($data['signature'])){
			$uploads['signature'] = $data['signature'];
		}
		if(!empty($data['marksheet'])){
			$uploads['marksheet'] = $data['marksheet'];
		}
		if(!empty($data['other_quali'])){
			$uploads['other_quali'] = $data['other_quali'];
		}
		if(!empty($data['exprience'])){
			$uploads['exprience'] = $data['exprience'];
		}
		if(!empty($data['aadhar'])){
			$uploads['aadhar'] = $data['aadhar'];
		}
		if(!empty($data['thumb'])){
			$uploads['thumb'] = $data['thumb'];
		}
		$uploads['added_on'] =  date('Y-m-d');
		// ''''''''''''''''''''Uploads File''''''''''''''''''
		$status=$this->db->insert('vacency_candidate_details',$records);
			if($status){
				$uploads['details_id']=$this->db->insert_id();
				return $this->uploads_vacency($uploads);
			}
			else{
				return false;
			}
	}

	public  function uploads_vacency($uploads){
		$status=$this->db->insert('upload_candidate_vacency',$uploads);
		if($status){
			$final['verify']=true;
			$final['details_id']=$uploads['details_id'];
				return $final;
		}
		else{
			return false;
		}
	}

	public function fatch_vacency($id){
		$table="vacency_candidate_details";
		$query = $this->db->get_where($table,array('status'=>1,'id'=>$id));
		return  $query->row_array();
	}
	public function fatch_vacency_signup($ids){
		$table="vacency_signup";
		$query = $this->db->get_where($table,array('status'=>1,'id'=>$ids));
		return  $query->row_array();
	}

	// '''''''''''''''''''''''''PROJECT''''''''''''''''''''''''''''''''
	public function insert_membersignup($data){
		// unset($data['OTP']);
		$data['added_on']= date('Y-m-d');
		if($data['applicant_name']!=null){
			$status=$this->db->insert('project_member',$data);
			$id=$this->db->insert_id();
				if(!empty($id)){
			    $query = $this->db->get_where('project_member',array('id'=>$id));

			    return  $query->row_array();	
			}
			else{
				return false;
			}

		}
		
	}

	public function insert_submembersignup($data){
		// unset($data['OTP']);
		$data['added_on']= date('Y-m-d');
		if($data['applicant_name']!=null){
			$status=$this->db->insert('project_member',$data);
			if(!empty($status)){
				$id=$this->db->insert_id();
				$table="project_member";
			    $query = $this->db->get_where($table,array('id'=>$id));
			    return  $query->row_array();	
			}
			else{
				return false;
			}
		}
		
	}


	// public function insert_membership($data){
	// 	unset($data['captcha']);
	// 	unset($data['captcha_confirm']);
	// 	$data['added_on']= date('Y-m-d');
	// 	$status['varify']=$this->db->insert('project_member',$data);
	// 	$status['last_id']=$this->db->insert_id();
	// 	if($status){
	// 		return $status;
	// 	}
	// 	else{
	// 		return false;
	// 	}

	// }

	public function membership_login($data){
		$emailid =  $data['emailid'];
		$password =  $data['password'];
		$where = "email='$emailid' OR username='$emailid' AND password='$password'";
		$query = $this->db->get_where('project_member',$where);
		// echo $this->db->last_query();die;
		$result = $query->row_array();
		
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;
	}

	public function membership_uploadlist($id){
		$this->db->where('t1.id',$id);
		$this->db->select('t3.*');
		$this->db->from('project_member t1');
		$this->db->join('member_details t2','t1.id=t2.signup_id','left');
		$this->db->join('upload_member_docs t3','t2.id=t3.member_details_id','left');
		$result = $this->db->get();
		$final =  $result->row_array();
		if($final){
		    return $final;
		}
		else{
			return false;
		}
		
	}

	public function insert_group_head($data){
		unset($data['OTP']);
		$data['added_on']=date('Y-m-d');
		if($data['group_name']!=null){
			$status['varify']=$this->db->insert('group_signup',$data);
			$status['last_id']=$this->db->insert_id();
			if($status){
					return $status;
			}
			else{
				return false;
			}
		}
			
	}

	public function get_allclubincome($id){
		$this->db->where('t1.member_id',$id);
		$this->db->select('t1.*,t2.username,t2.sponsor_id as member_creator,t2.created_by,t3.state,t4.division,t5.membership_no,t5.applicant_name,t5.mobile_no as member_mobile,t5.email as member_email,t2.username,t5.super');
		$this->db->from('club_details t1');
		$this->db->join('project_member t2','t1.member_id=t2.id','left');
		$this->db->join('state t3','t2.state_unit_name=t3.id','left');
		$this->db->join('division t4','t2.division_unit_name=t4.id','left');
		$this->db->join('member_details t5','t2.id=t5.signup_id','left');
		$query = $this->db->get();
		return  $query->result_array();
	}

	public function my_clubreport_insert_model($final_data){
		foreach ($final_data as $key => $value) {
			$result[] = $this->db->insert('member_club_report',$value);
		}
		return $result;
	}








	public function group_details($last_group_id){
		$where = "t1.id='$last_group_id'";
		$this->db->where($where);
		$this->db->Select('t1.*,t2.state,t3.division,t4.mobile_no as cell_no,t4.officer_first_name,t4.officer_middle_name,t4.officer_last_name');
		$this->db->from('group_signup t1');
		$this->db->join('stk_state t2','t1.state_unit_name=t2.id','left');
		$this->db->join('stk_division t3','t1.division_unit_name=t3.id','left');
		$this->db->join('officer_details t4','t1.created_by=t4.id','left');
		$query = $this->db->get();
		$result =  $query->row_array();
		return $result;
	}

	public function group_details_member($last_group_id){
		$where = "t1.id='$last_group_id'";
		$this->db->where($where);
		$this->db->Select('t1.*,t2.state,t3.division,t4.mobile_no as cell_no,t4.applicant_name');
		$this->db->from('group_signup t1');
		$this->db->join('stk_state t2','t1.state_unit_name=t2.id','left');
		$this->db->join('stk_division t3','t1.division_unit_name=t3.id','left');
		$this->db->join('project_member t4','t1.created_by=t4.id','left');
		$query = $this->db->get();
		$result =  $query->row_array();
		return $result;
	}


	public function insert_groupdetails($final_array){
		foreach ($final_array as $key => $value) {
			$status[]=$this->db->insert('group_details',$value);
		}
		return json_encode($status);
	}

	public function membership_list_by_group($id){
		$qry = $this->db->get_where('group_details',array('sign_up_id'=>$id,'status'=>1));
		return $qry->result_array();
	}

	public function delete_group_member($id){
		$record = $this->db->update('group_details',array('status'=>0),array('id'=>$id));
		return $record;

	}

	public function create_id_pass_group($group_signup_id){
		$user = 'GROUP'.$group_signup_id;
		$pass = date('ydm').$group_signup_id;
		$update['username'] =$user;
		$update['password'] =$pass;
		$this->db->where('id',$group_signup_id);
		$result = $this->db->update('group_signup',$update);
		if($result==true){
			$query = $this->db->get_where('group_signup',array('id'=>$group_signup_id));
			return $query->row_array();
		}
		// return $result;
	}

	public function get_grouplist($id){
		$where = "t1.created_by='$id'";
		$this->db->where($where);
		$this->db->Select('t1.*,t2.state,t3.division,t4.mobile_no as cell_no,t4.officer_first_name,t4.officer_middle_name,t4.officer_last_name');
		$this->db->from('group_signup t1');
		$this->db->join('stk_state t2','t1.state_unit_name=t2.id','left');
		$this->db->join('stk_division t3','t1.division_unit_name=t3.id','left');
		$this->db->join('officer_details t4','t1.created_by=t4.id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;
	}

	public function get_memberlist($id){
		$where = "t1.created_by='$id' AND t1.sponsor_id='0'";
		$this->db->where($where);
		$this->db->Select('t1.created_by,t3.*,t2.mobile_no as cell_no,t2.officer_first_name,t2.officer_middle_name,t2.officer_last_name');
		$this->db->from('project_member t1');
		// $this->db->join('stk_state t2','t1.state_unit_name=t2.id','left');
		// $this->db->join('stk_division t3','t1.division_unit_name=t3.id','left');
		$this->db->join('officer_details t2','t1.created_by=t2.id','left');
		$this->db->join('member_details t3','t1.id=t3.signup_id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;

	}

	public function get_submemberlist($get_id){
		$where = "t1.sponsor_id='$get_id'";
		$this->db->where($where);
		$this->db->Select('t1.created_by,t3.*,t2.mobile_no as cell_no,t2.officer_first_name,t2.officer_middle_name,t2.officer_last_name');
		$this->db->from('project_member t1');
		// $this->db->join('stk_state t2','t1.state_unit_name=t2.id','left');
		// $this->db->join('stk_division t3','t1.division_unit_name=t3.id','left');
		$this->db->join('officer_details t2','t1.created_by=t2.id','left');
		$this->db->join('member_details t3','t1.id=t3.signup_id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;
	}

	public function getgroup_memberlist($ids){
		$where = "t1.sign_up_id='$ids'";
		$this->db->where($where);
		$this->db->select('t1.*,t2.email,t2.nominee_name,t2.nominee_relation,t3.username,t3.password,t4.inception_date');
		$this->db->from('group_details t1');
		$this->db->join('member_details t2','t1.member_id=t2.membership_no','left');
		$this->db->join('project_member t3','t2.signup_id=t3.id','left');
		$this->db->join('stk_group_signup t4','t1.sign_up_id=t4.id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;
	}

	public function get_member_submemberlist($id){
		$this->db->where(['t2.sponsor_id'=>$id,'t2.created_by'=>$id]);
		$this->db->select('t1.id,t1.nominee_name,t1.nominee_relation,t1.app_date,t2.*');
		$this->db->from('member_details t1');
		$this->db->join('project_member t2','t1.signup_id=t2.id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;
	}

	public function group_login($data){
		$emailid =  $data['emailid'];
		$password =  $data['password'];
		$where = "email='$emailid'  OR username='$emailid' AND password='$password'";
		$query = $this->db->get_where('group_signup',$where);
		// echo $this->db->last_query();die;
		$result =  $query->row_array();
		
		if(!empty($result)){
			$result['verify']=true;
		}
		else{
			$result=array('verify'=>"Wrong Credentials!");
		}
		return $result;
	}

	public function update_form($id,$payment_status,$payment_details,$razorpay_payment_id){
		$table='vacency_candidate_details';
		$payment_details = json_encode($payment_details);
		$final['payment_status'] = $payment_status;
		$final['payment_id'] = $razorpay_payment_id;
		$final['payment_details'] = $payment_details;
		// echo PRE;
		// print_r($id);
		// print_r($final);die;
		$this->db->where('id',$id);
		$sql = $this->db->update($table,$final);
		if($sql==true){
			return true;
		}
		else{
			return false;
		}	
	}
	// '''''''''''''''''''''''''''''ADMIN''''''''''''''''''''''''''''''''''''''''''''''''
	public function get_memberlist_for_admin(){
		$this->db->where('t1.status',1);
		$this->db->Select('t1.*,t2.id as sign_id,t2.sponsor_id,t2.created_by,t2.username,t2.password,t3.image,t4.state,t5.division');
		$this->db->from('member_details t1');
		$this->db->join('project_member t2','t1.signup_id=t2.id','left');
		$this->db->join('upload_member_docs t3','t1.id=t3.member_details_id','left');
		$this->db->join('state t4','t1.state_unit_name=t4.id','left');
		$this->db->join('division t5','t1.division_unit_name=t5.id','left');
		$query = $this->db->get();
		$result =  $query->result_array();
		return $result;	
	}

	

		



	public function get_certificatelist($id){
		$record = $this->find_certificate($id);
		if(empty($record)){
		  $data = $this->get_certificate_no();
		  if(!empty($data)){
		  	$this->db->where(['t1.status'=>1,'t1.id'=>$id]);
			$this->db->Select('t1.*,t2.image');
			$this->db->from('member_details t1');
			$this->db->join('upload_member_docs t2','t1.id=t2.member_details_id','left');
			$query = $this->db->get();
			$records =  $query->row_array();
		  	$cf_no = trim($data['cf_no'],"CF");
			$cf_no = $cf_no+1;
			if($cf_no>9){
				$final_cfno = 'CF00'.$cf_no;
			}else{
				$final_cfno = 'CF000'.$cf_no;
			}
			$records['cf_no'] = $final_cfno;
		    return $records;

		  }else{
		  	$this->db->where(['t1.status'=>1,'t1.id'=>$id]);
			$this->db->Select('t1.*,t2.image');
			$this->db->from('member_details t1');
			$this->db->join('upload_member_docs t2','t1.id=t2.member_details_id','left');
			$query = $this->db->get();
			$records =  $query->row_array();
		    $cf_no = 'CF0001';
		  	$records['cf_no'] = $cf_no;
		    return $records;
		  }
		}
		else{
			return $record;
		}
	}

	public function find_certificate($id){
		$query = $this->db->get_where('member_certificate',array('status'=>1,'member_id'=>$id));
		    $records= $query->row_array();
	}

	public function get_certificate_no(){
		$this->db->select('cf_no');
		$this->db->from('member_certificate');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get();

		$res = $query->num_rows();
		if($res>0){
			return $res = $query->row_array();

		}
		else{
			
			return $res=false;
		}
	}

	public function membership_certificate_model($id){
		$this->db->where(['status'=>1,'signup_id'=>$id]);
		$this->db->select('*');
		$this->db->from('member_certificate');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get();

		$res = $query->num_rows();
		if($res>0){
			return $res = $query->row_array();

		}
		else{
			
			return $res=false;
		}
	}

	public function create_member_certificate($data){
		$data['added_on']=date('Y-m-d');
		unset($data['save_dep']);
		$status['varify']=$this->db->insert('member_certificate',$data);
	
		$last_id=$this->db->insert_id();
		if($status['varify']){
			$query = $this->db->get_where('member_certificate',array('status'=>1,'id'=>$last_id));
		    return $query->row_array();
		}
		else{
			return false;
		}
	}

	public function add_club_membership_model($data){
		$arr[] = $data['confirm_1'];
		$arr[] = $data['confirm_2'];
		$arr[] = $data['confirm_3'];
		$arr[] = $data['confirm_4'];
		unset($data['confirm_1']);
		unset($data['confirm_2']);
		unset($data['confirm_3']);
		unset($data['confirm_4']);
		$final_conf = json_encode($arr);
		$length = 15;
		 $request_no=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
		$data['confirm']= $final_conf;
		$data['request_id']=$request_no;
		$data['member_id']=$_SESSION['member_id'];
		$data['added_on']=date('Y-m-d');
		$status['varify']=$this->db->insert('club_details',$data);
		 $status['inserted_id'] = $this->db->insert_id();
		return $status;
	}

	public function fatch_club_details($id){
		$query = $this->db->get_where('club_details',array('status'=>1,'id'=>$id));
		    return $query->row_array();
	}


	public function update_club_success($postdata){
	 $payment_id = $postdata['razorpay_payment_id'];
      $paymentdetail = json_encode($postdata);
      $inserted_id = $this->session->userdata('inserted_id');
      //$order_array = json_decode($order_id,true);
      if(!empty($inserted_id)){
        $updatestatus= $this->db->update('club_details',array('payment_status'=>'1','payment_details'=>$paymentdetail,'payment_id'=>$payment_id),array('id'=>$inserted_id));
        $this->session->unset_userdata('inserted_id');
        if($updatestatus==true){
        	return true;
        }else{
        	return false;
        }         
      } 
	}


	public function account_check_details($data){
		$mobile = $data['mobile'];
		$account_no = $data['ac_no'];
		$query = $this->db->get_where('stk_account_details',array('mobile_no'=>$mobile,'account_no'=>$account_no));
		    return $query->row_array();
	}
	public function account_check_details_by_own_member($data){
		$mobile = $data['mobile'];
		$account_no = $data['ac_no'];
		$member_id = $_SESSION['member_id'];
		$query = $this->db->get_where('stk_account_details',array('mobile_no'=>$mobile,'account_no'=>$account_no,'sponsor_id'=>$member_id ));
		    return $query->row_array();
	}

	public function account_cr_balance($data){
		$trans_type = CR;
		$this->db->where(['account_no'=>$data,'trans_type'=>$trans_type,'status'=>1]);
		$this->db->select("SUM(trans_amount) as credit_amount");
		$this->db->from('stk_transaction');
		$query = $this->db->get();
		return $query->row_array();

	}

	public function account_dr_balance($data){
		    $trans_type = DR;
			$this->db->where(['account_no'=>$data,'trans_type'=>$trans_type,'status'=>1]);
			$this->db->select("SUM(trans_amount) as debit_amount");
			$this->db->from('stk_transaction');
			$qry = $this->db->get();
			return  $qry->row_array();
	}

	public function get_all_data($id){
		$query = $this->db->get_where('stk_account_details',array('id'=>$id));
		    return $query->row_array();
	}

	public function add_e_deposit($data){
		$trans['member_id'] = $_SESSION['member_id'];
		$trans['account_no'] = $data['account_no'];
		$trans['trans_type'] = CR;
		$trans['trans_amount'] = $data['weekly_deposit_in_number'];
		$trans['trans_amount_in_word'] = $data['weekly_deposit_in_word'];
		$trans['added_on'] = $data['deposit_date'];
		$data['deposit_session'] = date('Y').'-'.date('Y',strtotime('+1 year'));
		$result = $this->add_trans($data);
		if(!empty($result))
		{	$id = $result;
		 	$trans['trans_details_id'] = $result;
		 	$res['verify'] = $this->db->insert('stk_transaction',$trans);
		 	if($res['verify']==true){
		 		$this->db->where('id',$id);
		 		$this->db->select('recept_no');
		 		$this->db->from('stk_transaction_details');
		 		$qry = $this->db->get();
		 		$res['recept_no'] = $qry->row('recept_no');
		 		return $res;
		 		
		 	}
		 	else{
		 		return $res;
		 	}	
		}
		else{
			return false;
		}

	}



	public function add_trans($data){
		unset($data['weekly_deposit_in_word']);
		unset($data['weekly_deposit_in_number']);
		$this->db->select('recept_no');
		$this->db->from('stk_transaction_details');
		$this->db->order_by('id DESC');
		$qry = $this->db->get();
		$res['recpt_no'] = $qry->row('recept_no');
		if(!empty($res)){
			$recp = trim($res['recpt_no'],"REC-");
			$recp = $recp+1;
			$data['recept_no'] = 'REC-'.$recp;
			$data['added_on']=date('Y-m-d H:i:s');
		    $result = $this->db->insert('stk_transaction_details',$data);
		    return $this->db->insert_id();
			
		}else{
			$data['recept_no'] = 'REC-1001';
			$data['added_on']=date('Y-m-d H:i:s');
		    $result = $this->db->insert('stk_transaction_details',$data);
		    return $this->db->insert_id();
		}
	}

	public function e_receipt_check($data){
		$date = $data['dp_date'];
		$e_receipt = $data['recept_no'];
		$this->db->where(array('t1.deposit_date'=>date('Y-m-d',strtotime($date)),'t1.recept_no'=>$e_receipt));
		$this->db->select('t1.*,t2.trans_type,t2.trans_amount,t2.trans_amount_in_word,t3.state,t4.division');
		$this->db->from('stk_transaction_details t1');
		$this->db->join('stk_transaction t2','t1.id=t2.trans_details_id','left');
		$this->db->join('stk_state t3','t1.state_unit_code=t3.id','left');
		$this->db->join('stk_division t4','t1.division_unit=t4.id','left');
		$qry = $this->db->get();
		return $qry->row_array();
	}

	public function get_account_trans($accno){
		$where = array('account_no'=>$accno);
		return $this->db->get_where('stk_transaction',$where)->result_array();
	}

	public function print_e_receipt_model($recpt){
		$this->db->where(array('t1.recept_no'=>$recpt));
		$this->db->select('t1.*,t2.trans_type,t2.trans_amount,t2.trans_amount_in_word,t3.state,t4.division');
		$this->db->from('stk_transaction_details t1');
		$this->db->join('stk_transaction t2','t1.id=t2.trans_details_id','left');
		$this->db->join('stk_state t3','t1.state_unit_code=t3.id','left');
		$this->db->join('stk_division t4','t1.division_unit=t4.id','left');
		$qry = $this->db->get();
		return $qry->row_array();

		
	}

	public function add_withdraw_details($data){
		$account_no = $data['account_no'];
		$withdraw_amount = $data['withdraw_amount_in_number'];
		$cr = $this->Check_cr_amount($account_no);
		$dr = $this->Check_dr_amount($account_no);
		$current_amount = $cr['credit_amount']-$dr['dabit_amount'];
		if($current_amount>$withdraw_amount && $current_amount>0){
			$add_amount['trans_amount'] = $data['withdraw_amount_in_number'];
			$add_amount['trans_amount_in_word'] = $data['withdraw_amount_in_word'];
			$add_amount['account_no'] = $data['account_no'];
			$add_amount['added_on'] =date('Y-m-d H:i:s');
			$add_amount['trans_type'] ='Dabit';
			$add_amount['member_id'] =$_SESSION['member_id'];
			unset($data['withdraw_amount_in_number']);
			unset($data['withdraw_amount_in_word']);
			$res = $this->db->insert('stk_withdraw_details',$data);
			if($res==true){
				$last_insert_ids = $this->db->insert_id();
				$add_amount['trans_details_id'] =$last_insert_ids;
				$final_result = $this->db->insert('stk_transaction',$add_amount);

				return $final_result;

			}
			else{
				return 'Something Error';
			}
		}
		return 'You have no sufficient balance';
	}
	public function Check_cr_amount($account_no){
		$trans_type = CR;
		$this->db->where(['account_no'=>$account_no,'trans_type'=>$trans_type,'status'=>1]);
		$this->db->select("SUM(trans_amount) as credit_amount");
		$this->db->from('stk_transaction');
		$query = $this->db->get();
		return $query->row_array();

	}
	public function Check_dr_amount($account_no){
		$trans_type = DR;
		$this->db->where(['account_no'=>$account_no,'trans_type'=>$trans_type,'status'=>1]);
		$this->db->select("SUM(trans_amount) as dabit_amount");
		$this->db->from('stk_transaction');
		$query = $this->db->get();
		return $query->row_array();

	}

	public function account_list($id){

		$query = $this->db->get_where('stk_account_details',array('sponsor_id'=>$id));
		return $query->result_array();
	}

	public function find_Account_details($acc_no){
		$this->db->order_by('id DESC');
		$query = $this->db->get_where('stk_transaction',array('account_no'=>$acc_no,'status'=>1));
		return $query->result_array();
	}


	public function find_deposit_details($data){
		$id  = $data['acc_no'];
		$query = $this->db->get_where('stk_account_details',array('id'=>$id,'status'=>1));
		$data['account_no'] =  $query->row('account_no');

		if(!empty($data['account_no'])){
			unset($data['acc_no']);
			$session = $data['deposit_session'];
			$acc_no = $data['account_no'];
			$this->db->where(['t1.deposit_session'=>$session,'t1.account_no'=>$acc_no,'t2.trans_type'=>'Credit']);
			$this->db->select('t2.trans_type,t2.added_on,t2.trans_amount');
			$this->db->from('stk_transaction_details t1');
			$this->db->join('stk_transaction t2','t1.id=t2.trans_details_id','left');
			$qry = $this->db->get();
			return $qry->result_array();
		}

	}

	public function getdata($date,$data){
		$id  = $data['acc_no'];
		$query = $this->db->get_where('stk_account_details',array('id'=>$id,'status'=>1));
		$data['account_no'] =  $query->row('account_no');
		if(!empty($data['account_no'])){
			$m = date('m',strtotime($date));
			$y = date('Y',strtotime($date));

			unset($data['acc_no']);
			$session = $data['deposit_session'];
			$acc_no = $data['account_no'];
			$this->db->where(['t1.deposit_session'=>$session,'t1.account_no'=>$acc_no,'t2.trans_type'=>'Credit','month(t2.added_on)'=>$m,'year(t2.added_on)'=>$y]);
			$this->db->select('t2.trans_type,t2.added_on,t2.trans_amount');
			$this->db->from('stk_transaction_details t1');
			$this->db->join('stk_transaction t2','t1.id=t2.trans_details_id','left');
			$qry = $this->db->get();
			return $qry->result_array();


		}
			
	}
	public function group_loan_add($data){
		$check['member_id'] = $data['member_id'];
		$check['group_id'] = $data['group_id'];
		$rec = $this->group_check_loan_details($check);
		if($rec){
			$data['added_on']= date('Y-m-d');
			$query = $this->db->insert('loan_group',$data);
			if($query==true){
				$return['status']=true;
				$return['msg']="Group Loan Request Successfully Submitted !!";
			}else{
				$return['status']=false;
				$error=$this->db->error();
				$return['msg']="code : ".$error['code']."\n Message : ".$error['message'];
			}
		 	
		}else{
			$return['status']=false;
			$error=$this->db->error();
			$return['msg']="Record Not Match please give correct Details.";
		}
		return $return;
	}

	public function group_check_loan_details($check){
		$id = $this->session->userdata('member_id');
		$qry = $this->db->get_where('project_member',array('username'=>$check['member_id'],'id'=>$id));
		$request = $qry->unbuffered_row('array');
		if(!empty($request['id'])){
			$qrys = $this->db->get_where('group_signup',array('username'=>$check['group_id'],'created_by'=>$id));
			$row = $qrys->num_rows();
			if($row>0){
				return true;
			}else{
				return false;
			}
		}
	}

	public function get_group_loan_status($check){
		// echo PRE;
		// print_r($check);die;
		$this->db->select('*');
		$this->db->from('loan_group');
		$this->db->where(['member_id'=>$check['member_id'],'group_id'=>$check['group_id'],'approvel_status'=>1]);
		$this->db->order_by('id','desc');
		$this->db->limit(1);

		$qry = $this->db->get();
		return $qry->unbuffered_row('array');

	}

	public function add_loan_request_member($data){
		
			$member_id = $data['member_id'];
			$rec = $this->check_member_for_loan($member_id);
			if($rec){
				$data['added_on']=date('Y-m-d');
				
				 return $this->db->insert('loan_member',$data);
			}else{
				return false;
			}

	}

	public function check_member_for_loan($member_id){
		$id = $this->session->userdata('member_id');
	
		$qry = $this->db->get_where('project_member',array('username'=>$member_id,'id'=>$id));
		$row = $qry->num_rows();
		if($row>0){
			return true;
		}else{
			return false;
		}
	}

	




}
?>