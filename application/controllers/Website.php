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
		public function econtractdocx(){
			$d['v'] = 'website/econtractdocx';
			$this->load->view('website/template_1',$d);
		}
		public function econtractkyc(){
			$d['v'] = 'website/econtractkyc';
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
			$this->load->view('website/template',$d);
		}

		public function econtractform(){
			$d['v'] = 'website/econtractform';
			$this->load->view('website/template',$d);
		}

		public function create_signup(){
			$data = $this->input->post();

			$status['signupid'] = $this->Website_model->savesignup($data);
			$this->session->set_userdata($status);
			if($status){
				$this->session->set_flashdata("msg","Create Successfully !!");
				redirect('website/econtractform/');
		    }else{
				$this->session->set_flashdata("err_msg","Try Again !!");
				redirect('website/signup/');
		    }
		}

		public function create_officer_details(){
			$data = $this->input->post();
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
		  // echo PRE;
		  // print_r($data);die;
		$run=$this->Website_model->officer_details_model($data);
		if($run){
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
		$data['user_id']=md5($result['id']);
		$data['branch_no']=$result['branch_no'];
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
		print_r($postdata);
	}

	public function open_progress_report(){
		$d['v'] = 'website/open_progress';
			$this->load->view('website/template_1',$d);
	}

	// ................................Admin Panel Area.............................

	public function officer_details(){
		$data['title']="Home";
		$this->template->load('pages','home',$data);
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
