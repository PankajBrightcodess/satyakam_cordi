<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Website extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_and_setcookie();
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
				redirect('website/apply_online/');
		    }else{
				$this->session->set_flashdata("err_msg","Try Again !!");
				redirect('website/apply_online/');
		    }
			
		}
		public function econtractdocx(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/econtractdocx';
			$this->load->view('website/template_1',$d);
		}
		public function econtractkyc(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/econtractkyc';
			$d['kyc']= $this->Website_model->kyc_details();
			// echo PRE;
			// print_r($d['kyc']);die;
			$this->load->view('website/template_1',$d);
		}
		public function econtractmyteam(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/econtractmyteam';
			$this->load->view('website/template_1',$d);
		}
		public function myofficereport(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/myofficereport';
			$this->load->view('website/template_1',$d);
		}

		public function create_team(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['depart'] = $this->Website_model->get_departlist();
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/create_team';
			$this->load->view('website/template_1',$d);

		}

		public function add_team(){
			$data = $this->input->post();
			$result = $this->Website_model->addteam_model($data);
			if($result){
				$this->session->set_flashdata("msg","Team Added Successfully!!");
				redirect('website/create_team');
			}
			else{
				redirect('website/create_team');
				$this->session->set_flashdata("msg","Something Error!!");
			}
		}

		public function myofficeexpense(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/myofficeexpense';
			$this->load->view('website/template_1',$d);
		}

		public function myofficexpensedetails(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/myofficeexpense_details';
			$this->load->view('website/template_1',$d);
		}
		public function myofficemyteam(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/myofficemyteam';
			$this->load->view('website/template_1',$d);
		}

		
		public function ajeevikamyclubgrp(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/ajeevikamyclubgrp';
			$this->load->view('website/template_1',$d);
		}

		public function ajeevikamyclubincome(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
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

		public function vacancy(){
			$d['v'] = 'website/vacancy';
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

		public function vacencysignup(){
			$d['v'] = 'website/vacency_signup';
			$d['depart'] = $this->Website_model->get_departlist();
			$d['state'] = $this->Website_model->get_statelist();
			$this->load->view('website/template',$d);
		}

		public function vacencysignup_create(){
			$data = $this->input->post();
			// echo PRE;
			// print_r($data);die;
			if($data['password']==$data['conf_password']){
			   unset($data['conf_password']);
			// 	echo PRE;
			// print_r($data);die;
			   $savevacencysignup= $this->Website_model->savevacencysignup($data);
			   // print($savevacencysignup);
			   // die;
			   if(!empty($savevacencysignup)){
					$this->vacency_login();
			    }else{
			    	$this->session->set_flashdata("msg","Create Successfully !!");
				redirect('website/vacencysignup/');
			    }
			}
			else{
				$this->session->set_flashdata("msg","Something Error !!");
				redirect('website/vacencysignup/');
			}
		}

		public function get_division(){
			$state_id = $this->input->post();
			$divisiondata = $this->Website_model->get_divisionlist($state_id);

			if(!empty($divisiondata)){
				$html = '<option value="">---SELECT---</option>';
				foreach ($divisiondata as $key => $value) {
					$html.= '<option value="'.$value['id'].'">'.$value['division'].'</option>';
				}
			}
			echo $html;
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
			
			redirect('website/econtractdocx',$final);
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
		$this->update_cookie();
	}

	public function update_cookie(){
		 $this->load->helper('cookie');
		 $user_id = $this->session->userdata('user_id');
         $batch_no = $this->session->userdata('batch_no');

         $cookiearray = array('user_id'=>$user_id,'batch_no'=>$batch_no);
        $json = base64_encode(json_encode($cookiearray));
        $cookie = array(
        'name'   => 'login_cookie',
        'value'  => $json,
        'expire' => '2592000'        
         ); 
		$this->load->helper('cookie');
        $this->input->set_cookie($cookie);
	}

	public function logout(){
		if($this->session->user!==NULL){
			$data=array("user_id","branch_no");
			$this->session->unset_userdata($data);
		}	
		$this->load->helper('cookie');
      	delete_cookie('login_cookie');
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
		$id = $_SESSION['user_id'];
		// print_r($_SESSION);die;
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/open_progress';
        $this->load->view('website/template_1',$d);
	}



	public function open_monthly_progress_report(){
		    $id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$d['revenue'] = $this->Website_model->revenuelistbymonth($user_id,$month);
		$d['security'] = $this->Website_model->securitylistbymonth($user_id,$month);
		$d['group'] = $this->Website_model->grouplistbymonth($user_id,$month);
		$d['club'] = $this->Website_model->clublistbymonth($user_id,$month);
		$d['travelling'] = $this->Website_model->travellinglistbymonth($user_id,$month);
		$d['v'] = 'website/monthly_progress_report';
        $this->load->view('website/template_1',$d);
		
	}

	public function get_monthly_progress_list(){
		$user_id['id'] = $_SESSION['user_id'];
		$month = $_POST['month'];
		$revenuelist = $this->Website_model->revenuelistbymonth($user_id,$month);
		$securitylist = $this->Website_model->securitylistbymonth($user_id,$month);
		$grouplist = $this->Website_model->grouplistbymonth($user_id,$month);
		$clublist = $this->Website_model->clublistbymonth($user_id,$month);
		$travellinglist = $this->Website_model->travellinglistbymonth($user_id,$month);
		// print_r($revenuelist);
		// print_r($securitylist);
		// print_r($grouplist);
		// print_r($clublist);die;
		// print_r($travellinglist);die;
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
                    $html.='<thead>';
                        $html.='<tr>';   
                            $html.='<th>S.NO.</th>';
                            $html.='<th>REGISTRATION No.</th>';                
                            $html.='<th>APPLICANT Name</th>';                
                            $html.='<th>FATHER/HUSBAND</th>';
                            $html.='<th>DOB</th>';
                            $html.='<th>POST NAME</th>';
                            $html.='<th>FEE</th>';
                            $html.='<th>PAYMENT DATE</th>';
                            $html.='<th>BANKING ID</th>';
                            $html.='<th>CREATED DATE</th>';
                           $html.='</tr>';
                    $html.='</thead>';
                    $html.='<tbody>';
                     $i=0;
                         if(!empty($revenuelist)){
                            foreach($revenuelist as $val){$i++; $id=$val['id']; 
                        $html.='<tr>';
                            $html.='<td>'.$i.'</td>';
                            $html.='<td>'.$val['registration_no'].'</td>';
                            $html.='<td>'.$val['applicant_name'].'</td>';
                            $html.='<td>'.$val['father_husband'].'</td>';
                            $html.='<td>'.date('d-m-Y',strtotime($val['dob'])).'</td>';
                            $html.='<td>'.$val['post_name'].'</td>';
                            $html.='<td>'.$val['fee'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['date_payment'])).'</td>';
                            $html.='<td>'.$val['banking_id1'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                        $html.='</tr>'; 
                    }}
                    $html.='</tbody>';
                $html.='</table>';
                // ''''''''''''''''''''''''''''''''revenure''''''''''''''''''''''''
                $html1='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html1.='<thead>';
                                        $html1.='<tr>';    
                                            $html1.='<th>S.NO.</th>';
                                            $html1.='<th>REGISTRATION No.</th>';                
                                            $html1.='<th>APPLICANT NAME</th>';                
                                            $html1.='<th>POST NAME</th>';
                                            $html1.='<th>SECURITY FUND</th>';
                                            $html1.='<th>TRAINING FEE</th>';
                                            $html1.='<th>PROCESSING FEE</th>';
                                            $html1.='<th>OTHER FEE</th>';
                                            $html1.='<th>TOTAL BANKING</th>';
                                            $html1.='<th>BANKING ID</th>';
                                            $html1.='<th>CREATED DATE</th>';
                                            $html1.='<th>TOTAL REVENUE</th>';
                                        $html1.='</tr>';
                                    $html1.='</thead>';
                                    $html1.='<tbody>';
                                         $i=0;
                                         if(!empty($securitylist)){
                                            foreach($securitylist as $val){$i++; $id=$val['id'];
                                        $html1.='<tr>';
                                            $html1.='<td>'.$i.'</td>';
                                            $html1.='<td >'.$val['reg_no'].'</td>';
                                            $html1.='<td >'.$val['name'].'</td>';
                                            $html1.='<td >'.$val['name_of_post'].'</td>';
                                            $html1.='<td >'.$val['security_fund'].'</td>';
                                            $html1.='<td>'.$val['training_fee'].'</td>';
                                            $html1.='<td >'.$val['processing_fee'].'</td>';
                                            $html1.='<td >'.$val['other_fee1'].'</td>';
                                            $html1.='<td >'.$val['total_banking'].'</td>';
                                            $html1.='<td >'.$val['banking_id2'].'</td>';
                                            $html1.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html1.='<td >'.$val['total_revenue_1'].'</td>'; 
                                        $html1.='</tr>';
                                    }}
                                    $html1.='</tbody>';
                                $html1.='</table>';
                    // ''''''''''''''''''''''''''security'''''''''''''''''''''''''''''
                                $html2 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html2.='<thead>';
                                        $html2.='<tr>';    
                                            $html2.='<th>S.NO.</th>';
                                            $html2.='<th>GROUP NO.</th>';                
                                            $html2.='<th>GROUP NAME</th>';                
                                            $html2.='<th>GROUP ADDRESS</th>';
                                            $html2.='<th>MEETING NO.</th>';
                                            $html2.='<th>PASSBOOK ISSUE FEE</th>';
                                            $html2.='<th>WEEKLY SAVING DEPOSIT</th>';
                                            $html2.='<th>EMI DEPOSIT</th>';
                                            $html2.='<th>BOUNCING FEE</th>';
                                            $html2.='<th>LATE FINE FEE</th>';
                                            $html2.='<th>BANKING ID</th>';
                                            $html2.='<th>CREATED DATE</th>';
                                            $html2.='<th>TOTAL REVENUE</th>';                                       
                                        $html2.='</tr>';
                                    $html2.='</thead>';
                                    $html2.='<tbody>';
                                    $i=0;
                                         if(!empty($grouplist)){
                                            foreach($grouplist as $val){$i++; $id=$val['id'];
                                        $html2.='<tr>';
                                            $html2.='<td >'.$i.'</td>';
                                            $html2.='<td >'.$val['group_no_a'].'</td>';
                                            $html2.='<td >'.$val['group_name_a'].'</td>';
                                            $html2.='<td >'.$val['group_address'].'</td>';
                                            $html2.='<td >'.$val['meeting_no'].'</td>';
                                            $html2.='<td >'.$val['passbook_issue_fee'].'</td>';
                                            $html2.='<td >'.$val['weekly_saving_deposit'].'</td>';
                                            $html2.='<td >'.$val['emi_deposit'].'</td>';
                                            $html2.='<td >'.$val['bouncing_fee'].'</td>';
                                            $html2.='<td >'.$val['late_fine_fee'].'</td>';
                                            $html2.='<td >'.$val['banking_id3'].'</td>';
                                            $html2.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html2.='<td >'.$val['total_revenue_2_'].'</td>';
                                        $html2.='</tr>';  
                                        }
                                 }
                                    $html2.='</tbody>';
                                $html2.='</table>;';
         // <!-- '''''''''''''''''''''''''''''''Group''''''''''''''''''''''''''''''''''' -->
                                $html3 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html3.='<thead>';

                                         $html3.='<tr>';    
                                            $html3.='<th>S.NO.</th>';
                                            $html3.='<th>GROUP NO.</th>';                
                                            $html3.='<th>GROUP NAME</th>';                
                                            $html3.='<th>CLUB ID NO.</th>';               
                                            $html3.='<th>CLUB MEMBER NAME</th>';
                                            $html3.='<th>SPONSOR NO.</th>';
                                            $html3.='<th>SPONSOR LEVEL</th>';
                                            $html3.='<th>JOINING FEE</th>';
                                            $html3.='<th>BANKING ID</th>';
                                            $html3.='<th>CREATED DATE</th>';
                                            $html3.='<th>TOTAL REVENUE</th>';
                                            $html3.='<th>GRAND TOTAL REVENUE</th>';
                                         $html3.='</tr>';
                                          $html3.='</thead>';
                                           $html3.='<tbody>';
                                    $i=0;
                                         if(!empty($clublist)){
                                            foreach($clublist as $val){$i++; $id=$val['id'];
                                         $html3.='<tr>';
                                            $html3.='<td >'.$i.'</td>';
                                            $html3.='<td >'.$val['group_no_b'].'</td>';
                                            $html3.='<td >'.$val['group_name_b'].'</td>';
                                            $html3.='<td >'.$val['club_id_no'].'</td>';
                                            $html3.='<td >'.$val['club_member_name'].'</td>';
                                            $html3.='<td >'.$val['sponsor_no'].'</td>';
                                            $html3.='<td >'.$val['sponsor_level'].'</td>';
                                            $html3.='<td >'.$val['joining_fee'].'</td>';
                                            $html3.='<td >'.$val['banking_id4'].'</td>';
                                            $html3.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html3.='<td >'.$val['total_revenue_3'].'</td>';
                                            $html3.='<td >'.$val['grand_total_revamue'].'</td>';
                                        $html3.='</tr>';
                                        }
                                    }   
                                    $html3.='</tbody>';
                                $html3.='</table>';

	     // <!-- ''''''''''''''''''Club''''''''''''''''''''''' -->
                                $html4='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html4.='<thead>';
                 
                                            $html4.='<th>S.NO.</th>';
                                            $html4.='<th>INSPECTION AREA</th>';                
                                            $html4.='<th>OBJECTIVE</th>';                
                                            $html4.='<th>ARIVEL TIME</th>';
                                            $html4.='<th>ARIVEL KM</th>';
                                            $html4.='<th>POST</th>';                             
                                            $html4.='<th>DEPARTURE KM</th>';
                                            $html4.='<th>OTHER FEE</th>';
                                            $html4.='<th>RESULT</th>';
                                            $html4.='<th>CREATED DATE</th>';                                       
                                        $html4.='</tr>';
                                    $html4.='</thead>';
                                    $html4.='<tbody>';
                                    $i=0;
                                         if(!empty($travellinglist)){
                                            foreach($travellinglist as $val){$i++; $id=$val['id'];

                                         $html4.='<tr>';
                                            $html4.='<td ><?php echo $i ?></td>';
                                            $html4.='<td >'.$val['inspection_area'].'</td>';
                                            $html4.='<td >'.$val['objective'].'</td>';
                                            $html4.='<td >'.$val['arrival_time'].'</td>';
                                            $html4.='<td >'.$val['arrival_km'].'</td>';
                                            $html4.='<td >'.$val['port_of_department'].'</td>';
                                            $html4.='<td >'.$val['departure_km'].'</td>';
                                            $html4.='<td >'.$val['other_fee2'].'</td>';
                                            $html4.='<td >'.$val['result'].'</td>';
                                            $html4.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                        $html4.='</tr>';
                                        }
                                    }  
                                    $html4.='</tbody>';
                                    $html4.='</table>';
                                    
                                    
                                    // $alldata=array();
                                    // $alldata[]='';
                                $alldata['first'] = $html;
                                $alldata['second'] = $html1;
                                $alldata['third'] = $html2;
                                $alldata['forth'] = $html3;
                                $alldata['fifth'] = $html4;
                                $results = json_encode($alldata);
                                echo $results;

                // <!-- ''''''''''''''''''''''travelling'''''''''''''''''''''''''''' -->
	}

	public function get_annualy_progress_list(){
		$user_id['id'] = $_SESSION['user_id'];
		$year = $_POST['year'];
		$revenuelist = $this->Website_model->revenuelistbyyear($user_id,$year);
		$securitylist = $this->Website_model->securitylistbyyear($user_id,$year);
		$grouplist = $this->Website_model->grouplistbyyear($user_id,$year);
		$clublist = $this->Website_model->clublistbyyear($user_id,$year);
		$travellinglist = $this->Website_model->travellinglistbyyear($user_id,$year);
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
                    $html.='<thead>';
                        $html.='<tr>';   
	                        $html.='<th>S.NO.</th>';
	                        $html.='<th>REGISTRATION No.</th>';                
	                        $html.='<th>APPLICANT Name</th>';                
	                        $html.='<th>FATHER/HUSBAND</th>';
	                        $html.='<th>DOB</th>';
	                        $html.='<th>POST NAME</th>';
	                        $html.='<th>FEE</th>';
	                        $html.='<th>PAYMENT DATE</th>';
	                        $html.='<th>BANKING ID</th>';
	                        $html.='<th>CREATED DATE</th>';
	                    $html.='</tr>';
                    $html.='</thead>';
                    // $html.='<input type="text" name="year" placeholder="Years"  class="form-control years">';
                     $html.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createexcel').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
                    $html.='<tbody>';
                     $i=0;
                         if(!empty($revenuelist)){
                            foreach($revenuelist as $val){$i++; $id=$val['id']; 
                        $html.='<tr>';
                            $html.='<td>'.$i.'</td>';
                            $html.='<td>'.$val['registration_no'].'</td>';
                            $html.='<td>'.$val['applicant_name'].'</td>';
                            $html.='<td>'.$val['father_husband'].'</td>';
                            $html.='<td>'.date('d-m-Y',strtotime($val['dob'])).'</td>';
                            $html.='<td>'.$val['post_name'].'</td>';
                            $html.='<td>'.$val['fee'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['date_payment'])).'</td>';
                            $html.='<td>'.$val['banking_id1'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                        $html.='</tr>'; 
                    }}
                    $html.='</tbody>';
                $html.='</table>';
                // ''''''''''''''''''''''''''''''''revenure''''''''''''''''''''''''
                $html1='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html1.='<thead>';
                                        $html1.='<tr>';    
                                            $html1.='<th>S.NO.</th>';
                                            $html1.='<th>REGISTRATION No.</th>';                
                                            $html1.='<th>APPLICANT NAME</th>';                
                                            $html1.='<th>POST NAME</th>';
                                            $html1.='<th>SECURITY FUND</th>';
                                            $html1.='<th>TRAINING FEE</th>';
                                            $html1.='<th>PROCESSING FEE</th>';
                                            $html1.='<th>OTHER FEE</th>';
                                            $html1.='<th>TOTAL BANKING</th>';
                                            $html1.='<th>BANKING ID</th>';
                                            $html1.='<th>CREATED DATE</th>';
                                            $html1.='<th>TOTAL REVENUE</th>';
                                        $html1.='</tr>';
                                    $html1.='</thead>';
                                     $html1.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createExcel_security').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
                                    $html1.='<tbody>';
                                         $i=0;
                                         if(!empty($securitylist)){
                                            foreach($securitylist as $val){$i++; $id=$val['id'];
                                        $html1.='<tr>';
                                            $html1.='<td>'.$i.'</td>';
                                            $html1.='<td >'.$val['reg_no'].'</td>';
                                            $html1.='<td >'.$val['name'].'</td>';
                                            $html1.='<td >'.$val['name_of_post'].'</td>';
                                            $html1.='<td >'.$val['security_fund'].'</td>';
                                            $html1.='<td>'.$val['training_fee'].'</td>';
                                            $html1.='<td >'.$val['processing_fee'].'</td>';
                                            $html1.='<td >'.$val['other_fee1'].'</td>';
                                            $html1.='<td >'.$val['total_banking'].'</td>';
                                            $html1.='<td >'.$val['banking_id2'].'</td>';
                                            $html1.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html1.='<td >'.$val['total_revenue_1'].'</td>'; 
                                        $html1.='</tr>';
                                    }}
                                    $html1.='</tbody>';
                                $html1.='</table>';
                    // ''''''''''''''''''''''''''security'''''''''''''''''''''''''''''
                                $html2 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html2.='<thead>';
                                        $html2.='<tr>';    
                                            $html2.='<th>S.NO.</th>';
                                            $html2.='<th>GROUP NO.</th>';                
                                            $html2.='<th>GROUP NAME</th>';                
                                            $html2.='<th>GROUP ADDRESS</th>';
                                            $html2.='<th>MEETING NO.</th>';
                                            $html2.='<th>PASSBOOK ISSUE FEE</th>';
                                            $html2.='<th>WEEKLY SAVING DEPOSIT</th>';
                                            $html2.='<th>EMI DEPOSIT</th>';
                                            $html2.='<th>BOUNCING FEE</th>';
                                            $html2.='<th>LATE FINE FEE</th>';
                                            $html2.='<th>BANKING ID</th>';
                                            $html2.='<th>CREATED DATE</th>';
                                            $html2.='<th>TOTAL REVENUE</th>';                                       
                                        $html2.='</tr>';
                                    $html2.='</thead>';
                                    $html2.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createExcel_group').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
                                    $html2.='<tbody>';
                                    $i=0;
                                         if(!empty($grouplist)){
                                            foreach($grouplist as $val){$i++; $id=$val['id'];
                                        $html2.='<tr>';
                                            $html2.='<td >'.$i.'</td>';
                                            $html2.='<td >'.$val['group_no_a'].'</td>';
                                            $html2.='<td >'.$val['group_name_a'].'</td>';
                                            $html2.='<td >'.$val['group_address'].'</td>';
                                            $html2.='<td >'.$val['meeting_no'].'</td>';
                                            $html2.='<td >'.$val['passbook_issue_fee'].'</td>';
                                            $html2.='<td >'.$val['weekly_saving_deposit'].'</td>';
                                            $html2.='<td >'.$val['emi_deposit'].'</td>';
                                            $html2.='<td >'.$val['bouncing_fee'].'</td>';
                                            $html2.='<td >'.$val['late_fine_fee'].'</td>';
                                            $html2.='<td >'.$val['banking_id3'].'</td>';
                                            $html2.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html2.='<td >'.$val['total_revenue_2_'].'</td>';
                                        $html2.='</tr>';  
                                        }
                                 }
                                    $html2.='</tbody>';
                                $html2.='</table>;';
         // <!-- '''''''''''''''''''''''''''''''Group''''''''''''''''''''''''''''''''''' -->
                                $html3 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html3.='<thead>';

                                         $html3.='<tr>';    
                                            $html3.='<th>S.NO.</th>';
                                            $html3.='<th>GROUP NO.</th>';                
                                            $html3.='<th>GROUP NAME</th>';                
                                            $html3.='<th>CLUB ID NO.</th>';               
                                            $html3.='<th>CLUB MEMBER NAME</th>';
                                            $html3.='<th>SPONSOR NO.</th>';
                                            $html3.='<th>SPONSOR LEVEL</th>';
                                            $html3.='<th>JOINING FEE</th>';
                                            $html3.='<th>BANKING ID</th>';
                                            $html3.='<th>CREATED DATE</th>';
                                            $html3.='<th>TOTAL REVENUE</th>';
                                            $html3.='<th>GRAND TOTAL REVENUE</th>';
                                         $html3.='</tr>';
                                          $html3.='</thead>';
                                          $html3.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createExcel_club').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
                                           $html3.='<tbody>';
                                    $i=0;
                                         if(!empty($clublist)){
                                            foreach($clublist as $val){$i++; $id=$val['id'];
                                         $html3.='<tr>';
                                            $html3.='<td >'.$i.'</td>';
                                            $html3.='<td >'.$val['group_no_b'].'</td>';
                                            $html3.='<td >'.$val['group_name_b'].'</td>';
                                            $html3.='<td >'.$val['club_id_no'].'</td>';
                                            $html3.='<td >'.$val['club_member_name'].'</td>';
                                            $html3.='<td >'.$val['sponsor_no'].'</td>';
                                            $html3.='<td >'.$val['sponsor_level'].'</td>';
                                            $html3.='<td >'.$val['joining_fee'].'</td>';
                                            $html3.='<td >'.$val['banking_id4'].'</td>';
                                            $html3.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html3.='<td >'.$val['total_revenue_3'].'</td>';
                                            $html3.='<td >'.$val['grand_total_revamue'].'</td>';
                                        $html3.='</tr>';
                                        }
                                    }   
                                    $html3.='</tbody>';
                                $html3.='</table>';

	// <!-- ''''''''''''''''''''''''''''''Club''''''''''''''''''''''''''''''''''''''''''' -->
                                $html4='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html4.='<thead>';
                 
                                            $html4.='<th>S.NO.</th>';
                                            $html4.='<th>INSPECTION AREA</th>';                
                                            $html4.='<th>OBJECTIVE</th>';                
                                            $html4.='<th>ARIVEL TIME</th>';
                                            $html4.='<th>ARIVEL KM</th>';
                                            $html4.='<th>POST</th>';                             
                                            $html4.='<th>DEPARTURE KM</th>';
                                            $html4.='<th>OTHER FEE</th>';
                                            $html4.='<th>RESULT</th>';
                                            $html4.='<th>CREATED DATE</th>';                                       
                                        $html4.='</tr>';
                                    $html4.='</thead>';
                                    $html4.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createExcel_travelling').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
                                    $html4.='<tbody>';
                                    $i=0;
                                         if(!empty($travellinglist)){
                                            foreach($travellinglist as $val){$i++; $id=$val['id'];

                                         $html4.='<tr>';
                                            $html4.='<td >'.$i.'</td>';
                                            $html4.='<td >'.$val['inspection_area'].'</td>';
                                            $html4.='<td >'.$val['objective'].'</td>';
                                            $html4.='<td >'.$val['arrival_time'].'</td>';
                                            $html4.='<td >'.$val['arrival_km'].'</td>';
                                            $html4.='<td >'.$val['port_of_department'].'</td>';
                                            $html4.='<td >'.$val['departure_km'].'</td>';
                                            $html4.='<td >'.$val['other_fee2'].'</td>';
                                            $html4.='<td >'.$val['result'].'</td>';
                                            $html4.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                        $html4.='</tr>';
                                        }
                                    }  
                                    $html4.='</tbody>';

                                    $html4.='</table>';
                                    
                                    
                                    // $alldata=array();
                                    // $alldata[]='';
                                $alldata['first'] = $html;
                                $alldata['second'] = $html1;
                                $alldata['third'] = $html2;
                                $alldata['forth'] = $html3;
                                $alldata['fifth'] = $html4;
                                $results = json_encode($alldata);
                                echo $results;

                // <!-- ''''''''''''''''''''''travelling'''''''''''''''''''''''''''' -->
	}
	// ''''''''''''''''''''''''''''daily report''''''''''''''''''''''''''''''''''''''
	public function open_annual_progress_report(){
	    $id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$d['revenue'] = $this->Website_model->revenuelistbyyear($user_id,$year);
		$d['security'] = $this->Website_model->securitylistbyyear($user_id,$year);
		$d['group'] = $this->Website_model->grouplistbyyear($user_id,$year);
		$d['club'] = $this->Website_model->clublistbyyear($user_id,$year);
		$d['travelling'] = $this->Website_model->travellinglistbyyear($user_id,$year);
		$d['v'] = 'website/annual_progress_report';
        $this->load->view('website/template_1',$d);
	}

	public function daily_report(){
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
			// $this->createsession($result);
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


	public function vacency_login(){
			$d['v'] = 'website/vacency_login';
			$this->load->view('website/template',$d);
	}

	public function vacency_logins(){
		$data = $this->input->post();
		$result= $this->Website_model->checkvacenylogin($data);
		if(!empty($result['id'])){
			$id = $result['id'];
			$records = $this->vacency_check($id);
			if($records['verify']===true){
				// $this->session->set_flashdata('err_msg',$result['verify']);
				redirect('website/vacency_login');  ///send payment page
			}
			else{ 
				$this->createvacencyession($result);
				redirect('website/vacencyform',$result);	
			}
		}
		else{
			$this->session->set_flashdata('err_msg','Please Signup!');
				redirect('website/vacency_login');
		}	
	}

	public function vacency_check($id){
		$results= $this->Website_model->checkvacenydetails($id);
		return $results;
	}

	public function createvacencyession($result){
		$data['candidate_id']=$result['id'];
		$data['email']=$result['email'];
		$this->session->set_userdata($data);
	}
	public function logout_vacency(){
		if($this->session->user!==NULL){
			$this->session->unset_userdata('candidate_id');
			$this->session->unset_userdata('email');
		}		// redirect('website/office_login');
	}

	public function vacencyform(){
		$id = $this->session->userdata('candidate_id');
		if(!empty($id)){
			$d['details']= $this->Website_model->getdetailsuser($id);
			$d['v'] = 'website/vacency_form';
		    $this->load->view('website/template',$d);
		}else{
			redirect('website/vacency_login');
		}
		
	}

	public function vacencyform_submit(){
		$data = $this->input->post();
		// echo PRE;
		//   print_r($_FILES);die;
		  if($_FILES['photo']['name'] !=''){
		  	$upload_path = './assets/vacency/photo/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("photo", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['photo'] = $image['path'];
			  }
		  }
		  if($_FILES['signature']['name'] !=''){
		  	$upload_path = './assets/vacency/sign/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("signature", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['signature'] = $image['path'];
			  }
		  }
		  if($_FILES['marksheet']['name'] !=''){
		  	$upload_path = './assets/vacency/documents/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("marksheet", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['marksheet'] = $image['path'];
			  }
		  }
		  if($_FILES['other_quali']['name'] !=''){
		  	$upload_path = './assets/vacency/documents/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("other_quali", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['other_quali'] = $image['path'];
			  }
		  }
		  if($_FILES['exprience']['name'] !=''){
		  	$upload_path = './assets/vacency/documents/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("exprience", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['exprience'] = $image['path'];
			  }
		  }
		  if($_FILES['aadhar']['name'] !=''){
		  	$upload_path = './assets/vacency/documents/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("aadhar", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['aadhar'] = $image['path'];
			  }
		  }
		  if($_FILES['thumb']['name'] !=''){
		  	$upload_path = './assets/vacency/documents/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  $image = upload_file("thumb", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['thumb'] = $image['path'];
			  }
		  }
		  $records= $this->Website_model->vacencydetails_submit($data);
		  if($records===true){
			redirect('website/vacencyform/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/vacencyform/?status=0');
		}


	}


	// ................................Admin Panel Area.............................

	public function officer_details(){
		$data['title']="Home";
		$this->template->load('pages','home',$data);
	}
	public function daily_expense(){
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/daily_expense';
		$this->load->view('website/template_1',$d);

	}
	public function office_resourse_requisition_form(){
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/requisition_form';
		$this->load->view('website/template_1',$d);
	}

	public function expense_monthly_report(){
		    $id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$d['expense_month'] = $this->Website_model->expensemonth($user_id,$month);
		$d['v'] = 'website/monthly_expense_report';
        $this->load->view('website/template_1',$d);
		
	}

	public function monthly_expense_list(){
		$data = $this->input->post();
		$user_id['id'] = $_SESSION['user_id'];
		$month = $data['month'];
		$records = $this->Website_model->expensemonth($user_id,$month);
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
            $html.='<thead>';
                $html.='<tr>';    
                    $html.='<th>S.NO.</th>';
                    $html.='<th>EQUIPMENT</th>';                
                    $html.='<th>QUANTITY</th>';                
                    $html.='<th>RATE</th>';
                    $html.='<th>AMOUNT</th>';
                    $html.='<th>BILL</th>';
                    $html.='<th>PAYMENT RECEIPT</th>';
                    $html.='<th>PAYMENT METHOD</th>';
                    $html.='<th>NEFT CHECK</th>';
                    $html.='<th>TOTAL REVENUE</th>';
                    $html.='<th>DATE</th>';
                $html.='</tr>';
            $html.='</thead>';
            $html.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createexcel_monthly_expensedetails').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
            $html.='<tbody>';
                $i=0;
                 if(!empty($records)){
                    foreach($records as $val){$i++; $id=$val['id']; 
                $html.='<tr>';
                    $html.='<td >'.$i.'</td>';
                    $html.='<td >'.$val['equipment'].'</td>';
                    $html.='<td >'.$val['quantity'].'</td>';
                    $html.='<td>'.$val['rate'].'</td>';
                    $html.='<td >'.$val['amount'].'</td>';
                    $html.='<td >'.$val['bill'].'</td>';
                    $html.='<td>'.$val['payment_receipt'].'</td>';
                    $html.='<td >'.$val['payment_method'].'</td>';
                    $html.='<td >'.$val['neft_check'].'</td>';
                    $html.='<td >'.$val['total_revenue'].'</td>';
                    $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                $html.='</tr>';
              
                }
            }
        $html.='</tbody>';
        $html.='</table>';
        $results = json_encode($html);
        echo $results;
	}
	 public function createexcel_monthly_expensedetails(){
    	$fileName = 'monthly_expense.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		
		$employeeData = $this->Website_model->expensemonth($user_id,$month);
		// echo PRE;
		// print_r($employeeData);die;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Equipment');
        $sheet->setCellValue('C1','Quantity');
        $sheet->setCellValue('D1','Rate');
		$sheet->setCellValue('E1','Amount');
        $sheet->setCellValue('F1','Bill');       
        $sheet->setCellValue('G1','Payment Receipt');       
        $sheet->setCellValue('H1','Payment Method');       
        $sheet->setCellValue('I1','Neft Check');       
        $sheet->setCellValue('J1','Total Revenue');        
        $sheet->setCellValue('K1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['equipment']);
            $sheet->setCellValue('C' . $rows, $val['quantity']);
            $sheet->setCellValue('D' . $rows, $val['rate']);
	        $sheet->setCellValue('E' . $rows, $val['amount']);
            $sheet->setCellValue('F' . $rows, $val['bill']);
            $sheet->setCellValue('G' . $rows, $val['payment_receipt']);
            $sheet->setCellValue('H' . $rows, $val['payment_method']);
            $sheet->setCellValue('I' . $rows, $val['neft_check']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function expense_annual_report(){
		    $id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$d['expense_year'] = $this->Website_model->expenseyear($user_id,$year);
		$d['v'] = 'website/annual_expense_report';
        $this->load->view('website/template_1',$d);
	}

	public function annualy_expense_list(){
		$data = $this->input->post();
		$user_id['id'] = $_SESSION['user_id'];
		$year = $data['year'];
		$records = $this->Website_model->expenseyear($user_id,$year);
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
            $html.='<thead>';
                $html.='<tr>';    
                    $html.='<th>S.NO.</th>';
                    $html.='<th>EQUIPMENT</th>';                
                    $html.='<th>QUANTITY</th>';                
                    $html.='<th>RATE</th>';
                    $html.='<th>AMOUNT</th>';
                    $html.='<th>BILL</th>';
                    $html.='<th>PAYMENT RECEIPT</th>';
                    $html.='<th>PAYMENT METHOD</th>';
                    $html.='<th>NEFT CHECK</th>';
                    $html.='<th>TOTAL REVENUE</th>';
                    $html.='<th>DATE</th>';
                $html.='</tr>';
            $html.='</thead>';
            $html.='<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="'.base_url('website/createexcel_annual_expensedetails').'"><i class="fa fa-file-excel-o"></i> Export to Excel</a>';
            $html.='<tbody>';
                $i=0;
                 if(!empty($records)){
                    foreach($records as $val){$i++; $id=$val['id']; 
                $html.='<tr>';
                    $html.='<td >'.$i.'</td>';
                    $html.='<td >'.$val['equipment'].'</td>';
                    $html.='<td >'.$val['quantity'].'</td>';
                    $html.='<td>'.$val['rate'].'</td>';
                    $html.='<td >'.$val['amount'].'</td>';
                    $html.='<td >'.$val['bill'].'</td>';
                    $html.='<td>'.$val['payment_receipt'].'</td>';
                    $html.='<td >'.$val['payment_method'].'</td>';
                    $html.='<td >'.$val['neft_check'].'</td>';
                    $html.='<td >'.$val['total_revenue'].'</td>';
                    $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                $html.='</tr>';
              
                }
            }
        $html.='</tbody>';
        $html.='</table>';
        $results = json_encode($html);
        echo $results;
	}

	public function createexcel_annual_expensedetails(){
    	$fileName = 'annualy_expense.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$employeeData = $this->Website_model->expenseyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Equipment');
        $sheet->setCellValue('C1','Quantity');
        $sheet->setCellValue('D1','Rate');
		$sheet->setCellValue('E1','Amount');
        $sheet->setCellValue('F1','Bill');       
        $sheet->setCellValue('G1','Payment Receipt');       
        $sheet->setCellValue('H1','Payment Method');       
        $sheet->setCellValue('I1','Neft Check');       
        $sheet->setCellValue('J1','Total Revenue');        
        $sheet->setCellValue('K1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['equipment']);
            $sheet->setCellValue('C' . $rows, $val['quantity']);
            $sheet->setCellValue('D' . $rows, $val['rate']);
	        $sheet->setCellValue('E' . $rows, $val['amount']);
            $sheet->setCellValue('F' . $rows, $val['bill']);
            $sheet->setCellValue('G' . $rows, $val['payment_receipt']);
            $sheet->setCellValue('H' . $rows, $val['payment_method']);
            $sheet->setCellValue('I' . $rows, $val['neft_check']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function expense_daily_report(){
		    $id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$date = date('Y-m-d');
		$d['expense_daily'] = $this->Website_model->expensedaily($user_id,$date);
		$d['v'] = 'website/daily_expense_report';
        $this->load->view('website/template_1',$d);
	}

	public function createexcel_daily_expensedetails(){
    	$fileName = 'daily_expense.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$date = date('Y-m-d');
		$employeeData = $this->Website_model->expensedaily($user_id,$date);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Equipment');
        $sheet->setCellValue('C1','Quantity');
        $sheet->setCellValue('D1','Rate');
		$sheet->setCellValue('E1','Amount');
        $sheet->setCellValue('F1','Bill');       
        $sheet->setCellValue('G1','Payment Receipt');       
        $sheet->setCellValue('H1','Payment Method');       
        $sheet->setCellValue('I1','Neft Check');       
        $sheet->setCellValue('J1','Total Revenue');        
        $sheet->setCellValue('K1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['equipment']);
            $sheet->setCellValue('C' . $rows, $val['quantity']);
            $sheet->setCellValue('D' . $rows, $val['rate']);
	        $sheet->setCellValue('E' . $rows, $val['amount']);
            $sheet->setCellValue('F' . $rows, $val['bill']);
            $sheet->setCellValue('G' . $rows, $val['payment_receipt']);
            $sheet->setCellValue('H' . $rows, $val['payment_method']);
            $sheet->setCellValue('I' . $rows, $val['neft_check']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

	public function requisition_insert(){
		$data = $this->input->post();
		// echo PRE;
		// print_R($data);
		$requisition['resources']=$data['resources'];
		$requisition['modelno']=$data['modelno'];
		$requisition['brandname']=$data['brandname'];
		$requisition['quantity']=$data['quantity'];
		$requisition['rate']=$data['rate'];
		$requisition['amount']=$data['amount'];
		$requisition['user_id']=$_SESSION['user_id'];
		$requisition['total_revenue']=$data['total_revenue'];
		$requisition['mandatory1']=$data['mandatory1'];
		$requisition['mandatory2']=$data['mandatory2'];
		$requisition['mandatory3']=$data['mandatory3'];
		$requisition['mandatory4']=$data['mandatory4'];
		$requisition['mandatory5']=$data['mandatory5'];
		$requisition['mandatory6']=$data['mandatory6'];
		$requisition['report_confirm']=$data['report_confirm'];
		$requisition['added_on']=date('Y-m-d');
		// print_r($requisition);die;
		$count = count($requisition['resources']);
		for ($i=0; $i < $count; $i++) { 
			$arr =  array('resources'=>$requisition['resources'][$i],'modelno'=>$requisition['modelno'][$i],'brandname'=>$requisition['brandname'][$i],'quantity'=>$requisition['quantity'][$i],'rate'=>$requisition['rate'][$i],'amount'=>$requisition['amount'][$i],'user_id'=>$requisition['user_id'],'total_revenue'=>$requisition['total_revenue'],'mandatory1'=>$requisition['mandatory1'],'mandatory2'=>$requisition['mandatory2'],'mandatory3'=>$requisition['mandatory3'],'mandatory4'=>$requisition['mandatory4'],'mandatory5'=>$requisition['mandatory5'],'mandatory6'=>$requisition['mandatory6'],'report_confirm'=>$requisition['report_confirm'],'added_on'=>$requisition['added_on']);
			$finalarray[] = $arr;
		}

		$form_data = json_encode($finalarray);
		$result = $this->Website_model->insert_requisition($form_data);
			// print_r($result);die;
		if($result===true){
			redirect('website/office_resourse_requisition_form/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/office_resourse_requisition_form/?status=0');
		}
		
	}

	public function group_resource_form(){
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/group_resourceform';
		$this->load->view('website/template_1',$d);
	}

	public function group_resource_insert(){
		$data = $this->input->post();
		// echo PRE;
		// print_r($data);die;
		$group['resources'] = $data['resources'];
		$group['modelno'] = $data['modelno'];
		$group['brandname'] = $data['brandname'];
		$group['quantity'] = $data['quantity'];
		$group['rate'] = $data['rate'];
		$group['amount'] = $data['amount'];
		$group['total_amount'] = $data['total_amount'];
		$count = count($group['resources']);
		for ($i=0; $i < $count; $i++) { 
			$arr = array('resources'=>$group['resources'][$i],'modelno'=>$group['modelno'][$i],'brandname'=>$group['brandname'][$i],'quantity'=>$group['quantity'][$i],'rate'=>$group['rate'][$i],'amount'=>$group['amount'][$i],'total_amount'=>$group['total_amount'][$i]);
			$finalarray[]  = $arr;
		}
		$final['group_no']=$data['group_no'];
		$final['group_name']=$data['group_name'];
		$final['installation_date']=$data['installation_date'];
		$final['total_revenue']=$data['total_revenue'];
		$final['mandatory1']=$data['mandatory1'];
		$final['mandatory2']=$data['mandatory2'];
		$final['mandatory3']=$data['mandatory3'];
		$final['mandatory4']=$data['mandatory4'];
		$final['mandatory5']=$data['mandatory5'];
		$final['mandatory6']=$data['mandatory6'];
		$final['report_confirm']=$data['report_confirm'];
		$final['added_on']=date('Y-m-d');
		$final['user_id']=$_SESSION['user_id'];
		$final['groupdetails'] = json_encode($finalarray);
		$result = $this->Website_model->insert_group_resource($final);
		if($result===true){
			redirect('website/group_resource_form/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg');
			redirect('website/group_resource_form/?status=0');
		}


	}




	public function createExcel() {

		$fileName = 'revenue.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$employeeData = $this->Website_model->revenuelistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Applicant Name');
        $sheet->setCellValue('D1','Father/Husband ');
		$sheet->setCellValue('E1','DOB');
        $sheet->setCellValue('F1','Post Name');       
        $sheet->setCellValue('G1','Fee');       
        $sheet->setCellValue('H1','Payment Date');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Batch No.');       
        $sheet->setCellValue('L1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['registration_no']);
            $sheet->setCellValue('C' . $rows, $val['applicant_name']);
            $sheet->setCellValue('D' . $rows, $val['father_husband']);
	        $sheet->setCellValue('E' . $rows, $val['dob']);
            $sheet->setCellValue('F' . $rows, $val['post_name']);
            $sheet->setCellValue('G' . $rows, $val['fee']);
            $sheet->setCellValue('H' . $rows, $val['date_payment']);
            $sheet->setCellValue('I' . $rows, $val['banking_id1']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['batch_no']);
            $sheet->setCellValue('L' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    } 

    public function createexcel_revenue_month(){
    	$fileName = 'revenue_month.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		
		$employeeData = $this->Website_model->revenuelistbymonth($user_id,$month);
		// echo PRE;
		// print_r($employeeData);die;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Applicant Name');
        $sheet->setCellValue('D1','Father/Husband ');
		$sheet->setCellValue('E1','DOB');
        $sheet->setCellValue('F1','Post Name');       
        $sheet->setCellValue('G1','Fee');       
        $sheet->setCellValue('H1','Payment Date');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Batch No.');       
        $sheet->setCellValue('L1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['registration_no']);
            $sheet->setCellValue('C' . $rows, $val['applicant_name']);
            $sheet->setCellValue('D' . $rows, $val['father_husband']);
	        $sheet->setCellValue('E' . $rows, $val['dob']);
            $sheet->setCellValue('F' . $rows, $val['post_name']);
            $sheet->setCellValue('G' . $rows, $val['fee']);
            $sheet->setCellValue('H' . $rows, $val['date_payment']);
            $sheet->setCellValue('I' . $rows, $val['banking_id1']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['batch_no']);
            $sheet->setCellValue('L' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function createExcel_revenue_month_team(){
    	$fileName = 'team_revenue_month.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');

		$month = date('m');
		$employeeData= $this->Website_model->myteam_revenuelistbymonthly($user_id,$month);
		
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Applicant Name');
        $sheet->setCellValue('D1','Father/Husband ');
		$sheet->setCellValue('E1','DOB');
        $sheet->setCellValue('F1','Post Name');       
        $sheet->setCellValue('G1','Fee');       
        $sheet->setCellValue('H1','Payment Date');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Batch No.');       
        $sheet->setCellValue('L1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['registration_no']);
            $sheet->setCellValue('C' . $rows, $val['applicant_name']);
            $sheet->setCellValue('D' . $rows, $val['father_husband']);
	        $sheet->setCellValue('E' . $rows, $val['dob']);
            $sheet->setCellValue('F' . $rows, $val['post_name']);
            $sheet->setCellValue('G' . $rows, $val['fee']);
            $sheet->setCellValue('H' . $rows, $val['date_payment']);
            $sheet->setCellValue('I' . $rows, $val['banking_id1']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['batch_no']);
            $sheet->setCellValue('L' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 

    }
    public function createExcel_revenue_annual_team(){
    	$fileName = 'team_revenue_annual.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		//
		$employeeData= $this->Website_model->myteam_revenuelistbyyearly($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Applicant Name');
        $sheet->setCellValue('D1','Father/Husband ');
		$sheet->setCellValue('E1','DOB');
        $sheet->setCellValue('F1','Post Name');       
        $sheet->setCellValue('G1','Fee');       
        $sheet->setCellValue('H1','Payment Date');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Batch No.');       
        $sheet->setCellValue('L1','Added On');       
        $rows = 2;
        foreach ($employeeData as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['registration_no']);
            $sheet->setCellValue('C' . $rows, $val['applicant_name']);
            $sheet->setCellValue('D' . $rows, $val['father_husband']);
	        $sheet->setCellValue('E' . $rows, $val['dob']);
            $sheet->setCellValue('F' . $rows, $val['post_name']);
            $sheet->setCellValue('G' . $rows, $val['fee']);
            $sheet->setCellValue('H' . $rows, $val['date_payment']);
            $sheet->setCellValue('I' . $rows, $val['banking_id1']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue']);
            $sheet->setCellValue('K' . $rows, $val['batch_no']);
            $sheet->setCellValue('L' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 

    }
    public function createExcel_security() {
		$fileName = 'security.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$securitylist = $this->Website_model->securitylistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Name');
        $sheet->setCellValue('D1','Post Name ');
		$sheet->setCellValue('E1','Security Fund');
        $sheet->setCellValue('F1','Training Fee');       
        $sheet->setCellValue('G1','Processing Fee');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Total Banking');       
        $sheet->setCellValue('J1','Banking Id');       
        $sheet->setCellValue('K1','Total Revenue');       
        $sheet->setCellValue('L1','Batch No');       
        $sheet->setCellValue('M1','Added On');       
        $rows = 2;
        foreach ($securitylist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['reg_no']);
            $sheet->setCellValue('C' . $rows, $val['name']);
            $sheet->setCellValue('D' . $rows, $val['name_of_post']);
	   		$sheet->setCellValue('E' . $rows, $val['security_fund']);
            $sheet->setCellValue('F' . $rows, $val['training_fee']);
            $sheet->setCellValue('G' . $rows, $val['processing_fee']);
            $sheet->setCellValue('H' . $rows, $val['other_fee1']);
            $sheet->setCellValue('I' . $rows, $val['total_banking']);
            $sheet->setCellValue('J' . $rows, $val['banking_id2']);
            $sheet->setCellValue('K' . $rows, $val['total_revenue_1']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

   
    public function vacency_login_foradmitcard(){
			$d['v'] = 'website/vacency_login_admitcard';
			$this->load->view('website/template',$d);
	}

	 public function vacency_login_forresult(){
			$d['v'] = 'website/vacency_login_result';
			$this->load->view('website/template',$d);
	}

	 public function check_vacency_loginforadmitcard(){
    	$data = $this->input->post();
		$result = $this->Website_model->loginvacency_foradmitcard($data);
		if($result['verify']=='true'){
			$id = $result['id'];
			$records = $this->Website_model->admitcard_download($id);
		// print_r($records);die;
			$d['datas'] = $records;
			$d['v'] = 'website/admit_card';
		    $this->load->view('website/template',$d);
		}
		else{
			redirect('website/vacency_login_foradmitcard');
		}
    }

    public function check_vacency_loginforresult(){
    	$data = $this->input->post();
		$result = $this->Website_model->loginvacency_foradmitcard($data);
		if($result['verify']=='true'){
			$id = $result['id'];
			$records = $this->Website_model->result_download($id);
			$d['datas'] = $records;
			$d['v'] = 'website/result';
		    $this->load->view('website/template',$d);
		}
		else{
			redirect('website/vacency_login_forresult');
		}

    }

    public function createexcel_security_month() {
		$fileName = 'security_month.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$securitylist = $this->Website_model->securitylistbymonth($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Name');
        $sheet->setCellValue('D1','Post Name ');
		$sheet->setCellValue('E1','Security Fund');
        $sheet->setCellValue('F1','Training Fee');       
        $sheet->setCellValue('G1','Processing Fee');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Total Banking');       
        $sheet->setCellValue('J1','Banking Id');       
        $sheet->setCellValue('K1','Total Revenue');       
        $sheet->setCellValue('L1','Batch No');       
        $sheet->setCellValue('M1','Added On');       
        $rows = 2;
        foreach ($securitylist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['reg_no']);
            $sheet->setCellValue('C' . $rows, $val['name']);
            $sheet->setCellValue('D' . $rows, $val['name_of_post']);
	   		$sheet->setCellValue('E' . $rows, $val['security_fund']);
            $sheet->setCellValue('F' . $rows, $val['training_fee']);
            $sheet->setCellValue('G' . $rows, $val['processing_fee']);
            $sheet->setCellValue('H' . $rows, $val['other_fee1']);
            $sheet->setCellValue('I' . $rows, $val['total_banking']);
            $sheet->setCellValue('J' . $rows, $val['banking_id2']);
            $sheet->setCellValue('K' . $rows, $val['total_revenue_1']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

     public function createexcel_security_month_team() {
		$fileName = 'team_security_month.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');

		$securitylist =$this->Website_model->myteam_securitylistbymonthly($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Name');
        $sheet->setCellValue('D1','Post Name ');
		$sheet->setCellValue('E1','Security Fund');
        $sheet->setCellValue('F1','Training Fee');       
        $sheet->setCellValue('G1','Processing Fee');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Total Banking');       
        $sheet->setCellValue('J1','Banking Id');       
        $sheet->setCellValue('K1','Total Revenue');       
        $sheet->setCellValue('L1','Batch No');       
        $sheet->setCellValue('M1','Added On');       
        $rows = 2;
        foreach ($securitylist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['reg_no']);
            $sheet->setCellValue('C' . $rows, $val['name']);
            $sheet->setCellValue('D' . $rows, $val['name_of_post']);
	   		$sheet->setCellValue('E' . $rows, $val['security_fund']);
            $sheet->setCellValue('F' . $rows, $val['training_fee']);
            $sheet->setCellValue('G' . $rows, $val['processing_fee']);
            $sheet->setCellValue('H' . $rows, $val['other_fee1']);
            $sheet->setCellValue('I' . $rows, $val['total_banking']);
            $sheet->setCellValue('J' . $rows, $val['banking_id2']);
            $sheet->setCellValue('K' . $rows, $val['total_revenue_1']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function createexcel_security_annual_team() {
		$fileName = 'team_security_annual.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$securitylist = $this->Website_model->myteam_securitylistbyyearly($user_id,$year);;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Registration No');
        $sheet->setCellValue('C1','Name');
        $sheet->setCellValue('D1','Post Name ');
		$sheet->setCellValue('E1','Security Fund');
        $sheet->setCellValue('F1','Training Fee');       
        $sheet->setCellValue('G1','Processing Fee');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Total Banking');       
        $sheet->setCellValue('J1','Banking Id');       
        $sheet->setCellValue('K1','Total Revenue');       
        $sheet->setCellValue('L1','Batch No');       
        $sheet->setCellValue('M1','Added On');       
        $rows = 2;
        foreach ($securitylist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['reg_no']);
            $sheet->setCellValue('C' . $rows, $val['name']);
            $sheet->setCellValue('D' . $rows, $val['name_of_post']);
	   		$sheet->setCellValue('E' . $rows, $val['security_fund']);
            $sheet->setCellValue('F' . $rows, $val['training_fee']);
            $sheet->setCellValue('G' . $rows, $val['processing_fee']);
            $sheet->setCellValue('H' . $rows, $val['other_fee1']);
            $sheet->setCellValue('I' . $rows, $val['total_banking']);
            $sheet->setCellValue('J' . $rows, $val['banking_id2']);
            $sheet->setCellValue('K' . $rows, $val['total_revenue_1']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function createExcel_group() {
		$fileName = 'group.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$grouplist = $this->Website_model->grouplistbyyear($user_id,$year);
		// $clublist = $this->Website_model->clublistbyyear($user_id,$year);
		// $travellinglist = $this->Website_model->travellinglistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Group Address ');
		$sheet->setCellValue('E1','Meeting No.');
        $sheet->setCellValue('F1','Passbook Issue Fee');       
        $sheet->setCellValue('G1','Weekly Saving Deposit');       
        $sheet->setCellValue('H1','EMI Deposit');       
        $sheet->setCellValue('I1','Bouncing Fee');       
        $sheet->setCellValue('J1','Late Fine Fee');       
        $sheet->setCellValue('K1','Banking ID');       
        $sheet->setCellValue('L1','Total Revenue');       
        $sheet->setCellValue('M1','Batch No.');       
        $sheet->setCellValue('N1','Added On');       
        $rows = 2;
        foreach ($grouplist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_a']);
            $sheet->setCellValue('C' . $rows, $val['group_name_a']);
            $sheet->setCellValue('D' . $rows, $val['group_address']);
	   		$sheet->setCellValue('E' . $rows, $val['meeting_no']);
            $sheet->setCellValue('F' . $rows, $val['passbook_issue_fee']);
            $sheet->setCellValue('G' . $rows, $val['weekly_saving_deposit']);
            $sheet->setCellValue('H' . $rows, $val['emi_deposit']);
            $sheet->setCellValue('I' . $rows, $val['bouncing_fee']);
            $sheet->setCellValue('J' . $rows, $val['late_fine_fee']);
            $sheet->setCellValue('K' . $rows, $val['banking_id3']);
            $sheet->setCellValue('L' . $rows, $val['total_revenue_2_']);
            $sheet->setCellValue('M' . $rows, $val['batch_no']);
            $sheet->setCellValue('N' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_group_month() {
		$fileName = 'group_month_team.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		
		$grouplist = $this->Website_model->grouplistbymonth($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Group Address ');
		$sheet->setCellValue('E1','Meeting No.');
        $sheet->setCellValue('F1','Passbook Issue Fee');       
        $sheet->setCellValue('G1','Weekly Saving Deposit');       
        $sheet->setCellValue('H1','EMI Deposit');       
        $sheet->setCellValue('I1','Bouncing Fee');       
        $sheet->setCellValue('J1','Late Fine Fee');       
        $sheet->setCellValue('K1','Banking ID');       
        $sheet->setCellValue('L1','Total Revenue');       
        $sheet->setCellValue('M1','Batch No.');       
        $sheet->setCellValue('N1','Added On');       
        $rows = 2;
        foreach ($grouplist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_a']);
            $sheet->setCellValue('C' . $rows, $val['group_name_a']);
            $sheet->setCellValue('D' . $rows, $val['group_address']);
	   		$sheet->setCellValue('E' . $rows, $val['meeting_no']);
            $sheet->setCellValue('F' . $rows, $val['passbook_issue_fee']);
            $sheet->setCellValue('G' . $rows, $val['weekly_saving_deposit']);
            $sheet->setCellValue('H' . $rows, $val['emi_deposit']);
            $sheet->setCellValue('I' . $rows, $val['bouncing_fee']);
            $sheet->setCellValue('J' . $rows, $val['late_fine_fee']);
            $sheet->setCellValue('K' . $rows, $val['banking_id3']);
            $sheet->setCellValue('L' . $rows, $val['total_revenue_2_']);
            $sheet->setCellValue('M' . $rows, $val['batch_no']);
            $sheet->setCellValue('N' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_group_month_team() {
		$fileName = 'group_month_team.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		
		$grouplist = $this->Website_model->myteam_grouplistbymonthly($user_id,$month);
	
		// print_r($securitylist);die;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Group Address ');
		$sheet->setCellValue('E1','Meeting No.');
        $sheet->setCellValue('F1','Passbook Issue Fee');       
        $sheet->setCellValue('G1','Weekly Saving Deposit');       
        $sheet->setCellValue('H1','EMI Deposit');       
        $sheet->setCellValue('I1','Bouncing Fee');       
        $sheet->setCellValue('J1','Late Fine Fee');       
        $sheet->setCellValue('K1','Banking ID');       
        $sheet->setCellValue('L1','Total Revenue');       
        $sheet->setCellValue('M1','Batch No.');       
        $sheet->setCellValue('N1','Added On');       
        $rows = 2;
        foreach ($grouplist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_a']);
            $sheet->setCellValue('C' . $rows, $val['group_name_a']);
            $sheet->setCellValue('D' . $rows, $val['group_address']);
	   		$sheet->setCellValue('E' . $rows, $val['meeting_no']);
            $sheet->setCellValue('F' . $rows, $val['passbook_issue_fee']);
            $sheet->setCellValue('G' . $rows, $val['weekly_saving_deposit']);
            $sheet->setCellValue('H' . $rows, $val['emi_deposit']);
            $sheet->setCellValue('I' . $rows, $val['bouncing_fee']);
            $sheet->setCellValue('J' . $rows, $val['late_fine_fee']);
            $sheet->setCellValue('K' . $rows, $val['banking_id3']);
            $sheet->setCellValue('L' . $rows, $val['total_revenue_2_']);
            $sheet->setCellValue('M' . $rows, $val['batch_no']);
            $sheet->setCellValue('N' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_group_annual_team() {
		$fileName = 'group_annual_team.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
	
		
		$grouplist = $this->Website_model->myteam_grouplistbyyearly($user_id,$year);
	
		// print_r($securitylist);die;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Group Address ');
		$sheet->setCellValue('E1','Meeting No.');
        $sheet->setCellValue('F1','Passbook Issue Fee');       
        $sheet->setCellValue('G1','Weekly Saving Deposit');       
        $sheet->setCellValue('H1','EMI Deposit');       
        $sheet->setCellValue('I1','Bouncing Fee');       
        $sheet->setCellValue('J1','Late Fine Fee');       
        $sheet->setCellValue('K1','Banking ID');       
        $sheet->setCellValue('L1','Total Revenue');       
        $sheet->setCellValue('M1','Batch No.');       
        $sheet->setCellValue('N1','Added On');       
        $rows = 2;
        foreach ($grouplist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_a']);
            $sheet->setCellValue('C' . $rows, $val['group_name_a']);
            $sheet->setCellValue('D' . $rows, $val['group_address']);
	   		$sheet->setCellValue('E' . $rows, $val['meeting_no']);
            $sheet->setCellValue('F' . $rows, $val['passbook_issue_fee']);
            $sheet->setCellValue('G' . $rows, $val['weekly_saving_deposit']);
            $sheet->setCellValue('H' . $rows, $val['emi_deposit']);
            $sheet->setCellValue('I' . $rows, $val['bouncing_fee']);
            $sheet->setCellValue('J' . $rows, $val['late_fine_fee']);
            $sheet->setCellValue('K' . $rows, $val['banking_id3']);
            $sheet->setCellValue('L' . $rows, $val['total_revenue_2_']);
            $sheet->setCellValue('M' . $rows, $val['batch_no']);
            $sheet->setCellValue('N' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_club() {
		$fileName = 'club.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$clublist = $this->Website_model->clublistbyyear($user_id,$year);
		// $travellinglist = $this->Website_model->travellinglistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Club Id');
		$sheet->setCellValue('E1','Club Member Name');
        $sheet->setCellValue('F1','Sponsor No.');       
        $sheet->setCellValue('G1','Sponsor Level');       
        $sheet->setCellValue('H1','Joining Fee');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Grand Total Revenue');       
        $sheet->setCellValue('L1','Batch No.');       
        $sheet->setCellValue('M1','Added On');        
        $rows = 2;
        foreach ($clublist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_b']);
            $sheet->setCellValue('C' . $rows, $val['group_name_b']);
            $sheet->setCellValue('D' . $rows, $val['club_id_no']);
	   		$sheet->setCellValue('E' . $rows, $val['club_member_name']);
            $sheet->setCellValue('F' . $rows, $val['sponsor_no']);
            $sheet->setCellValue('G' . $rows, $val['sponsor_level']);
            $sheet->setCellValue('H' . $rows, $val['joining_fee']);
            $sheet->setCellValue('I' . $rows, $val['banking_id4']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue_3']);
            $sheet->setCellValue('K' . $rows, $val['grand_total_revamue']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    } 

    public function createExcel_club_month() {
		$fileName = 'club_month.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$clublist = $this->Website_model->clublistbymonth($user_id,$month);
		// $travellinglist = $this->Website_model->travellinglistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Club Id');
		$sheet->setCellValue('E1','Club Member Name');
        $sheet->setCellValue('F1','Sponsor No.');       
        $sheet->setCellValue('G1','Sponsor Level');       
        $sheet->setCellValue('H1','Joining Fee');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Grand Total Revenue');       
        $sheet->setCellValue('L1','Batch No.');       
        $sheet->setCellValue('M1','Added On');        
        $rows = 2;
        foreach ($clublist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_b']);
            $sheet->setCellValue('C' . $rows, $val['group_name_b']);
            $sheet->setCellValue('D' . $rows, $val['club_id_no']);
	   		$sheet->setCellValue('E' . $rows, $val['club_member_name']);
            $sheet->setCellValue('F' . $rows, $val['sponsor_no']);
            $sheet->setCellValue('G' . $rows, $val['sponsor_level']);
            $sheet->setCellValue('H' . $rows, $val['joining_fee']);
            $sheet->setCellValue('I' . $rows, $val['banking_id4']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue_3']);
            $sheet->setCellValue('K' . $rows, $val['grand_total_revamue']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    } 

    public function createExcel_club_month_team() {
		$fileName = 'club_month_team.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$clublist = $this->Website_model->myteam_clublistbymonthly($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Club Id');
		$sheet->setCellValue('E1','Club Member Name');
        $sheet->setCellValue('F1','Sponsor No.');       
        $sheet->setCellValue('G1','Sponsor Level');       
        $sheet->setCellValue('H1','Joining Fee');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Grand Total Revenue');       
        $sheet->setCellValue('L1','Batch No.');       
        $sheet->setCellValue('M1','Added On');        
        $rows = 2;
        foreach ($clublist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_b']);
            $sheet->setCellValue('C' . $rows, $val['group_name_b']);
            $sheet->setCellValue('D' . $rows, $val['club_id_no']);
	   		$sheet->setCellValue('E' . $rows, $val['club_member_name']);
            $sheet->setCellValue('F' . $rows, $val['sponsor_no']);
            $sheet->setCellValue('G' . $rows, $val['sponsor_level']);
            $sheet->setCellValue('H' . $rows, $val['joining_fee']);
            $sheet->setCellValue('I' . $rows, $val['banking_id4']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue_3']);
            $sheet->setCellValue('K' . $rows, $val['grand_total_revamue']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_club_annual_team() {
		$fileName = 'club_annual_team.xlsx';
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$clublist = $this->Website_model->myteam_clublistbyyearly($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Group No');
        $sheet->setCellValue('C1','Group Name');
        $sheet->setCellValue('D1','Club Id');
		$sheet->setCellValue('E1','Club Member Name');
        $sheet->setCellValue('F1','Sponsor No.');       
        $sheet->setCellValue('G1','Sponsor Level');       
        $sheet->setCellValue('H1','Joining Fee');       
        $sheet->setCellValue('I1','Banking ID');       
        $sheet->setCellValue('J1','Total Revenue');       
        $sheet->setCellValue('K1','Grand Total Revenue');       
        $sheet->setCellValue('L1','Batch No.');       
        $sheet->setCellValue('M1','Added On');        
        $rows = 2;
        foreach ($clublist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['group_no_b']);
            $sheet->setCellValue('C' . $rows, $val['group_name_b']);
            $sheet->setCellValue('D' . $rows, $val['club_id_no']);
	   		$sheet->setCellValue('E' . $rows, $val['club_member_name']);
            $sheet->setCellValue('F' . $rows, $val['sponsor_no']);
            $sheet->setCellValue('G' . $rows, $val['sponsor_level']);
            $sheet->setCellValue('H' . $rows, $val['joining_fee']);
            $sheet->setCellValue('I' . $rows, $val['banking_id4']);
            $sheet->setCellValue('J' . $rows, $val['total_revenue_3']);
            $sheet->setCellValue('K' . $rows, $val['grand_total_revamue']);
            $sheet->setCellValue('L' . $rows, $val['batch_no']);
            $sheet->setCellValue('M' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }
    public function createExcel_travelling() {
		$fileName = 'travellinglist.xlsx';	
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$travellinglist = $this->Website_model->travellinglistbyyear($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Inspection Area');
        $sheet->setCellValue('C1','Objective');
        $sheet->setCellValue('D1','Arrival Time');
		$sheet->setCellValue('E1','Arrival Km');
        $sheet->setCellValue('F1','Post Of Department');       
        $sheet->setCellValue('G1','Departure Km.');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Result');       
        $sheet->setCellValue('J1','Batch No.');       
        $sheet->setCellValue('K1','Added On');        
        $rows = 2;
        foreach ($travellinglist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['inspection_area']);
            $sheet->setCellValue('C' . $rows, $val['objective']);
            $sheet->setCellValue('D' . $rows, $val['arrival_time']);
	   		$sheet->setCellValue('E' . $rows, $val['arrival_km']);
            $sheet->setCellValue('F' . $rows, $val['port_of_department']);
            $sheet->setCellValue('G' . $rows, $val['departure_km']);
            $sheet->setCellValue('H' . $rows, $val['other_fee2']);
            $sheet->setCellValue('I' . $rows, $val['result']);
            $sheet->setCellValue('J' . $rows, $val['batch_no']);
            $sheet->setCellValue('K' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    } 

    public function createExcel_travelling_month() {
		$fileName = 'travelling_month.xlsx';	
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$travellinglist = $this->Website_model->travellinglistbymonth($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Inspection Area');
        $sheet->setCellValue('C1','Objective');
        $sheet->setCellValue('D1','Arrival Time');
		$sheet->setCellValue('E1','Arrival Km');
        $sheet->setCellValue('F1','Post Of Department');       
        $sheet->setCellValue('G1','Departure Km.');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Result');       
        $sheet->setCellValue('J1','Batch No.');       
        $sheet->setCellValue('K1','Added On');        
        $rows = 2;
        foreach ($travellinglist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['inspection_area']);
            $sheet->setCellValue('C' . $rows, $val['objective']);
            $sheet->setCellValue('D' . $rows, $val['arrival_time']);
	   		$sheet->setCellValue('E' . $rows, $val['arrival_km']);
            $sheet->setCellValue('F' . $rows, $val['port_of_department']);
            $sheet->setCellValue('G' . $rows, $val['departure_km']);
            $sheet->setCellValue('H' . $rows, $val['other_fee2']);
            $sheet->setCellValue('I' . $rows, $val['result']);
            $sheet->setCellValue('J' . $rows, $val['batch_no']);
            $sheet->setCellValue('K' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_travelling_month_team(){
		$fileName = 'travelling_month_team.xlsx';	
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$travellinglist = $this->Website_model->myteam_travellinglistbymonthly($user_id,$month);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Inspection Area');
        $sheet->setCellValue('C1','Objective');
        $sheet->setCellValue('D1','Arrival Time');
		$sheet->setCellValue('E1','Arrival Km');
        $sheet->setCellValue('F1','Post Of Department');       
        $sheet->setCellValue('G1','Departure Km.');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Result');       
        $sheet->setCellValue('J1','Batch No.');       
        $sheet->setCellValue('K1','Added On');        
        $rows = 2;
        foreach ($travellinglist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['inspection_area']);
            $sheet->setCellValue('C' . $rows, $val['objective']);
            $sheet->setCellValue('D' . $rows, $val['arrival_time']);
	   		$sheet->setCellValue('E' . $rows, $val['arrival_km']);
            $sheet->setCellValue('F' . $rows, $val['port_of_department']);
            $sheet->setCellValue('G' . $rows, $val['departure_km']);
            $sheet->setCellValue('H' . $rows, $val['other_fee2']);
            $sheet->setCellValue('I' . $rows, $val['result']);
            $sheet->setCellValue('J' . $rows, $val['batch_no']);
            $sheet->setCellValue('K' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }

    public function createExcel_travelling_annual_team(){
		$fileName = 'travelling_month_team.xlsx';	
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$travellinglist = $this->Website_model->myteam_travellinglistbyyearly($user_id,$year);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','Id');
        $sheet->setCellValue('B1','Inspection Area');
        $sheet->setCellValue('C1','Objective');
        $sheet->setCellValue('D1','Arrival Time');
		$sheet->setCellValue('E1','Arrival Km');
        $sheet->setCellValue('F1','Post Of Department');       
        $sheet->setCellValue('G1','Departure Km.');       
        $sheet->setCellValue('H1','Other Fee');       
        $sheet->setCellValue('I1','Result');       
        $sheet->setCellValue('J1','Batch No.');       
        $sheet->setCellValue('K1','Added On');        
        $rows = 2;
        foreach ($travellinglist as $val){
            $sheet->setCellValue('A' . $rows, $val['id']);
            $sheet->setCellValue('B' . $rows, $val['inspection_area']);
            $sheet->setCellValue('C' . $rows, $val['objective']);
            $sheet->setCellValue('D' . $rows, $val['arrival_time']);
	   		$sheet->setCellValue('E' . $rows, $val['arrival_km']);
            $sheet->setCellValue('F' . $rows, $val['port_of_department']);
            $sheet->setCellValue('G' . $rows, $val['departure_km']);
            $sheet->setCellValue('H' . $rows, $val['other_fee2']);
            $sheet->setCellValue('I' . $rows, $val['result']);
            $sheet->setCellValue('J' . $rows, $val['batch_no']);
            $sheet->setCellValue('K' . $rows, date('d-m-Y',strtotime($val['added_on'])));
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName);              
    }
	public function expense_insert(){
		$data = $this->input->post();
		$expense['equipment'] = $data['equipment'];
		$expense['quantity'] = $data['quantity'];
		$expense['rate'] = $data['rate'];
		$expense['amount'] = $data['amount'];
		$expense['bill'] = $data['bill'];
		$expense['payment_receipt'] = $data['payment_receipt'];
		$expense['payment_method'] = $data['payment_method'];
		$expense['neft_check'] = $data['neft_check'];
		$expense['total_revenue'] = $data['total_revenue'];
		$expense['user_id'] = $_SESSION['user_id'];
		$expense['added_on'] = date('Y-m-d');
		$count = count($expense['equipment']);
		for ($i=0; $i < $count; $i++) { 
			$arr = array('equipment'=>$expense['equipment'][$i],'quantity'=>$expense['quantity'][$i],'rate'=>$expense['rate'][$i],'amount'=>$expense['amount'][$i],'bill'=>$expense['bill'][$i],'payment_receipt'=>$expense['payment_receipt'][$i],'payment_method'=>$expense['payment_method'][$i],'neft_check'=>$expense['neft_check'][$i],'total_revenue'=>$expense['total_revenue'],'user_id'=>$expense['user_id'],'added_on'=>$expense['added_on']);
			$finalexpense[] = $arr;
		}
		$expenses = json_encode($finalexpense);
		$reult = $this->Website_model->insert_expense($expenses);

		if($reult===true){
			redirect('website/daily_expense/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/daily_expense/?status=0');
		}
	}
	// '''''''''''''''''''''''''''''''My Team Office'''''''''''''''''''''''''''''''''''''''''
	public function myteam_progress_report(){
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['state_code']= $this->Website_model->userdetails();
		$d['v'] = 'website/my_team_progress_entry';
        $this->load->view('website/template_1',$d);
	}
	public function myteam_daily_report()
	{
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
		$postdatas = $this->Website_model->my_team_insert_reports($form_1,$form_2,$form_3,$form_4,$form_5);
		if($postdatas==true){
			// $this->createsession($result);
			redirect('website/open_annual_progress_report/?status=1');
		}
		else{ 
			$this->session->set_flashdata('err_msg',$result['verify']);
			redirect('website/open_annual_progress_report/?status=0');
   		}
	}

	public function myteam_daily_progress_report(){
		$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$date = date('Y-m-d');
		$d['revenue'] = $this->Website_model->myteam_revenuelistbydaily($user_id,$date);
		$d['security'] = $this->Website_model->myteam_securitylistbydaily($user_id,$date);
		$d['group'] = $this->Website_model->myteam_grouplistbydaily($user_id,$date);
		$d['club'] = $this->Website_model->myteam_clublistbydaily($user_id,$date);
		$d['travelling'] = $this->Website_model->myteam_travellinglistbydaily($user_id,$date);
		$d['v'] = 'website/daily_team_progress_report';
        $this->load->view('website/template_1',$d);
	}

	public function myteam_monthly_progress_report(){
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$month = date('m');
		$d['revenue'] = $this->Website_model->myteam_revenuelistbymonthly($user_id,$month);
		$d['security'] = $this->Website_model->myteam_securitylistbymonthly($user_id,$month);
		$d['group'] = $this->Website_model->myteam_grouplistbymonthly($user_id,$month);
		$d['club'] = $this->Website_model->myteam_clublistbymonthly($user_id,$month);
		$d['travelling'] = $this->Website_model->myteam_travellinglistbymonthly($user_id,$month);

		$d['v'] = 'website/monthly_team_progress_report';
        $this->load->view('website/template_1',$d);
	}


	

	public function team_get_monthly_progress_list(){
		$user_id['id'] = $_SESSION['user_id'];
		$month = $_POST['month'];
		$revenuelist = $this->Website_model->myteam_revenuelistbymonthly($user_id,$month);
		$securitylist = $this->Website_model->myteam_securitylistbymonthly($user_id,$month);
		$grouplist = $this->Website_model->myteam_grouplistbymonthly($user_id,$month);
		$clublist = $this->Website_model->myteam_clublistbymonthly($user_id,$month);
		$travellinglist = $this->Website_model->myteam_travellinglistbymonthly($user_id,$month);
		// print_r($revenuelist);
		// print_r($securitylist);
		// print_r($grouplist);
		// print_r($clublist);
		// print_r($travellinglist);die;
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
                    $html.='<thead>';
                        $html.='<tr>';   
                            $html.='<th>S.NO.</th>';
                            $html.='<th>REGISTRATION No.</th>';                
                            $html.='<th>APPLICANT Name</th>';                
                            $html.='<th>FATHER/HUSBAND</th>';
                            $html.='<th>DOB</th>';
                            $html.='<th>POST NAME</th>';
                            $html.='<th>FEE</th>';
                            $html.='<th>PAYMENT DATE</th>';
                            $html.='<th>BANKING ID</th>';
                            $html.='<th>CREATED DATE</th>';
                           $html.='</tr>';
                    $html.='</thead>';
                    $html.='<tbody>';
                     $i=0;
                         if(!empty($revenuelist)){
                            foreach($revenuelist as $val){$i++; $id=$val['id']; 
                        $html.='<tr>';
                            $html.='<td>'.$i.'</td>';
                            $html.='<td>'.$val['registration_no'].'</td>';
                            $html.='<td>'.$val['applicant_name'].'</td>';
                            $html.='<td>'.$val['father_husband'].'</td>';
                            $html.='<td>'.date('d-m-Y',strtotime($val['dob'])).'</td>';
                            $html.='<td>'.$val['post_name'].'</td>';
                            $html.='<td>'.$val['fee'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['date_payment'])).'</td>';
                            $html.='<td>'.$val['banking_id1'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                        $html.='</tr>'; 
                    }}
                    $html.='</tbody>';
                $html.='</table>';
                // ''''''''''''''''''''''''''''''''revenure''''''''''''''''''''''''
                $html1='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html1.='<thead>';
                                        $html1.='<tr>';    
                                            $html1.='<th>S.NO.</th>';
                                            $html1.='<th>REGISTRATION No.</th>';                
                                            $html1.='<th>APPLICANT NAME</th>';                
                                            $html1.='<th>POST NAME</th>';
                                            $html1.='<th>SECURITY FUND</th>';
                                            $html1.='<th>TRAINING FEE</th>';
                                            $html1.='<th>PROCESSING FEE</th>';
                                            $html1.='<th>OTHER FEE</th>';
                                            $html1.='<th>TOTAL BANKING</th>';
                                            $html1.='<th>BANKING ID</th>';
                                            $html1.='<th>CREATED DATE</th>';
                                            $html1.='<th>TOTAL REVENUE</th>';
                                        $html1.='</tr>';
                                    $html1.='</thead>';
                                    $html1.='<tbody>';
                                         $i=0;
                                         if(!empty($securitylist)){
                                            foreach($securitylist as $val){$i++; $id=$val['id'];
                                        $html1.='<tr>';
                                            $html1.='<td>'.$i.'</td>';
                                            $html1.='<td >'.$val['reg_no'].'</td>';
                                            $html1.='<td >'.$val['name'].'</td>';
                                            $html1.='<td >'.$val['name_of_post'].'</td>';
                                            $html1.='<td >'.$val['security_fund'].'</td>';
                                            $html1.='<td>'.$val['training_fee'].'</td>';
                                            $html1.='<td >'.$val['processing_fee'].'</td>';
                                            $html1.='<td >'.$val['other_fee1'].'</td>';
                                            $html1.='<td >'.$val['total_banking'].'</td>';
                                            $html1.='<td >'.$val['banking_id2'].'</td>';
                                            $html1.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html1.='<td >'.$val['total_revenue_1'].'</td>'; 
                                        $html1.='</tr>';
                                    }}
                                    $html1.='</tbody>';
                                $html1.='</table>';
                    // ''''''''''''''''''''''''''security'''''''''''''''''''''''''''''
                                $html2 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html2.='<thead>';
                                        $html2.='<tr>';    
                                            $html2.='<th>S.NO.</th>';
                                            $html2.='<th>GROUP NO.</th>';                
                                            $html2.='<th>GROUP NAME</th>';                
                                            $html2.='<th>GROUP ADDRESS</th>';
                                            $html2.='<th>MEETING NO.</th>';
                                            $html2.='<th>PASSBOOK ISSUE FEE</th>';
                                            $html2.='<th>WEEKLY SAVING DEPOSIT</th>';
                                            $html2.='<th>EMI DEPOSIT</th>';
                                            $html2.='<th>BOUNCING FEE</th>';
                                            $html2.='<th>LATE FINE FEE</th>';
                                            $html2.='<th>BANKING ID</th>';
                                            $html2.='<th>CREATED DATE</th>';
                                            $html2.='<th>TOTAL REVENUE</th>';                                       
                                        $html2.='</tr>';
                                    $html2.='</thead>';
                                    $html2.='<tbody>';
                                    $i=0;
                                         if(!empty($grouplist)){
                                            foreach($grouplist as $val){$i++; $id=$val['id'];
                                        $html2.='<tr>';
                                            $html2.='<td >'.$i.'</td>';
                                            $html2.='<td >'.$val['group_no_a'].'</td>';
                                            $html2.='<td >'.$val['group_name_a'].'</td>';
                                            $html2.='<td >'.$val['group_address'].'</td>';
                                            $html2.='<td >'.$val['meeting_no'].'</td>';
                                            $html2.='<td >'.$val['passbook_issue_fee'].'</td>';
                                            $html2.='<td >'.$val['weekly_saving_deposit'].'</td>';
                                            $html2.='<td >'.$val['emi_deposit'].'</td>';
                                            $html2.='<td >'.$val['bouncing_fee'].'</td>';
                                            $html2.='<td >'.$val['late_fine_fee'].'</td>';
                                            $html2.='<td >'.$val['banking_id3'].'</td>';
                                            $html2.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html2.='<td >'.$val['total_revenue_2_'].'</td>';
                                        $html2.='</tr>';  
                                        }
                                 }
                                    $html2.='</tbody>';
                                $html2.='</table>;';
         // <!-- '''''''''''''''''''''''''''''''Group''''''''''''''''''''''''''''''''''' -->
                                $html3 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html3.='<thead>';

                                         $html3.='<tr>';    
                                            $html3.='<th>S.NO.</th>';
                                            $html3.='<th>GROUP NO.</th>';                
                                            $html3.='<th>GROUP NAME</th>';                
                                            $html3.='<th>CLUB ID NO.</th>';               
                                            $html3.='<th>CLUB MEMBER NAME</th>';
                                            $html3.='<th>SPONSOR NO.</th>';
                                            $html3.='<th>SPONSOR LEVEL</th>';
                                            $html3.='<th>JOINING FEE</th>';
                                            $html3.='<th>BANKING ID</th>';
                                            $html3.='<th>CREATED DATE</th>';
                                            $html3.='<th>TOTAL REVENUE</th>';
                                            $html3.='<th>GRAND TOTAL REVENUE</th>';
                                         $html3.='</tr>';
                                          $html3.='</thead>';
                                           $html3.='<tbody>';
                                    $i=0;
                                         if(!empty($clublist)){
                                            foreach($clublist as $val){$i++; $id=$val['id'];
                                         $html3.='<tr>';
                                            $html3.='<td >'.$i.'</td>';
                                            $html3.='<td >'.$val['group_no_b'].'</td>';
                                            $html3.='<td >'.$val['group_name_b'].'</td>';
                                            $html3.='<td >'.$val['club_id_no'].'</td>';
                                            $html3.='<td >'.$val['club_member_name'].'</td>';
                                            $html3.='<td >'.$val['sponsor_no'].'</td>';
                                            $html3.='<td >'.$val['sponsor_level'].'</td>';
                                            $html3.='<td >'.$val['joining_fee'].'</td>';
                                            $html3.='<td >'.$val['banking_id4'].'</td>';
                                            $html3.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html3.='<td >'.$val['total_revenue_3'].'</td>';
                                            $html3.='<td >'.$val['grand_total_revamue'].'</td>';
                                        $html3.='</tr>';
                                        }
                                    }   
                                    $html3.='</tbody>';
                                $html3.='</table>';

	     // <!-- ''''''''''''''''''Club''''''''''''''''''''''' -->
                                $html4='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html4.='<thead>';
                 
                                            $html4.='<th>S.NO.</th>';
                                            $html4.='<th>INSPECTION AREA</th>';                
                                            $html4.='<th>OBJECTIVE</th>';                
                                            $html4.='<th>ARIVEL TIME</th>';
                                            $html4.='<th>ARIVEL KM</th>';
                                            $html4.='<th>POST</th>';                             
                                            $html4.='<th>DEPARTURE KM</th>';
                                            $html4.='<th>OTHER FEE</th>';
                                            $html4.='<th>RESULT</th>';
                                            $html4.='<th>CREATED DATE</th>';                                       
                                        $html4.='</tr>';
                                    $html4.='</thead>';
                                    $html4.='<tbody>';
                                    $i=0;
                                         if(!empty($travellinglist)){
                                            foreach($travellinglist as $val){$i++; $id=$val['id'];

                                         $html4.='<tr>';
                                            $html4.='<td >'.$i.'</td>';
                                            $html4.='<td >'.$val['inspection_area'].'</td>';
                                            $html4.='<td >'.$val['objective'].'</td>';
                                            $html4.='<td >'.$val['arrival_time'].'</td>';
                                            $html4.='<td >'.$val['arrival_km'].'</td>';
                                            $html4.='<td >'.$val['port_of_department'].'</td>';
                                            $html4.='<td >'.$val['departure_km'].'</td>';
                                            $html4.='<td >'.$val['other_fee2'].'</td>';
                                            $html4.='<td >'.$val['result'].'</td>';
                                            $html4.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                        $html4.='</tr>';
                                        }
                                    }  
                                    $html4.='</tbody>';
                                    $html4.='</table>';
                                    
                                    
                                    // $alldata=array();
                                    // $alldata[]='';
                                $alldata['first'] = $html;
                                $alldata['second'] = $html1;
                                $alldata['third'] = $html2;
                                $alldata['forth'] = $html3;
                                $alldata['fifth'] = $html4;
                                $results = json_encode($alldata);
                                echo $results;

                // <!-- ''''''''''''''''''''''travelling'''''''''''''''''''''''''''' -->
	}

	public function myteam_annualy_progress_report(){
		$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$user_id['id'] = $_SESSION['user_id'];
		$year = date('Y');
		$d['revenue'] = $this->Website_model->myteam_revenuelistbyyearly($user_id,$year);
		$d['security'] = $this->Website_model->myteam_securitylistbyyearly($user_id,$year);

		$d['group'] = $this->Website_model->myteam_grouplistbyyearly($user_id,$year);
		$d['club'] = $this->Website_model->myteam_clublistbyyearly($user_id,$year);
		$d['travelling'] = $this->Website_model->myteam_travellinglistbyyearly($user_id,$year);

		$d['v'] = 'website/annualy_team_progress_report';
        $this->load->view('website/template_1',$d);
	}

	public function team_get_annualy_progress_list(){
		$user_id['id'] = $_SESSION['user_id'];
		$year = $_POST['year'];
		$revenuelist = $this->Website_model->myteam_revenuelistbyyearly($user_id,$year);
		$securitylist = $this->Website_model->myteam_securitylistbyyearly($user_id,$year);
		$grouplist = $this->Website_model->myteam_grouplistbyyearly($user_id,$year);
		$clublist = $this->Website_model->myteam_clublistbyyearly($user_id,$year);
		$travellinglist = $this->Website_model->myteam_travellinglistbyyearly($user_id,$year);
		$html = '<table class="table data-table stripe hover nowrap table-bordered">';
                    $html.='<thead>';
                        $html.='<tr>';   
                            $html.='<th>S.NO.</th>';
                            $html.='<th>REGISTRATION No.</th>';                
                            $html.='<th>APPLICANT Name</th>';                
                            $html.='<th>FATHER/HUSBAND</th>';
                            $html.='<th>DOB</th>';
                            $html.='<th>POST NAME</th>';
                            $html.='<th>FEE</th>';
                            $html.='<th>PAYMENT DATE</th>';
                            $html.='<th>BANKING ID</th>';
                            $html.='<th>CREATED DATE</th>';
                           $html.='</tr>';
                    $html.='</thead>';
                    $html.='<tbody>';
                     $i=0;
                         if(!empty($revenuelist)){
                            foreach($revenuelist as $val){$i++; $id=$val['id']; 
                        $html.='<tr>';
                            $html.='<td>'.$i.'</td>';
                            $html.='<td>'.$val['registration_no'].'</td>';
                            $html.='<td>'.$val['applicant_name'].'</td>';
                            $html.='<td>'.$val['father_husband'].'</td>';
                            $html.='<td>'.date('d-m-Y',strtotime($val['dob'])).'</td>';
                            $html.='<td>'.$val['post_name'].'</td>';
                            $html.='<td>'.$val['fee'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['date_payment'])).'</td>';
                            $html.='<td>'.$val['banking_id1'].'</td>';
                            $html.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                        $html.='</tr>'; 
                    }}
                    $html.='</tbody>';
                $html.='</table>';
                // ''''''''''''''''''''''''''''''''revenure''''''''''''''''''''''''
                $html1='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html1.='<thead>';
                                        $html1.='<tr>';    
                                            $html1.='<th>S.NO.</th>';
                                            $html1.='<th>REGISTRATION No.</th>';                
                                            $html1.='<th>APPLICANT NAME</th>';                
                                            $html1.='<th>POST NAME</th>';
                                            $html1.='<th>SECURITY FUND</th>';
                                            $html1.='<th>TRAINING FEE</th>';
                                            $html1.='<th>PROCESSING FEE</th>';
                                            $html1.='<th>OTHER FEE</th>';
                                            $html1.='<th>TOTAL BANKING</th>';
                                            $html1.='<th>BANKING ID</th>';
                                            $html1.='<th>CREATED DATE</th>';
                                            $html1.='<th>TOTAL REVENUE</th>';
                                        $html1.='</tr>';
                                    $html1.='</thead>';
                                    $html1.='<tbody>';
                                         $i=0;
                                         if(!empty($securitylist)){
                                            foreach($securitylist as $val){$i++; $id=$val['id'];
                                        $html1.='<tr>';
                                            $html1.='<td>'.$i.'</td>';
                                            $html1.='<td >'.$val['reg_no'].'</td>';
                                            $html1.='<td >'.$val['name'].'</td>';
                                            $html1.='<td >'.$val['name_of_post'].'</td>';
                                            $html1.='<td >'.$val['security_fund'].'</td>';
                                            $html1.='<td>'.$val['training_fee'].'</td>';
                                            $html1.='<td >'.$val['processing_fee'].'</td>';
                                            $html1.='<td >'.$val['other_fee1'].'</td>';
                                            $html1.='<td >'.$val['total_banking'].'</td>';
                                            $html1.='<td >'.$val['banking_id2'].'</td>';
                                            $html1.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html1.='<td >'.$val['total_revenue_1'].'</td>'; 
                                        $html1.='</tr>';
                                    }}
                                    $html1.='</tbody>';
                                $html1.='</table>';
                    // ''''''''''''''''''''''''''security'''''''''''''''''''''''''''''
                                $html2 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html2.='<thead>';
                                        $html2.='<tr>';    
                                            $html2.='<th>S.NO.</th>';
                                            $html2.='<th>GROUP NO.</th>';                
                                            $html2.='<th>GROUP NAME</th>';                
                                            $html2.='<th>GROUP ADDRESS</th>';
                                            $html2.='<th>MEETING NO.</th>';
                                            $html2.='<th>PASSBOOK ISSUE FEE</th>';
                                            $html2.='<th>WEEKLY SAVING DEPOSIT</th>';
                                            $html2.='<th>EMI DEPOSIT</th>';
                                            $html2.='<th>BOUNCING FEE</th>';
                                            $html2.='<th>LATE FINE FEE</th>';
                                            $html2.='<th>BANKING ID</th>';
                                            $html2.='<th>CREATED DATE</th>';
                                            $html2.='<th>TOTAL REVENUE</th>';                                       
                                        $html2.='</tr>';
                                    $html2.='</thead>';
                                    $html2.='<tbody>';
                                    $i=0;
                                         if(!empty($grouplist)){
                                            foreach($grouplist as $val){$i++; $id=$val['id'];
                                        $html2.='<tr>';
                                            $html2.='<td >'.$i.'</td>';
                                            $html2.='<td >'.$val['group_no_a'].'</td>';
                                            $html2.='<td >'.$val['group_name_a'].'</td>';
                                            $html2.='<td >'.$val['group_address'].'</td>';
                                            $html2.='<td >'.$val['meeting_no'].'</td>';
                                            $html2.='<td >'.$val['passbook_issue_fee'].'</td>';
                                            $html2.='<td >'.$val['weekly_saving_deposit'].'</td>';
                                            $html2.='<td >'.$val['emi_deposit'].'</td>';
                                            $html2.='<td >'.$val['bouncing_fee'].'</td>';
                                            $html2.='<td >'.$val['late_fine_fee'].'</td>';
                                            $html2.='<td >'.$val['banking_id3'].'</td>';
                                            $html2.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html2.='<td >'.$val['total_revenue_2_'].'</td>';
                                        $html2.='</tr>';  
                                        }
                                 }
                                    $html2.='</tbody>';
                                $html2.='</table>;';
         // <!-- '''''''''''''''''''''''''''''''Group''''''''''''''''''''''''''''''''''' -->
                                $html3 ='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html3.='<thead>';

                                         $html3.='<tr>';    
                                            $html3.='<th>S.NO.</th>';
                                            $html3.='<th>GROUP NO.</th>';                
                                            $html3.='<th>GROUP NAME</th>';                
                                            $html3.='<th>CLUB ID NO.</th>';               
                                            $html3.='<th>CLUB MEMBER NAME</th>';
                                            $html3.='<th>SPONSOR NO.</th>';
                                            $html3.='<th>SPONSOR LEVEL</th>';
                                            $html3.='<th>JOINING FEE</th>';
                                            $html3.='<th>BANKING ID</th>';
                                            $html3.='<th>CREATED DATE</th>';
                                            $html3.='<th>TOTAL REVENUE</th>';
                                            $html3.='<th>GRAND TOTAL REVENUE</th>';
                                         $html3.='</tr>';
                                          $html3.='</thead>';
                                           $html3.='<tbody>';
                                    $i=0;
                                         if(!empty($clublist)){
                                            foreach($clublist as $val){$i++; $id=$val['id'];
                                         $html3.='<tr>';
                                            $html3.='<td >'.$i.'</td>';
                                            $html3.='<td >'.$val['group_no_b'].'</td>';
                                            $html3.='<td >'.$val['group_name_b'].'</td>';
                                            $html3.='<td >'.$val['club_id_no'].'</td>';
                                            $html3.='<td >'.$val['club_member_name'].'</td>';
                                            $html3.='<td >'.$val['sponsor_no'].'</td>';
                                            $html3.='<td >'.$val['sponsor_level'].'</td>';
                                            $html3.='<td >'.$val['joining_fee'].'</td>';
                                            $html3.='<td >'.$val['banking_id4'].'</td>';
                                            $html3.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                            $html3.='<td >'.$val['total_revenue_3'].'</td>';
                                            $html3.='<td >'.$val['grand_total_revamue'].'</td>';
                                        $html3.='</tr>';
                                        }
                                    }   
                                    $html3.='</tbody>';
                                $html3.='</table>';

	// <!-- ''''''''''''''''''''''''''''''Club''''''''''''''''''''''''''''''''''''''''''' -->
                                $html4='<table class="table data-table stripe hover nowrap table-bordered">';
                                    $html4.='<thead>';
                                    		$html4.='<th>S.NO.</th>';
                                            $html4.='<th>INSPECTION AREA</th>';                
                                            $html4.='<th>OBJECTIVE</th>';
                                            $html4.='<th>ARIVEL TIME</th>';
                                            $html4.='<th>ARIVEL KM</th>';
                                            $html4.='<th>POST</th>';
                                            $html4.='<th>DEPARTURE KM</th>';
                                            $html4.='<th>OTHER FEE</th>';
                                            $html4.='<th>RESULT</th>';
                                            $html4.='<th>CREATED DATE</th>';                                       
                                        $html4.='</tr>';
                                    $html4.='</thead>';
                                    $html4.='<tbody>';
                                    $i=0;
                                         if(!empty($travellinglist)){
                                            foreach($travellinglist as $val){$i++; $id=$val['id'];
										$html4.='<tr>';
                                            $html4.='<td >'.$i.'</td>';
                                            $html4.='<td >'.$val['inspection_area'].'</td>';
                                            $html4.='<td >'.$val['objective'].'</td>';
                                            $html4.='<td >'.$val['arrival_time'].'</td>';
                                            $html4.='<td >'.$val['arrival_km'].'</td>';
                                            $html4.='<td >'.$val['port_of_department'].'</td>';
                                            $html4.='<td >'.$val['departure_km'].'</td>';
                                            $html4.='<td >'.$val['other_fee2'].'</td>';
                                            $html4.='<td >'.$val['result'].'</td>';
                                            $html4.='<td >'.date('d-m-Y',strtotime($val['added_on'])).'</td>';
                                        $html4.='</tr>';
                                        }
                                    }  
                                    $html4.='</tbody>';
                                    $html4.='</table>';
                                    // $alldata=array();
                                    // $alldata[]='';
                                $alldata['first'] = $html;
                                $alldata['second'] = $html1;
                                $alldata['third'] = $html2;
                                $alldata['forth'] = $html3;
                                $alldata['fifth'] = $html4;
                                $results = json_encode($alldata);
                                echo $results;

                // <!-- ''''''''''''''''''''''travelling'''''''''''''''''''''''''''' -->
	}

	// ........................PROJECT................................

	    public function ajeevikageneralgrp(){

			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/ajeevikageneralgrp';
			$this->load->view('website/template_1',$d);
		}

		public function membersignup_form(){

			$id = $_SESSION['user_id'];
			$length = 5;
			$captcha=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
			$d['captcha'] =$captcha;
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['officer_name'] = $finalrecord;
			$d['v'] = 'website/new_membersignup';
			$this->load->view('website/template_1',$d);
		}

		public function create_membership(){
			$last_id=$_SESSION['last_id'];
			$d['allsignuprecords']=$this->Website_model->get_signupdetails($last_id);
			// // print_r($last_id);die;
			// echo PRE;
			// print_r($d['allsignuprecords']);die;
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/create_membership_form';
			$this->load->view('website/template_1',$d);
		}

		public function addrecord_membership(){
			$data =  $this->input->post();
			// echo PRE;
			// print_r($_SESSION);
			// print_r($data);die;
			$result = $this->upload_allmember_records($_FILES);

			$record['varify']= $this->Website_model->insert_member_all_records($data,$result);
			if($record['varify']==true){
				// ......create otp area.......
				$this->session->set_flashdata('err_msg','Submit Successfully');
				redirect('website/member_login'.$records);
			}
			else{ 
				$this->session->set_flashdata('err_msg',$result['verify']);
				redirect('website/create_membership');
   		    }
			
		}
		public function upload_allmember_records($files){
			// print_r($files);die;
			$upload_path = './assets/uploads/member/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			if(!empty($_FILES['image']['name'])){
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
			}
			if(!empty($_FILES['member_sign']['name'])){
				$image = upload_file("member_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['member_sign'] = $image['path'];
				  }

			}
			if(!empty($_FILES['member_right_hand_thumb']['name'])){
				$image = upload_file("member_right_hand_thumb", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['member_right_hand_thumb'] = $image['path'];
				  }
			}
			if(!empty($_FILES['aadhar_front']['name'])){
				$image = upload_file("aadhar_front", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['aadhar_front'] = $image['path'];
				  }

			}
			if(!empty($_FILES['aadhar_back']['name'])){
				$image = upload_file("aadhar_back", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['aadhar_back'] = $image['path'];
				  }

			}
			if(!empty($_FILES['election_id_card']['name'])){
				$image = upload_file("election_id_card", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['election_id_card'] = $image['path'];
				  }
			}
			if(!empty($_FILES['pan_card']['name'])){
				$image = upload_file("pan_card", $upload_path, $allowed_types, time());
				  if ($image !='') {

					  $data['pan_card'] = $image['path'];
				  }

			}
			if(!empty($_FILES['passbook_bank']['name'])){
				$image = upload_file("passbook_bank", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['passbook_bank'] = $image['path'];
				  }

			}
			if(!empty($_FILES['qualification_certificate']['name'])){
				$image = upload_file("qualification_certificate", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $data['qualification_certificate'] = $image['path'];
				  }
			}
			return $data;

			
		}

		public function membership_otp(){
			
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['last_id'] = $this->input->get('eumndf');
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/membership_otp_confirm';
			$this->load->view('website/template_1',$d);
		}
		public function membership_signup(){
			$data = $this->input->post();
			// echo PRE;
			// print_r($data);die;
			if($data['captcha']==$data['captcha_confirm']){
				$record= $this->Website_model->insert_membership($data);
				if($record['varify']==true){
					// .....create otp area......
					$last_id = $record['last_id'];
					$last_ids['last_id'] = $last_id;
			        $this->session->set_userdata($last_ids);
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/membership_otp');
				}
				else{ 
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/membersignup_form');
	   		    }
			}
			else{ 
				$this->session->set_flashdata('err_msg','Captch not match!');
				redirect('website/membersignup_form');
	   		}
			
		}

		public function member_login(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/membership_login';
			$this->load->view('website/template_1',$d);
		}

// '''''''''''''''''''''''''''''''''''' SUB Member'''''''''''''''''''''''''''''''''
		public function check_memberlogin(){
		    $data = $this->input->post();
		    $record= $this->Website_model->membership_login($data);
		    if($record['verify']==true){
		    	unset($_SESSION['member_id']);
				unset($_SESSION['last_id']);
				unset($_SESSION['member_name']);
				$this->load->helper('cookie');
      	    	delete_cookie('member_cookie');
		    	if(empty($_SESSION['member_id'])){
		    		$this->createsession_member($record);
					if(!empty($_SESSION['member_id'])){
						redirect('website/memberdashboard');
					}
					else{
						redirect('website/member_login');
					}

		    	}
		    	else{
		    		redirect('website/memberdashboard');
		    	}
			
		}
		else{ 
			die;
			$this->session->set_flashdata('err_msg',$record['verify']);
			redirect('website/member_login');
		}
	}

	public function check_submemberlogin(){
		    $data = $this->input->post();
		    $record= $this->Website_model->membership_login($data);
		    if($record['verify']==true){
		    	unset($_SESSION['member_id']);
				unset($_SESSION['last_id']);
				unset($_SESSION['member_name']);
				$this->load->helper('cookie');
      	    	delete_cookie('member_cookie');
		    	if(empty($_SESSION['member_id'])){
		    		$this->createsession_member($record);
					if(!empty($_SESSION['member_id'])){
						redirect('website/memberdashboard');
					}
					else{
						redirect('website/submember_login');
					}

		    	}
		    	// else{
		    	// 	redirect('website/memberdashboard');
		    	// }
			
		}
		else{ 
			die;
			$this->session->set_flashdata('err_msg',$record['verify']);
			redirect('website/submember_login');
		}
	}

	public function createsession_member($result){
		$data['member_id']=$result['id'];
		$data['member_name']=$result['applicant_name'];
		$this->session->set_userdata($data);
		$this->update_cookie_member();
	}

	public function update_cookie_member(){
		 $this->load->helper('cookie');
		 $member_id = $this->session->userdata('user_id');
         $member_name = $this->session->userdata('member_name');
         $cookiearray = array('member_id'=>$member_id,'member_name'=>$member_name);
        $json = base64_encode(json_encode($cookiearray));
        $cookie = array(
        'name'   => 'member_cookie',
        'value'  => $json,
        'expire' => '2592000'        
         ); 
		$this->load->helper('cookie');
        $this->input->set_cookie($cookie);
	}


	public function memberdashboard(){

	   if(!empty($_SESSION['member_id'])){
	   	$id = $_SESSION['member_id'];
	   	$d['uploadfiles']=$this->Website_model->membership_uploadlist($id);
			$d['v'] = 'website/member_dashboard';
		    $this->load->view('website/template_2',$d);
		}
		else{
			redirect('website/member_login');
		}		
	}



    public function member_general_group(){
		if(!empty($_SESSION['member_id'])){
			$d['v'] = 'website/member_generalgroup';
		    $this->load->view('website/template_2',$d);
		}
		else{
			redirect('website/member_login');
		}
	}
	public function member_group_status(){
			$id = $_SESSION['member_id'];
			$d['list']=$this->Website_model->get_grouplist($id);
			// echo PRE;
			// print_r($d['list']);die;
			$d['v'] = 'website/member_group_status';
			$this->load->view('website/template_2',$d);
		}
		public function member_group_member_list(){
    	   $ids = $this->input->get('id');
			$d['ides']=$ids;
    	    $d['member_list']= $this->Website_model->getgroup_memberlist($ids);
			$d['v'] = 'website/member_group_list';
			$this->load->view('website/template_2',$d);
		}

	public function submember_signup(){

			$id = $_SESSION['user_id'];
			$length = 5;
			$captcha=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
			$d['captcha'] =$captcha;
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['state'] = $this->Website_model->get_statelist();
			$d['officer_name'] = $finalrecord;
			$d['v'] = 'website/new_submembersignup';
			$this->load->view('website/template_2',$d);
	}

	public function submembership_signup(){
		$data = $this->input->post();
			if($data['captcha']==$data['captcha_confirm']){
				$record= $this->Website_model->insert_membership($data);
				if($record['varify']==true){
					// .....create otp area......
					$last_id = $record['last_id'];
					$last_ids['last_id'] = $last_id;
			        $this->session->set_userdata($last_ids);
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/submembership_otp');
				}
				else{ 
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/membersignup_form');
	   		    }
			}
			else{ 
				$this->session->set_flashdata('err_msg','Captch not match!');
				redirect('website/membersignup_form');
	   		}
	}
	public function submembership_otp(){
			$d['v'] = 'website/submembership_otp_confirm';
			$this->load->view('website/template_2',$d);
		}
		public function create_submembership(){
			$last_id=$_SESSION['last_id'];
			$d['allsignuprecords']=$this->Website_model->get_signupdetails($last_id);
			// $id = $_SESSION['user_id'];
			// $record= $this->Website_model->getuser($id);
			// $finalrecord = $record[0];
			// $d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/create_submembership_form';
			$this->load->view('website/template_2',$d);
		}
		public function addrecord_submembership(){
			$data =  $this->input->post();
			$result = $this->upload_allmember_records($_FILES);

			$record['varify']= $this->Website_model->insert_member_all_records($data,$result);
			if($record['varify']==true){
				// ......create otp area.......
				$this->session->set_flashdata('err_msg','Submit Successfully');
				redirect('website/submember_login'.$records);
			}
			else{ 
				$this->session->set_flashdata('err_msg',$result['verify']);
				redirect('website/create_submembership');
   		    }
			
		}
		public function submember_login(){
			$d['v'] = 'website/submember_login';
			$this->load->view('website/template_2',$d);
		}
		public function group_creator_login(){
			$d['v'] = 'website/submember_grouplogin';
			$this->load->view('website/template_2',$d);
		}

		public function submember_login_home(){
			$d['v'] = 'website/login_submember';
			$this->load->view('website/template',$d);
		}

	public function member_logout(){
		if(!empty($_SESSION['member_id'])){
			unset($_SESSION['member_id']);
			unset($_SESSION['last_id']);
			unset($_SESSION['member_name']);
			$this->load->helper('cookie');
      	    delete_cookie('member_cookie');
		}
		if($this->session->user!==NULL){
      	  redirect('website/econtractdocx');
      	}
      	else{
      		redirect('/');
      	}
	}

	// ---------------------member group create--------------------------
	//officer group signup form
	public function groupsignup_form(){

			$id = $_SESSION['user_id'];
			$length = 5;
			$captcha=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
			$d['captcha'] =$captcha;
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['officer_name'] = $finalrecord;
			$d['v'] = 'website/member_groupsignup';
			$this->load->view('website/template_1',$d);
		}

		public function groupmembership_otp(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['last_id'] = $this->input->get('eumndf');
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/groupmembership_otp';
			$this->load->view('website/template_1',$d);
		}



		public function groupsingup_create(){
			$data = $this->input->post();
			// echo PRE;
			// print_r($data);die;
			if($data['captcha']==$data['captcha_confirm']){
				// echo PRE;
				// print_r($data);die;
				$record= $this->Website_model->insert_group_head($data);
				if($record['varify']==true){
					// .....create otp area......
					$last_id = $record['last_id'];
					$last_ids['last_group'] = $last_id;
			        $this->session->set_userdata($last_ids);
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/groupmembership_otp');
				}
				else{ 
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/groupsignup_form');
	   		    }
			}
			else{ 
				$this->session->set_flashdata('err_msg','Captch not match!');
				redirect('website/groupsignup_form');
	   		}
		}

		public function group_reg_form(){
			$last_group_id = $_SESSION['last_group'];
			$d['group_records']= $this->Website_model->group_details($last_group_id);
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['state_code']= $this->Website_model->userdetails();
			$d['v'] = 'website/group_registration_form';
			$this->load->view('website/template_1',$d);
		}	

		public function groupdetails_insert(){
			// echo PRE;
			// print_r($_FILES);die;
			if(!empty($_FILES['photo']['name'][0])){
				$files['name']=$_FILES['photo']['name'];
				$files['type']=$_FILES['photo']['type'];
				$files['tmp_name']=$_FILES['photo']['tmp_name'];
				$files['error']=$_FILES['photo']['error'];
				$files['size']=$_FILES['photo']['size'];
				$file_count = count($files['name']);
				for ($j=0; $j < $file_count; $j++) { 
					$file = array('name'=>$files['name'][$j],'type'=>$files['type'][$j],'tmp_name'=>$files['tmp_name'][$j],'error'=>$files['error'][$j],'size'=>$files['size'][$j]);
					$final_files[]['photo']=$file;
				}
				foreach ($final_files as $key => $value) { 
					$photo1 = $value['photo']['name'];
					$photo1 = explode('.',$photo1);
					$image1= time().$photo1[0];
					$extension1 = $photo1[1];
					$imagename1 = $value['photo']['tmp_name'];
					$upload_path = './assets/uploads/groups/';	
					$allext=array("gif","jpg","jpeg","png","pdf","GIF","JPG","JPEG","PNG","PDF");
					if(!empty($value['photo']['name'])){
						$check1[] = upload_files($upload_path,'photo',$allext,"1800000","1800000",'100000000',$image1,$extension1);
						$images[]['image'] = $image1.".jpg";
					}
				}
			}
			$upload_path = './assets/uploads/groups/details/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  if($_FILES['professor_sign']['name'] !=''){
			  	$image = upload_file("professor_sign", $upload_path, $allowed_types, time());

				  if ($image !='') {
					  $img['professor_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['p_sign']['name'] !=''){
			  	$image = upload_file("p_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['p_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['s_sign']['name'] !=''){
			  	$image = upload_file("s_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['s_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['t_sign']['name'] !=''){
			  	$image = upload_file("t_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['t_sign'] = $image['path'];
				  }
			  }
			  $extraimagepath = json_encode($img);
			$data = $this->input->post();
			// echo PRE;
			// print_r($data);die;
			$group_signup_id = $data['group_signup_id'];
			$records['member_id'] = $data['member_id'];
			$records['member_name'] = $data['member_name'];
			$records['dob'] = $data['dob'];
			$records['father_name'] = $data['father_name'];
			$records['mobile'] = $data['mobile'];
			$records['aadhar_no'] = $data['aadhar_no'];
			$records['designation'] = $data['designation'];
			// ''''''json conversion total member''''''''
			$total_member['total_members_in_word']=$data['total_members_in_word'];
			$total_member['total_members_in_number']=$data['total_members_in_number'];
			$records['total_members'] = json_encode($total_member);
			// ''''''json conversion mendetory''''''''
			$mendetory['mendetory1'] = $data['mandatory1'];
			$mendetory['mendetory2'] = $data['mandatory2'];
			$mendetory['mandatory3'] = $data['mandatory3'];
			$mendetory['mandatory4'] = $data['mandatory4'];
			$mendetory['mandatory5'] = $data['mandatory5'];
			$records['mandatory'] = json_encode($mendetory);
			$count = count($records['member_id']);
			for ($i=0; $i < $count; $i++) { 
				$arr = array('member_id'=>$records['member_id'][$i],'member_name'=>$records['member_name'][$i],'dob'=>$records['dob'][$i],'father_name'=>$records['father_name'][$i],'mobile'=>$records['mobile'][$i],'aadhar_no'=>$records['aadhar_no'][$i],'designation'=>$records['designation'][$i],'total_members'=>$records['total_members'],'mandatory'=>$records['mandatory'],'images'=>$images[$i]['image'],'extra_img'=> $extraimagepath,'sign_up_id'=>$group_signup_id,'added_on'=>date('Y-m-d'));
				$final_array[]=$arr;
			}
			$result = $this->Website_model->insert_groupdetails($final_array);
			$rslt = json_decode($result,true);
			$submit_count = count($rslt);
			if($count==$submit_count){
				$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/login_group');
			}
			else{
				redirect('website/group_reg_form');
			}
		}

		public function login_group(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/group_login';
			$this->load->view('website/template_1',$d);
		}

		public function check_grouplogin(){
		$data = $this->input->post();

		    $record= $this->Website_model->group_login($data);

		    if($record['verify']==true){
		    	unset($_SESSION['member_id']);
				unset($_SESSION['last_id']);
				unset($_SESSION['member_name']);
				unset($_SESSION['group_id']);
				unset($_SESSION['group_name']);
				$this->load->helper('cookie');
      	    	delete_cookie('member_cookie');
      	    	delete_cookie('group_cookie');
		    	if(empty($_SESSION['group_id'])){
		    		$this->createsession_group($record);
					if(!empty($_SESSION['group_id'])){
						redirect('website/groupdashboard');
					}
					else{
						redirect('website/login_group');
					}

		    	}
		    	// else{
		    	// 	redirect('website/memberdashboard');
		    	// }
			
		}
		else{ 
			$this->session->set_flashdata('err_msg',$record['verify']);
			redirect('website/login_group');
		}
	}

	public function groupdashboard(){
		if(!empty($_SESSION['group_id'])){
	   	$id = $_SESSION['group_id'];
	   	// $d['uploadfiles']=$this->Website_model->membership_uploadlist($id);
			$d['v'] = 'website/groupdashboard';
		    $this->load->view('website/template_3',$d);
		}
		else{
			redirect('website/login_group');
		}	
	}

	

	public function createsession_group($result){
		$data['group_id']=$result['id'];
		$data['group_name']=$result['group_name'];
		$this->session->set_userdata($data);
		$this->create_cookie_group();
	}


	public function create_cookie_group(){
		 $this->load->helper('cookie');
		 $group_id = $this->session->userdata('group_id');
         $group_name = $this->session->userdata('group_name');
         $cookiearray = array('group_id'=>$group_id,'group_name'=>$group_name);
        $json = base64_encode(json_encode($cookiearray));
        $cookie = array(
        'name'   => 'group_cookie',
        'value'  => $json,
        'expire' => '2592000'        
         ); 
		$this->load->helper('cookie');
        $this->input->set_cookie($cookie);
	}
	public function memberslink(){
		if(!empty($_SESSION['group_id'])){
	   	$id = $_SESSION['group_id'];
	   	// $d['uploadfiles']=$this->Website_model->membership_uploadlist($id);
			$d['v'] = 'website/group_member_link';
		    $this->load->view('website/template_3',$d);
		}
		else{
			redirect('website/login_group');
		}	
	}
	public function collective_saving(){
		if(!empty($_SESSION['group_id'])){
	   	$id = $_SESSION['group_id'];
	   	// $d['uploadfiles']=$this->Website_model->membership_uploadlist($id);
			$d['v'] = 'website/group_collective_saving';
		    $this->load->view('website/template_3',$d);
		}
		else{
			redirect('website/login_group');
		}	
	}

	public function enterprises_feature(){
		if(!empty($_SESSION['group_id'])){
	   	$id = $_SESSION['group_id'];
	   	// $d['uploadfiles']=$this->Website_model->membership_uploadlist($id);
			$d['v'] = 'website/group_enterprises';
		    $this->load->view('website/template_3',$d);
		}
		else{
			redirect('website/login_group');
		}	
	}


		public function group_status(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['list']=$this->Website_model->get_grouplist($id);
			// echo PRE;
			// print_r($d['list']);die;
			$d['v'] = 'website/group_list';
			$this->load->view('website/template_1',$d);
		}

	public function grouplist(){
    	$fileName = 'group_list.xlsx';
		$id = $_SESSION['user_id'];
		$groupData =$this->Website_model->get_grouplist($id);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','INCEPTION DATE');
        $sheet->setCellValue('B1','GROUP NAME');
        $sheet->setCellValue('C1','STATE');
        $sheet->setCellValue('D1','DIVISION');
		$sheet->setCellValue('E1','DIST');
        $sheet->setCellValue('F1','BLOCK');       
        $sheet->setCellValue('G1','WARD NO');       
        $sheet->setCellValue('H1','GRAM PANCHAYAT');       
        $sheet->setCellValue('I1','MOBILE NO.');       
        $sheet->setCellValue('J1','CREATED BY');        
        $sheet->setCellValue('K1','ADDED ON');       
        $rows = 2;
        foreach ($groupData as $val){
            $sheet->setCellValue('A' . $rows, $val['inception_date']);
            $sheet->setCellValue('B' . $rows, $val['group_name']);
            $sheet->setCellValue('C' . $rows, $val['state']);
            $sheet->setCellValue('D' . $rows, $val['division']);
	        $sheet->setCellValue('E' . $rows, $val['dist']);
            $sheet->setCellValue('F' . $rows, $val['block']);
            $sheet->setCellValue('G' . $rows, $val['ward_no']);
            $sheet->setCellValue('H' . $rows, $val['gram_panchayat']);
            $sheet->setCellValue('I' . $rows, $val['mobile_no']);
            $sheet->setCellValue('J' . $rows, $val['officer_first_name'].' '.$val['officer_middle_name'].' '.$val['officer_last_name']);
            $sheet->setCellValue('K' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function group_member_list(){
    	$ids = $this->input->get('id');
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			// $d['list']=$this->Website_model->get_grouplist($id);
			$d['ides']=$ids;
    	    $d['member_list']= $this->Website_model->getgroup_memberlist($ids);
			$d['v'] = 'website/group_member_list';
			$this->load->view('website/template_1',$d);
		}

	public function group_memberlist(){
		$ids = $this->input->get('id');
		
    	$fileName = 'group_member_list.xlsx';
		$id = $_SESSION['user_id'];
		$groupmemberData =$this->Website_model->getgroup_memberlist($ids);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','MEMBER ID');
        $sheet->setCellValue('B1','MEMBER NAME');
        $sheet->setCellValue('C1','DATE OF BIRTH');
        $sheet->setCellValue('D1','FATHER NAME');
		$sheet->setCellValue('E1','MOBILE NO');
        $sheet->setCellValue('F1','AADHAR NO');       
        $sheet->setCellValue('G1','DESIGNATION');       
        $sheet->setCellValue('H1','ADDED ON');       
        $rows = 2;
        foreach ($groupmemberData as $val){
            $sheet->setCellValue('A' . $rows, $val['member_id']);
            $sheet->setCellValue('B' . $rows, $val['member_name']);
            $sheet->setCellValue('C' . $rows, $val['dob']);
            $sheet->setCellValue('D' . $rows, $val['father_name']);
	        $sheet->setCellValue('E' . $rows, $val['mobile']);
            $sheet->setCellValue('F' . $rows, $val['aadhar_no']);
            $sheet->setCellValue('G' . $rows, $val['designation']);
            $sheet->setCellValue('H' . $rows, $val['added_on']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }


    public function member_status(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['list']=$this->Website_model->get_memberlist($id);
			// echo PRE;
			// print_r($d['list']);die;
			$d['v'] = 'website/member_list';
			$this->load->view('website/template_1',$d);
		}
	public function excel_memberlist(){
		$id = $_SESSION['user_id'];
		$d['list']=$this->Website_model->get_memberlist($id);
    	$fileName = 'member_list.xlsx';
		$id = $_SESSION['user_id'];
		$memberList =$this->Website_model->get_memberlist($id);
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','MEMBERSHIP NO');
        $sheet->setCellValue('B1','APPLICATION DATE');
        $sheet->setCellValue('C1','APPLICATION NO');
        $sheet->setCellValue('D1','APPLICANT NAME');
		$sheet->setCellValue('E1','ADDRESS');
        $sheet->setCellValue('F1','CONTACT NO');       
        $sheet->setCellValue('G1','AADHAR');       
        $sheet->setCellValue('H1','SUPER');       
        $sheet->setCellValue('I1','YEAR');      
        $rows = 2;
        foreach ($memberList as $val){
            $sheet->setCellValue('A' . $rows, $val['membership_no']);
            $sheet->setCellValue('B' . $rows, $val['app_date']);
            $sheet->setCellValue('C' . $rows, $val['app_no']);
            $sheet->setCellValue('D' . $rows, $val['applicant_name']);
	        $sheet->setCellValue('E' . $rows, 'VILL-'.$val['village'].', POST-'.$val['panchayat'].', WARD-'.$val['ward_no'].', POLICE STATION-'.$val['police_station'].', BLOCK-'.$val['block'].', DIST-'.$val['dist'].', STATE-'.$val['state'].', PIN-'.$val['pin_code']);
            $sheet->setCellValue('F' . $rows, $val['mobile_no']);
            $sheet->setCellValue('G' . $rows, $val['aadhar']);
            $sheet->setCellValue('H' . $rows, $val['super']);
            $sheet->setCellValue('I' . $rows, $val['year']);
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }
	public function sub_memberlist(){
		$get_id = $this->input->get('id');
		$d['get_id'] = $get_id;
		$id = $_SESSION['user_id'];
		$record= $this->Website_model->getuser($id);
		$finalrecord = $record[0];
		$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
		$d['list']=$this->Website_model->get_submemberlist($get_id);
		$d['v'] = 'website/submember_list';
		$this->load->view('website/template_1',$d);
	}

	public function excel_submemberlist(){
		$get_id = $this->input->get('id');
		$id = $_SESSION['user_id'];
    	$fileName = 'submember_list.xlsx';
		$id = $_SESSION['user_id'];
		$submemberList =$this->Website_model->get_submemberlist($get_id);
		// echo PRE;
		// print_r($submemberList);die;
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1','MEMBERSHIP NO');
        $sheet->setCellValue('B1','APPLICATION DATE');
        $sheet->setCellValue('C1','APPLICATION NO');
        $sheet->setCellValue('D1','APPLICANT NAME');
		$sheet->setCellValue('E1','ADDRESS');
        $sheet->setCellValue('F1','CONTACT NO');       
        $sheet->setCellValue('G1','AADHAR');       
        $sheet->setCellValue('H1','SUPER');       
        $sheet->setCellValue('I1','YEAR');      
        $rows = 2;
        foreach ($submemberList as $val){
        	 if(!empty($val['membership_no'])){
            $sheet->setCellValue('A' . $rows, $val['membership_no']);
            $sheet->setCellValue('B' . $rows, $val['app_date']);
            $sheet->setCellValue('C' . $rows, $val['app_no']);
            $sheet->setCellValue('D' . $rows, $val['applicant_name']);
	        $sheet->setCellValue('E' . $rows, 'VILL-'.$val['village'].', POST-'.$val['panchayat'].', WARD-'.$val['ward_no'].', POLICE STATION-'.$val['police_station'].', BLOCK-'.$val['block'].', DIST-'.$val['dist'].', STATE-'.$val['state'].', PIN-'.$val['pin_code']);
            $sheet->setCellValue('F' . $rows, $val['mobile_no']);
            $sheet->setCellValue('G' . $rows, $val['aadhar']);
            $sheet->setCellValue('H' . $rows, $val['super']);
            $sheet->setCellValue('I' . $rows, $val['year']);
            $rows++;
         }
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/excel/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."assets/excel/".$fileName); 
    }

    public function my_club_group_features(){
		if(!empty($_SESSION['member_id'])){
			$d['v'] = 'website/member_clubgroup';
		    $this->load->view('website/template_2',$d);
		}
		else{
			redirect('website/member_login');
		}
	}
	public function my_saving_account_features(){
		if(!empty($_SESSION['member_id'])){
			$d['v'] = 'website/member_saving_account';
		    $this->load->view('website/template_2',$d);
		}
		else{
			redirect('website/member_login');
		}
	}
	public function my_loan_account_features(){
		if(!empty($_SESSION['member_id'])){
			$d['v'] = 'website/loan_account';
		    $this->load->view('website/template_2',$d);
		}
		else{
			redirect('website/member_login');
		}
	}

	public function group_logout(){
		if(!empty($_SESSION['member_id'])){
			unset($_SESSION['member_id']);
			unset($_SESSION['last_id']);
			unset($_SESSION['member_name']);
			unset($_SESSION['group_id']);
			unset($_SESSION['group_name']);
			$this->load->helper('cookie');
  	    	delete_cookie('member_cookie');
  	    	delete_cookie('group_cookie');
	}
		if($this->session->user!==NULL){
      	  redirect('website/econtractdocx');
      	}
      	else{
      		redirect('/');
      	}
	}

	public function groupsignup_form_member(){
			$length = 5;
			$captcha=substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
			$d['captcha'] =$captcha;
			$d['state'] = $this->Website_model->get_statelist();
			$d['v'] = 'website/member_group_signup';
			$this->load->view('website/template_2',$d);
		}
		public function member_group_otp(){
			$d['v'] = 'website/member_groupmembership_otp';
			$this->load->view('website/template_2',$d);
		}
		public function member_groupsingup_create(){
			$data = $this->input->post();
			if($data['captcha']==$data['captcha_confirm']){
				// echo PRE;
				// print_r($data);die;
				$record= $this->Website_model->insert_group_head($data);
				if($record['varify']==true){
					// .....create otp area......
					$last_id = $record['last_id'];
					$last_ids['last_group'] = $last_id;
			        $this->session->set_userdata($last_ids);
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/member_group_otp');
				}
				else{ 
					$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/groupsignup_form');
	   		    }
			}
			else{ 
				$this->session->set_flashdata('err_msg','Captch not match!');
				redirect('website/groupsignup_form');
	   		}
		}

		public function member_group_reg_form(){
			$last_group_id = $_SESSION['last_group'];
			$d['group_records']= $this->Website_model->group_details($last_group_id);
			
			$d['v'] = 'website/member_group_registration_form';
			$this->load->view('website/template_2',$d);
		}

		public function member_groupdetails_insert(){
			// echo PRE;
			// print_r($_FILES);die;
			if(!empty($_FILES['photo']['name'][0])){
				$files['name']=$_FILES['photo']['name'];
				$files['type']=$_FILES['photo']['type'];
				$files['tmp_name']=$_FILES['photo']['tmp_name'];
				$files['error']=$_FILES['photo']['error'];
				$files['size']=$_FILES['photo']['size'];
				$file_count = count($files['name']);
				for ($j=0; $j < $file_count; $j++) { 
					$file = array('name'=>$files['name'][$j],'type'=>$files['type'][$j],'tmp_name'=>$files['tmp_name'][$j],'error'=>$files['error'][$j],'size'=>$files['size'][$j]);
					$final_files[]['photo']=$file;
				}
				foreach ($final_files as $key => $value) { 
					$photo1 = $value['photo']['name'];
					$photo1 = explode('.',$photo1);
					$image1= time().$photo1[0];
					$extension1 = $photo1[1];
					$imagename1 = $value['photo']['tmp_name'];
					$upload_path = './assets/uploads/groups/';	
					$allext=array("gif","jpg","jpeg","png","pdf","GIF","JPG","JPEG","PNG","PDF");
					if(!empty($value['photo']['name'])){
						$check1[] = upload_files($upload_path,'photo',$allext,"1800000","1800000",'100000000',$image1,$extension1);
						$images[]['image'] = $image1.".jpg";
					}
				}
			}
			$upload_path = './assets/uploads/groups/details/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  if($_FILES['professor_sign']['name'] !=''){
			  	$image = upload_file("professor_sign", $upload_path, $allowed_types, time());

				  if ($image !='') {
					  $img['professor_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['p_sign']['name'] !=''){
			  	$image = upload_file("p_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['p_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['s_sign']['name'] !=''){
			  	$image = upload_file("s_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['s_sign'] = $image['path'];
				  }
			  }
			  if($_FILES['t_sign']['name'] !=''){
			  	$image = upload_file("t_sign", $upload_path, $allowed_types, time());
				  if ($image !='') {
					  $img['t_sign'] = $image['path'];
				  }
			  }
			  $extraimagepath = json_encode($img);
			$data = $this->input->post();
			// echo PRE;
			// print_r($data);die;
			$group_signup_id = $data['group_signup_id'];
			$records['member_id'] = $data['member_id'];
			$records['member_name'] = $data['member_name'];
			$records['dob'] = $data['dob'];
			$records['father_name'] = $data['father_name'];
			$records['mobile'] = $data['mobile'];
			$records['aadhar_no'] = $data['aadhar_no'];
			$records['designation'] = $data['designation'];
			// ''''''json conversion total member''''''''
			$total_member['total_members_in_word']=$data['total_members_in_word'];
			$total_member['total_members_in_number']=$data['total_members_in_number'];
			$records['total_members'] = json_encode($total_member);
			// ''''''json conversion mendetory''''''''
			$mendetory['mendetory1'] = $data['mandatory1'];
			$mendetory['mendetory2'] = $data['mandatory2'];
			$mendetory['mandatory3'] = $data['mandatory3'];
			$mendetory['mandatory4'] = $data['mandatory4'];
			$mendetory['mandatory5'] = $data['mandatory5'];
			$records['mandatory'] = json_encode($mendetory);
			$count = count($records['member_id']);
			for ($i=0; $i < $count; $i++) { 
				$arr = array('member_id'=>$records['member_id'][$i],'member_name'=>$records['member_name'][$i],'dob'=>$records['dob'][$i],'father_name'=>$records['father_name'][$i],'mobile'=>$records['mobile'][$i],'aadhar_no'=>$records['aadhar_no'][$i],'designation'=>$records['designation'][$i],'total_members'=>$records['total_members'],'mandatory'=>$records['mandatory'],'images'=>$images[$i]['image'],'extra_img'=> $extraimagepath,'sign_up_id'=>$group_signup_id,'added_on'=>date('Y-m-d'));
				$final_array[]=$arr;
			}
			$result = $this->Website_model->insert_groupdetails($final_array);
			$rslt = json_decode($result,true);
			$submit_count = count($rslt);
			if($count==$submit_count){
				$this->session->set_flashdata('err_msg',$result['verify']);
					redirect('website/member_login_group');
			}
			else{
				redirect('website/member_group_reg_form');
			}
		}
		public function member_login_group(){
			
			$d['v'] = 'website/member_login_group';
			$this->load->view('website/template_2',$d);
		}

		public function member_check_grouplogin(){
		    $data = $this->input->post();
		    $record= $this->Website_model->group_login($data);
		    if($record['verify']==true){
		    	unset($_SESSION['member_id']);
				unset($_SESSION['last_id']);
				unset($_SESSION['member_name']);
				unset($_SESSION['group_id']);
				unset($_SESSION['group_name']);
				$this->load->helper('cookie');
      	    	delete_cookie('member_cookie');
      	    	delete_cookie('group_cookie');
		    	if(empty($_SESSION['group_id'])){
		    		$this->createsession_group($record);
					if(!empty($_SESSION['group_id'])){
						redirect('website/groupdashboard');
					}
					else{
						redirect('website/member_login_group');
					}

		    	}
			
		}
		else{ 
			$this->session->set_flashdata('err_msg',$record['verify']);
			redirect('website/member_login_group');
		}
	}


// ...................team close......................................
		
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



	public function adddivision(){
		$d['depart'] = $this->Website_model->get_departlist();
			$d['v'] = 'website/division';
			$this->load->view('website/template_1',$d);
	}
}
