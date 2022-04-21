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
		public function myofficemyteam(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/myofficemyteam';
			$this->load->view('website/template_1',$d);
		}

		public function ajeevikageneralgrp(){
			$id = $_SESSION['user_id'];
			$record= $this->Website_model->getuser($id);
			$finalrecord = $record[0];
			$d['records']= $this->Website_model->getmenudetailsbyid($finalrecord);
			$d['v'] = 'website/ajeevikageneralgrp';
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
		$fileName = 'group_month.xlsx';
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
}
