<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
		public function index(){
			$d['v'] = 'website/index';
			$this->load->view('website/template',$d);
		}

		public function aboutus(){
			$d['v'] = 'website/aboutus';
			$this->load->view('website/template',$d);
		}
		public function foundermessage(){
			$d['v'] = 'website/foundermessage';
			$this->load->view('website/template',$d);	
		}
		public function office_login(){
			$d['v'] = 'website/office_login';
			$this->load->view('website/template',$d);

		}

		public function apply_online(){
			$d['v'] = 'website/apply_online';
			$this->load->view('website/template',$d);
		}
		public function applyform(){
			$data = $this->input->post();
			$result = $this->Website_model->insert_applyform($data);
			if($result){
				$this->session->set_flashdata("msg","Form Create Successfully !!");
				redirect('website/econtractform/');
		    }else{
				$this->session->set_flashdata("err_msg","Try Again !!");
				redirect('website/signup/');
		    }
			
		}
		public function econtractdocx(){
			$batch = $_SESSION['batch_no'];
			$d['kyc']= $this->Website_model->menu_list($batch);
			$d['v'] = 'website/econtractdocx';
			$this->load->view('website/template_1',$d);
		}
		public function econtractkyc(){
			$d['v'] = 'website/econtractkyc';
			$d['kyc']= $this->Website_model->kyc_details();
			// echo PRE;
			// print_r($d['kyc']);die;
			$this->load->view('website/template_1',$d);
		}
		public function econtractmyteam(){
			$d['v'] = 'website/econtractmyteam';
			$this->load->view('website/template_1',$d);
		}
		public function myofficereport(){
			$d['v'] = 'website/myofficereport';
			$this->load->view('website/template_1',$d);
		}
		public function myofficeexpense(){
			$d['v'] = 'website/myofficeexpense';
			$this->load->view('website/template_1',$d);
		}
		public function myofficemyteam(){
			$d['v'] = 'website/myofficemyteam';
			$this->load->view('website/template_1',$d);
		}

		public function ajeevikageneralgrp(){
			$d['v'] = 'website/ajeevikageneralgrp';
			$this->load->view('website/template_1',$d);
		}

		public function ajeevikamyclubgrp(){
			$d['v'] = 'website/ajeevikamyclubgrp';
			$this->load->view('website/template_1',$d);
		}

		public function ajeevikamyclubincome(){
			$d['v'] = 'website/ajeevikamyclubincome';
			$this->load->view('website/template_1',$d);
		}

		public function mainvacency(){
			$d['v'] = 'website/mainvacency';
			$this->load->view('website/template',$d);
		}
		public function Gallery(){
			$d['v'] = 'website/gallery';
			$this->load->view('website/template',$d);
		}
		public function legaldoc(){
			$d['v'] = 'website/legaldoc';
			$this->load->view('website/template',$d);
		}

		public function privacypolicy(){
			$d['v'] = 'website/privacypolicy';
			$this->load->view('website/template',$d);
		}

		public function contactus(){
			$d['v'] = 'website/contactus';
			$this->load->view('website/template',$d);
		}

		public function helpline(){
			$d['v'] = 'website/helpline';
			$this->load->view('website/template',$d);
		}

		public function signup(){
			$d['v'] = 'website/signup';
			$d['depart'] = $this->Website_model->get_departlist();
			$d['state'] = $this->Website_model->get_statelist();
			$this->load->view('website/template',$d);
		}

		public function econtractform(){
			$d['v'] = 'website/econtractform';
			$signup_id =$_SESSION['signupid'];
			$d['signuplist']= $this->Website_model->signup_list($signup_id);
			// echo PRE;
			// print_r($d['signuplist']);die;
			$d['department'] = $this->Website_model->get_departlist();
			$this->load->view('website/template',$d);
		}
		public function get_post(){
		$id = $this->input->post('depart_id');
			$data = $this->Website_model->get_submenulist($id);

			if(!empty($data)){
				$html ='<option value="">---SELECT---</option>';
				foreach ($data as $key => $value) {
					$html.="<option value=".$value['id'].">".$value['submenu']."</option>";
				}
			}
			echo $html;
	}

		public function create_signup(){
			$data = $this->input->post();
			$status['signupid'] = $this->Website_model->savesignup($data);
			$signupid = $this->session->set_userdata($status);
			if(!empty($signupid)){
				return true;
		    }else{
		    	return false;
		    }
		}

		public function create_officer_details(){
			$data = $this->input->post();
			// echo PRE;
			// print_r($_FILES);
			// print_r($data);die;
			$upload_path = './assets/uploads/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		  if($_FILES['image']['name'] !=''){
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  }
		   if($_FILES['signature']['name'] !=''){
			  $image = upload_file("signature", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['signature'] = $image['path'];
				
			  }
		  }
		   if($_FILES['aadhar']['name'] !=''){
			  $image = upload_file("aadhar", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['aadhar'] = $image['path'];
			  }
		  }
		   if($_FILES['pan']['name'] !=''){
			  $image = upload_file("pan", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['pan'] = $image['path'];
			  }
		  }
		   if($_FILES['bank_account']['name'] !=''){
			  $image = upload_file("bank_account", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['bank_account'] = $image['path'];
			  }
		  }
		   if($_FILES['signature_upload']['name'] !=''){
			  $image = upload_file("signature_upload", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['signature_upload'] = $image['path'];
			  }
		  }
		   if($_FILES['photo_upload']['name'] !=''){
			  $image = upload_file("photo_upload", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['photo_upload'] = $image['path'];
			  }
		  }
		   if($_FILES['security_e_receipt']['name'] !=''){
			  $image = upload_file("security_e_receipt", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['security_e_receipt'] = $image['path'];
			  }
		  }
		  if($_FILES['processing_receipt']['name'] !=''){
			  $image = upload_file("processing_receipt", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['processing_receipt'] = $image['path'];
			  }
		  }
		   if($_FILES['training_receipt']['name'] !=''){
			  $image = upload_file("training_receipt", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['training_receipt'] = $image['path'];
			  }
		  }
		  $data['signup_id'] = $_SESSION['signupid'];
		  
		$run=$this->Website_model->officer_details_model($data);
		if($run){
			unset($_SESSION['signupid']);
			redirect('website/office_login');
			$this->session->set_flashdata("msg","News Added Successfully!!");
		}else{
			$this->session->set_flashdata("err_msg",$run);
			redirect('website/econtractform');
		}
		
	}

	public function logincheck(){
		$data = $this->input->post();
		$result= $this->Website_model->getlogindetails($data);
		// echo PRE;
		// print_r($result);die;
		if($result['verify']===true){
			$this->createsession($result);
			redirect('website/econtractdocx');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/office_login');
		}
	}

	public function createsession($result){
		$data['user_id']=$result['id'];
		$data['batch_no']=$result['batch_no'];
		$this->session->set_userdata($data);
	}

	public function logout(){
		if($this->session->user!==NULL){
			$data=array("user_id","branch_no");
			$this->session->unset_userdata($data);
		}	
		redirect('website/office_login');
	}

	public function getpost(){
		$depart_id = $this->input->post();
		$postdata = $this->Website_model->get_postlistbyid($depart_id);
		if(!empty($postdata)){
			$html = '<option value=" ">Post :</option>';
			foreach ($postdata as $key => $value) {
				$html.= '<option value="'.$value['id'].'">'.$value['post'].'</option>';
			}
			echo $html;
		}
	}

	public function open_progress_report(){
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/open_progress';
        $this->load->view('website/template_1',$d);
	}
	// ''''''''''''''''''''''''''''daily report''''''''''''''''''''''''''''''''''''''

	public function daily_report(){
		// echo PRE;
		// print_r($_SESSION);die;
		$data = $this->input->post();
		$revenue['registration_no']= $data['registration_no'];
		$revenue['applicant_name']= $data['applicant_name'];
		$revenue['father_husband']= $data['father_husband'];
		$revenue['dob']= $data['dob'];
		$revenue['post_name']= $data['post_name'];
		$revenue['fee']= $data['fee'];
		$revenue['date_payment']= $data['date_payment'];
		$revenue['banking_id1']= $data['banking_id1'];
		$revenue['total_revenue']= $data['total_revenue'];
		$revenue['user_id']= $_SESSION['user_id'];
		$revenue['batch_no']= $_SESSION['batch_no'];
		$revenue['added_on']= date('Y-m-d');

		$count = count($revenue['registration_no']);
		for ($i=0; $i < $count; $i++) { 
			// code...
			$arr = array('registration_no'=>$revenue['registration_no'][$i],'applicant_name'=>$revenue['applicant_name'][$i],'father_husband'=>$revenue['father_husband'][$i],'dob'=>$revenue['dob'][$i],'post_name'=>$revenue['post_name'][$i],'fee'=>$revenue['fee'][$i],'date_payment'=>$revenue['date_payment'][$i],'banking_id1'=>$revenue['banking_id1'][$i],'total_revenue'=>$revenue['total_revenue'],'user_id'=>$revenue['user_id'],'batch_no'=>$revenue['batch_no'],'added_on'=>$revenue['added_on']);
			$revenuearray[]=$arr;
		}
		// print_r($revenuearray);
		// '''''''''''''''''''''''''''REVENUE '''''''''''''''''''''''''''''''''''''
		$security['reg_no']=$data['reg_no'];
		$security['name']=$data['name'];
		$security['name_of_post']=$data['name_of_post'];
		$security['security_fund']=$data['security_fund'];
		$security['training_fee']=$data['training_fee'];
		$security['processing_fee']=$data['processing_fee'];
		$security['other_fee1']=$data['other_fee1'];
		$security['total_banking']=$data['total_banking'];
		$security['banking_id2']=$data['banking_id2'];
		$security['total_revenue_1']=$data['total_revenue_1'];
		$security['user_id']= $_SESSION['user_id'];
		$security['batch_no']= $_SESSION['batch_no'];
		$security['added_on']= date('Y-m-d');
		$count1 = count($security['reg_no']);
		for ($i=0; $i < $count1; $i++) { 

			$arr1 = array('reg_no'=>$security['reg_no'][$i],'name'=>$security['name'][$i],'name_of_post'=>$security['name_of_post'][$i],'security_fund'=>$security['security_fund'][$i],'training_fee'=>$security['training_fee'][$i],'processing_fee'=>$security['processing_fee'][$i],'other_fee1'=>$security['other_fee1'][$i],'total_banking'=>$security['total_banking'][$i],'banking_id2'=>$security['banking_id2'][$i],'total_revenue_1'=>$security['total_revenue_1'],'user_id'=>$security['user_id'],'batch_no'=>$security['batch_no'],'added_on'=>$security['added_on']);
			$securityarray[]=$arr1;
		}
		// print_r($securityarray);
		// '''''''''''''''''''''''SECURITY AREA''''''''''''''''''''''''''''''''''''''
		$group['group_no_a'] =$data['group_no_a'];
		$group['group_name_a'] =$data['group_name_a'];
		$group['group_address'] =$data['group_address'];
		$group['meeting_no'] =$data['meeting_no'];
		$group['passbook_issue_fee'] =$data['passbook_issue_fee'];
		$group['weekly_saving_deposit'] =$data['weekly_saving_deposit'];
		$group['emi_deposit'] =$data['emi_deposit'];
		$group['bouncing_fee'] =$data['bouncing_fee'];
		$group['late_fine_fee'] =$data['late_fine_fee'];
		$group['banking_id3'] =$data['banking_id3'];
		$group['total_revenue_2_'] =$data['total_revenue_2_'];
		$group['user_id']= $_SESSION['user_id'];
		$group['batch_no']= $_SESSION['batch_no'];
		$group['added_on']= date('Y-m-d');
		$count2 = count($group['group_no_a']);
		for ($j=0; $j < $count2; $j++) { 
			$arr2 = array('group_no_a'=>$group['group_no_a'][$j],'group_name_a'=>$group['group_name_a'][$j],'group_address'=>$group['group_address'][$j],'meeting_no'=>$group['meeting_no'][$j],'passbook_issue_fee'=>$group['passbook_issue_fee'][$j],'weekly_saving_deposit'=>$group['weekly_saving_deposit'][$j],'emi_deposit'=>$group['emi_deposit'][$j],'bouncing_fee'=>$group['bouncing_fee'][$j],'late_fine_fee'=>$group['late_fine_fee'][$j],'banking_id3'=>$group['banking_id3'][$j],'total_revenue_2_'=>$group['total_revenue_2_'],'user_id'=>$group['user_id'],'batch_no'=>$group['batch_no'],'added_on'=>$group['added_on']);
			$grouparray[]=$arr2;
		}
		// print_r($grouparray);
		// ''''''''''''''''''''''''''''CLUB AREA''''''''''''''''''''''''''''''''''''''''
		$club['group_no_b']=$data['group_no_b'];
		$club['group_name_b']=$data['group_name_b'];
		$club['club_id_no']=$data['club_id_no'];
		$club['club_member_name']=$data['club_member_name'];
		$club['sponsor_no']=$data['sponsor_no'];
		$club['sponsor_level']=$data['sponsor_level'];
		$club['joining_fee']=$data['joining_fee'];
		$club['banking_id4']=$data['banking_id4'];
		$club['total_revenue_3']=$data['total_revenue_3'];
		$club['grand_total_revamue']=$data['grand_total_revamue'];
		$club['user_id']= $_SESSION['user_id'];
		$club['batch_no']= $_SESSION['batch_no'];
		$club['added_on']= date('Y-m-d');
		$count3 = count($club['group_no_b']);
		for($k=0; $k < $count3; $k++) { 
			$arr3 = array('group_no_b'=>$club['group_no_b'][$k],'group_name_b'=>$club['group_name_b'][$k],'club_id_no'=>$club['club_id_no'][$k],'club_member_name'=>$club['club_member_name'][$k],'sponsor_no'=>$club['sponsor_no'][$k],'sponsor_level'=>$club['sponsor_level'][$k],'joining_fee'=>$club['joining_fee'][$k],'banking_id4'=>$club['banking_id4'][$k],'total_revenue_3'=>$club['total_revenue_3'],'grand_total_revamue'=>$club['grand_total_revamue'],'user_id'=>$club['user_id'],'batch_no'=>$club['batch_no'],'added_on'=>$club['added_on']);
			$clubarray[]=$arr3;
		}
		// '''''''''''''''''''''''''TRAVELLING ALLOWANCE''''''''''''''''''''''''''''''''''
		$travelling['inspection_area'] = $data['inspection_area'];
		$travelling['objective'] = $data['objective'];
		$travelling['arrival_time'] = $data['arrival_time'];
		$travelling['arrival_km'] = $data['arrival_km'];
		$travelling['port_of_department'] = $data['port_of_department'];
		$travelling['departure_km'] = $data['departure_km'];
		$travelling['other_fee2'] = $data['other_fee2'];
		$travelling['result'] = $data['result'];
		$travelling['user_id']= $_SESSION['user_id'];
		$travelling['batch_no']= $_SESSION['batch_no'];
		$travelling['added_on']= date('Y-m-d');

		$count4 = count($travelling['inspection_area']);
		for($l=0; $l < $count4; $l++) { 
			$arr4 = array('inspection_area'=>$travelling['inspection_area'][$l],'objective'=>$travelling['objective'][$l],'arrival_time'=>$travelling['arrival_time'][$l],'arrival_km'=>$travelling['arrival_km'][$l],'port_of_department'=>$travelling['port_of_department'][$l],'departure_km'=>$travelling['departure_km'][$l],'other_fee2'=>$travelling['other_fee2'][$l],'result'=>$travelling['result'][$l],'user_id'=>$travelling['user_id'],'batch_no'=>$travelling['batch_no'],'added_on'=>$travelling['added_on']);
			$travellingarray[]=$arr4;
		}
		$form_1 = json_encode($revenuearray);
		$form_2 = json_encode($securityarray);
		$form_3 = json_encode($grouparray);
		$form_4 = json_encode($clubarray);
		$form_5 = json_encode($travellingarray);
		$postdata = $this->Website_model->insert_reports($form_1,$form_2,$form_3,$form_4,$form_5);
		if($postdata===true){
			$this->createsession($result);
			redirect('website/open_progress_report/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/open_progress_report/?status=0');
		}
	}

	// '''''''''''''''''''''''''''''''''''''vacency Area'''''''''''''''''''''''''''''''
	public function login_member(){
		// echo PRE;
		// print_r($_POST);
		$d['v'] = 'website/admit_card';
			$this->load->view('website/template',$d);
	}

	// ................................Admin Panel Area.............................

	public function officer_details(){
		$data['title']="Home";
		$this->template->load('pages','home',$data);
	}
	public function daily_expense(){
		$d['v'] = 'website/daily_expense';
		$this->load->view('website/template_1',$d);

	}
    public function alldata($token=''){
		$this->load->library('alldata');
		$this->alldata->viewall($token);
	}
	
	public function gettable(){
		$this->load->library('alldata');
		$this->alldata->gettable();
	}
	
	public function updatedata(){
		$this->load->library('alldata');
		$this->alldata->updatedata();
	}
}
