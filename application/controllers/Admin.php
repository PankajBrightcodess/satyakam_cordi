<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	public function officer_details(){
		checklogin();
		$data['title']="Office Member";
		$data['datatable'] = true;	
		$data['officer']= $this->Website_model->getofficerdetails();
		// echo PRE;
		// print_r($data['officer']);die;
		$this->template->load('pages','office_member',$data);
	}
	public function update_userpass(){
		$data = $this->input->post();
		$id = $data['id'];
		// print_r($id);die;
		$run = $this->Website_model->update_officerrecords($data);
		// print_r($run);die;
		if($run){
			$this->send_mail($id);
			redirect('admin/officer_details');
			$this->session->set_flashdata("msg","Userid And Password Updated!!");
		}else{
			$this->session->set_flashdata("err_msg","Userid Already Avaliable");
			redirect('admin/officer_details');
		}

	}
	public function send_mail($id){
		$this->load->helper('email');
		$run=$this->Website_model->get_idpass($id);
		$from_email = "indiaskfoundation468@gmail.com"; 
         $to_email = $run['email_id']; 
         $username = $run['username']; 
         $password = $run['username']; 
         $subject = 'Document Verification';
         $message = 'Your Document is Verified.<br>UserId :'.$username.'<br>Password :'.$password;
   		 $send= sendemail($to_email,$subject,$message);
         //Send mail 
         if($send) {
           $this->session->set_flashdata("msg","Email sent successfully."); 
         }
         else {
           $this->session->set_flashdata("err_msg","Error in sending Email."); 
         }
         redirect('admin/officer_details'); 
	}
	public function department(){
		$data['title']="Department";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$this->template->load('pages','department',$data);

	}
	public function savedepart(){
		$data = $this->input->post();
		$result = $this->Website_model->add_depart($data);
	
		if($result){
			$this->session->set_flashdata('msg','Department Add Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/department');
	}

	public function delete_depart(){
		$id = $this->input->get('id');
		$result = $this->Website_model->delete_department($id);
		if($result){
			$this->session->set_flashdata('msg','Department deleted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/department');
	}
	public function update_department(){
		$data= $this->input->post();
		$result=$this->Website_model->updt_depart($data);

		if($result){
			$this->session->set_flashdata("msg","Department Updated Successfully");
		}else{
			$this->Session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/department');
	}

	public function post_details(){
		$data['title']="Post";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		// echo PRE;
		// print_r($data['post']);die;
		$this->template->load('pages','depart_post',$data);
	}
	public function savepost(){
		$data = $this->input->post();
		$result = $this->Website_model->add_post($data);
		if($result){
			$this->session->set_flashdata("msg","Post Add Successfully");
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/post_details');
	}
	public function delete_post(){
		$id = $this->input->get('id');
		$result = $this->Website_model->delete_post($id);
		if($result){
			$this->session->set_flashdata('msg','Post Deleted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/department');
	}

	public function update_post(){
		$data= $this->input->post();

		$result=$this->Website_model->updt_post($data);
		if($result){
			$this->session->set_flashdata("msg","Department Updated Successfully");
		}else{
			$this->Session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/post_details');
	}
}