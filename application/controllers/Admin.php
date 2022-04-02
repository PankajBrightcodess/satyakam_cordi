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
	public function state(){
		$data['title']="State";
		$data['datatable'] = true;	
		$data['state'] = $this->Website_model->get_statelist($data);	
		// print_r($data['state']);die;
		$this->template->load('pages','state',$data);
	}

	public function savestate(){
		$data = $this->input->post();
		$result = $this->Website_model->add_state($data);
			if($result){
			$this->session->set_flashdata('msg','State Add Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/state');

	}

	public function update_state(){
		$data= $this->input->post();
		$result=$this->Website_model->updt_state($data);

		if($result){
			$this->session->set_flashdata('msg','State Updated Successfully');
		}else{
			$this->session->set_flashdata('err_msg','Something Error!');
		}
		redirect('admin/state');
	}
	public function delete_state(){
			$id = $this->input->get('id');
			$result = $this->Website_model->delete_states($id);
			if($result){
				$this->session->set_flashdata('msg','Department deleted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/department');

	}
	public function menu(){
		$data['title']="Menu";
		$data['datatable'] = true;	
		$data['menu'] = $this->Website_model->get_menulist($data);	
		// print_r($data['menu']);die;
		$this->template->load('pages','menu',$data);
	}

	public function savemenu(){
		$data = $this->input->post();
		$result = $this->Website_model->add_menu($data);
	
		if($result){
			$this->session->set_flashdata('msg','Menu Add Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/menu');
		
	} 
	public function update_menu(){
		  $data= $this->input->post();
		  $result=$this->Website_model->updt_menu($data);
			if($result){
				$this->session->set_flashdata('msg','Menu Updated Successfully');
			}else{
				$this->session->set_flashdata('err_msg','Something Error!');
			}
			redirect('admin/menu');

	}
	public function delete_menu(){
			$id = $this->input->get('id');
			$result = $this->Website_model->delete_menus($id);
			if($result){
				$this->session->set_flashdata('msg','Menu deleted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/menu');

	}

	public function submenu(){
		$data['title']="Sub Menu";
		$data['datatable'] = true;	
		$data['menu'] = $this->Website_model->get_menulist($data);	
		$data['submenu'] = $this->Website_model->get_submenulist_all();
		$this->template->load('pages','submenu',$data);
	}

	public function get_submenu_byid(){
		$id = $this->input->post();
		$data = $this->Website_model->get_menulist($id);
		print_r($data);

	}
	public function get_submenu_byides(){
		$id = $this->input->post('menu_id');
			$data = $this->Website_model->get_submenulist($id);

			if(!empty($data)){
				$html ='<option value="">---SELECT---</option>';
				foreach ($data as $key => $value) {
					$html.="<option value=".$value['id'].">".$value['submenu']."</option>";
				}
			}
			echo $html;
	}

	

	public function savesubmenu(){
		$data = $this->input->post();
		// echo PRE;
		// print_r($data);die;
		$result = $this->Website_model->add_submenu($data);
	
		if($result){
			$this->session->set_flashdata('msg','Submenu Add Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/submenu');
	}

public function update_submenu(){
		$data= $this->input->post();
		$result=$this->Website_model->updt_submenu($data);

		if($result){
			$this->session->set_flashdata("msg","Submenu Updated Successfully");
		}else{
			$this->Session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/submenu');
	} 

	public function delete_submenu(){
		$id = $this->input->get('id');
			$result = $this->Website_model->delete_submenus($id);
			if($result){
				$this->session->set_flashdata('msg','Submenu deleted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/submenu');
	}

	public function child_submenu(){
		$data['title']="Child Submenu";
		$data['datatable'] = true;	
		$data['menu'] = $this->Website_model->get_menulist($data);	
		$data['submenu'] = $this->Website_model->get_submenulist_all();
		$data['child_submenu_list'] = $this->Website_model->get_childsubmenulist($data);	
		$this->template->load('pages','child_submenu',$data);
	}

	public function savechildsubmenu(){
			$data = $this->input->post();
			$result = $this->Website_model->add_childsubmenu($data);
			if($result){
				$this->session->set_flashdata('msg','Add Child Submenu Add Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/child_submenu');
	}

	public function update_childsubmenu(){
		  $data = $this->input->post();
			$result = $this->Website_model->updt_childsubmenus($data);
			if($result){
				$this->session->set_flashdata('msg','Update Child Submenu Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/child_submenu');
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

	public function my_documents(){
		$data['title']="My Document (E-Contract)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','my_document',$data);
	}

	public function getpost(){
		$depart_id = $this->input->post();

		$data = $this->Website_model->get_postlistbyid($depart_id);

		$option="<select name='post_id' id='post_id' class='form-control' required>";
		$option.="<option value=''>--Select--</option>";
		foreach ($data  as $key => $value) {
			$option.="<option value='".$value['id']."'>".$value['post']."</option>";
		}
		$option.="</select>";
		print_r($option);
		// $results=json_encode($data);
		// echo $results;
	}

	public function mydocument_create()
	   {
		    $records =$this->input->post();
		    if(!empty($_FILES['office_quotation']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("office_quotation", $upload_path, $allowed_types, time());
        	print_r($result1);
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['office_quotation'] = $src1;
          }
		    }
		    if(!empty($_FILES['service_did']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("service_did", $upload_path, $allowed_types, time());
        	print_r($result2);
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['service_did'] = $src2;
          }
		    }
		    if(!empty($_FILES['service_book']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("service_book", $upload_path, $allowed_types, time());
        	print_r($result3);
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['service_book'] = $src3;
          }
		    }
		    if(!empty($_FILES['training_proc']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("training_proc", $upload_path, $allowed_types, time());
        	print_r($result4);
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['training_proc'] = $src4;
          }
		    }
		    if(!empty($_FILES['appointment_proc']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("appointment_proc", $upload_path, $allowed_types, time());
        	print_r($result5);
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['appointment_proc'] = $src5;
          }
		    }
		     if(!empty($_FILES['official_order']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("official_order", $upload_path, $allowed_types, time());
        	print_r($result6);
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['official_order'] = $src6;
          }
		    }
		    if(!empty($_FILES['ultimatum']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result7 = upload_file("ultimatum", $upload_path, $allowed_types, time());
        	print_r($result7);
		   	  $src7=$result7['path'];
       	  if(!empty($src7)){
            $data['ultimatum'] = $src7;
          }
		    }
		    if(!empty($_FILES['transfer_proc']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result8 = upload_file("transfer_proc", $upload_path, $allowed_types, time());
        	print_r($result8);
		   	  $src8=$result8['path'];
       	  if(!empty($src8)){
            $data['transfer_proc'] = $src8;
          }
		    }
		    if(!empty($_FILES['promotion_proc']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result9 = upload_file("promotion_proc", $upload_path, $allowed_types, time());
        	print_r($result9);
		   	  $src9=$result9['path'];
       	  if(!empty($src9)){
            $data['promotion_proc'] = $src9;
          }
		    }
		    if(!empty($_FILES['security_fund_rec']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result10 = upload_file("security_fund_rec", $upload_path, $allowed_types, time());
        	print_r($result10);
		   	  $src10=$result10['path'];
       	  if(!empty($src10)){
            $data['security_fund_rec'] = $src10;
          }
		    }
		    if(!empty($_FILES['my_pf']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/';
        	$allowed_types = 'pdf';
        	$result11 = upload_file("my_pf", $upload_path, $allowed_types, time());
        	print_r($result11);
		   	  $src11=$result11['path'];
       	  if(!empty($src11)){
            $data['my_pf'] = $src11;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   $result = $this->Website_model->add_mydocument($data);
		   if($result){
			$this->session->set_flashdata('msg','My Document Inserted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/my_documents');
	}

	 public function ec_myteamoffice(){
		$data['title']="My Team Office (E-Contract)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','my_team_office',$data);
	}


	public function my_office_create(){
		$records =$this->input->post();
		// echo PRE;
		// print_r($_FILES);die;
		    if(!empty($_FILES['e_contract_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("e_contract_status", $upload_path, $allowed_types, time());
        	print_r($result1);
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['e_contract_status'] = $src1;
          }
		    }
		    if(!empty($_FILES['service_did_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("service_did_status", $upload_path, $allowed_types, time());
        	print_r($result2);
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['service_did_status'] = $src2;
          }
		    }
		    if(!empty($_FILES['service_book_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("service_book_status", $upload_path, $allowed_types, time());
        	print_r($result3);
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['service_book_status'] = $src3;
          }
		    }
		    if(!empty($_FILES['training_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("training_status", $upload_path, $allowed_types, time());
        	print_r($result4);
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['training_status'] = $src4;
          }
		    }
		    if(!empty($_FILES['appointment_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("appointment_status", $upload_path, $allowed_types, time());
        	print_r($result5);
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['appointment_status'] = $src5;
          }
		    }
		     if(!empty($_FILES['order_status']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("order_status", $upload_path, $allowed_types, time());
        	print_r($result6);
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['order_status'] = $src6;
          }
		    }
		    if(!empty($_FILES['ultimatum_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result7 = upload_file("ultimatum_status", $upload_path, $allowed_types, time());
        	print_r($result7);
		   	  $src7=$result7['path'];
       	  if(!empty($src7)){
            $data['ultimatum_status'] = $src7;
          }
		    }
		    if(!empty($_FILES['transfer_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result8 = upload_file("transfer_status", $upload_path, $allowed_types, time());
        	print_r($result8);
		   	  $src8=$result8['path'];
       	  if(!empty($src8)){
            $data['transfer_status'] = $src8;
          }
		    }
		    if(!empty($_FILES['promotion_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result9 = upload_file("promotion_status", $upload_path, $allowed_types, time());
        	print_r($result9);
		   	  $src9=$result9['path'];
       	  if(!empty($src9)){
            $data['promotion_status'] = $src9;
          }
		    }
		    if(!empty($_FILES['security_fund_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result10 = upload_file("security_fund_status", $upload_path, $allowed_types, time());
        	print_r($result10);
		   	  $src10=$result10['path'];
       	  if(!empty($src10)){
            $data['security_fund_status'] = $src10;
          }
		    }
		    if(!empty($_FILES['my_pf_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_office/';
        	$allowed_types = 'pdf';
        	$result11 = upload_file("my_pf_status", $upload_path, $allowed_types, time());
        	print_r($result11);
		   	  $src11=$result11['path'];
       	  if(!empty($src11)){
            $data['my_pf_status'] = $src11;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   $result = $this->Website_model->add_myoffice($data);
		   if($result){
			$this->session->set_flashdata('msg','My Office Inserted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/ec_myteamoffice');
	}

	 public function my_report(){
		$data['title']="My Report(My Office)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','my_report',$data);
	}

	public function add_my_report(){
			$records =$this->input->post();
		    if(!empty($_FILES['progress_report']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("progress_report", $upload_path, $allowed_types, time());
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['progress_report'] = $src1;
          }
		    }
		    if(!empty($_FILES['monthly_progress']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("monthly_progress", $upload_path, $allowed_types, time());
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['monthly_progress'] = $src2;
          }
		    }
		    if(!empty($_FILES['annual_progress']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("annual_progress", $upload_path, $allowed_types, time());
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['annual_progress'] = $src3;
          }
		    }
		    if(!empty($_FILES['honorarium_slip']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("honorarium_slip", $upload_path, $allowed_types, time());
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['honorarium_slip'] = $src4;
          }
		    }
		    if(!empty($_FILES['house_found']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("house_found", $upload_path, $allowed_types, time());
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['house_found'] = $src5;
          }
		    }
		     if(!empty($_FILES['emergency_leave']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_report/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("emergency_leave", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['emergency_leave'] = $src6;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   $result = $this->Website_model->add_myreport($data);
		   if($result){
			$this->session->set_flashdata('msg','My Office Inserted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/my_report');
	}

	public function office_expense(){
		$data['title']=" Office Expense(My Office)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','office_expense',$data);
	}

	public function add_office_epense(){
		  $records =$this->input->post();
			if(!empty($_FILES['office_rent']['name'])){
		    	$upload_path = './assets/admin_upload/my_expense/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("office_rent", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['office_rent'] = $src6;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   $result = $this->Website_model->add_office_expense($data);
		   if($result){
			$this->session->set_flashdata('msg','Office Rent Added Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/office_expense');
	}

	public function myteamoffice(){
		$data['title']=" My Team Office(My Office)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','office_team_status',$data);
	}

	public function add_myteamoffice(){
		$records =$this->input->post();
		    if(!empty($_FILES['daily_progress_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("daily_progress_status", $upload_path, $allowed_types, time());
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['daily_progress_status'] = $src1;
          }
		    }
		    if(!empty($_FILES['monthly_progress_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("monthly_progress_status", $upload_path, $allowed_types, time());
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['monthly_progress_status'] = $src2;
          }
		    }
		    if(!empty($_FILES['annual_progress_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("annual_progress_status", $upload_path, $allowed_types, time());
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['annual_progress_status'] = $src3;
          }
		    }
		    if(!empty($_FILES['house_fund_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("house_fund_status", $upload_path, $allowed_types, time());
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['house_fund_status'] = $src4;
          }
		    }
		    if(!empty($_FILES['leave_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("leave_status", $upload_path, $allowed_types, time());
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['leave_status'] = $src5;
          }
		    }
		     if(!empty($_FILES['office_rent_status']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("office_rent_status", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['office_rent_status'] = $src6;
          }
		    }
		    if(!empty($_FILES['daily_expense_status']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/my_team_office/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("daily_expense_status", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['daily_expense_status'] = $src6;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   $result = $this->Website_model->add_myteamoffice_model($data);
		   if($result){
			$this->session->set_flashdata('msg','My Office Inserted Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/myteamoffice');
	}

	public function general_group(){
		$data['title']=" General Group(Ajeevika)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','generalgroup',$data);

	}

	public function add_generalgroup(){
		// echo PRE;
		// print_r($_FILES);die;
		$records = $this->input->post();
		if(!empty($_FILES['registered_group_list']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("registered_group_list", $upload_path, $allowed_types, time());
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['registered_group_list'] = $src1;
          }
		    }
		    if(!empty($_FILES['new_group_creative']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("new_group_creative", $upload_path, $allowed_types, time());
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['new_group_creative'] = $src2;
          }
		    }
		    if(!empty($_FILES['group_saving_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("group_saving_status", $upload_path, $allowed_types, time());
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['group_saving_status'] = $src3;
          }
		    }
		    if(!empty($_FILES['banking']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("banking", $upload_path, $allowed_types, time());
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['banking'] = $src4;
          }
		    }
		    if(!empty($_FILES['e_received']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("e_received", $upload_path, $allowed_types, time());
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['e_received'] = $src5;
          }
		    }
		     if(!empty($_FILES['group_loan_status']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("group_loan_status", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['group_loan_status'] = $src6;
          }
		    }
		    if(!empty($_FILES['emi_banking']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("emi_banking", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['emi_banking'] = $src6;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   	$result = $this->Website_model->create_generalgroup($data);
		   	if($result){
				$this->session->set_flashdata('msg','My Office Inserted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/myteamoffice');
	}

	public function club_group(){
		$data['title']="My Club Group(Ajeevika)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','my_clubgroup',$data);

	}

	public function add_myclubgroup(){
		// echo PRE;
		// print_r($_POST);
		// print_r($_FILES);die;
		$records = $this->input->post();
		if(!empty($_FILES['registered_group_list']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result1 = upload_file("registered_group_list", $upload_path, $allowed_types, time());
;		   	  $src1=$result1['path'];
       	  if(!empty($src1)){
            $data['registered_group_list'] = $src1;
          }
		    }
		    if(!empty($_FILES['new_group_creative']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result2 = upload_file("new_group_creative", $upload_path, $allowed_types, time());
		   	  $src2=$result2['path'];
       	  if(!empty($src2)){
            $data['new_group_creative'] = $src2;
          }
		    }
		    if(!empty($_FILES['group_saving_status']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result3 = upload_file("group_saving_status", $upload_path, $allowed_types, time());
		   	  $src3=$result3['path'];
       	  if(!empty($src3)){
            $data['group_saving_status'] = $src3;
          }
		    }
		    if(!empty($_FILES['banking']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result4 = upload_file("banking", $upload_path, $allowed_types, time());
		   	  $src4=$result4['path'];
       	  if(!empty($src4)){
            $data['banking'] = $src4;
          }
		    }
		    if(!empty($_FILES['e_received']['name'])){
		    	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result5 = upload_file("e_received", $upload_path, $allowed_types, time());
		   	  $src5=$result5['path'];
       	  if(!empty($src5)){
            $data['e_received'] = $src5;
          }
		    }
		     if(!empty($_FILES['group_loan_status']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("group_loan_status", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['group_loan_status'] = $src6;
          }
		    }
		    if(!empty($_FILES['emi_banking']['name'])){
		     	// $this->load->helper('upload');
		    	$upload_path = './assets/admin_upload/ajeevika/club_group/';
        	$allowed_types = 'pdf';
        	$result6 = upload_file("emi_banking", $upload_path, $allowed_types, time());
		   	  $src6=$result6['path'];
       	  if(!empty($src6)){
            $data['emi_banking'] = $src6;
          }
		    }
		    $data['depart_id'] = $records['depart_id'];
		    $data['posts'] = $records['posts'];
		   	$result = $this->Website_model->create_clubgroup($data);
		   	if($result){
				$this->session->set_flashdata('msg','My Office Inserted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/club_group');
	}




// '''''''''''''''''''''''''''''''''''''''''''Vecency'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
	public function vecency(){
		$data['title']=" Office Vecency";
		$data['datatable'] = true;
		$data['state'] = $this->Website_model->get_statelist($data);	
		$data['vacencylist'] = $this->Website_model->list_vecency();
		// echo PRE;	
		// print_r($data['vacencylist']);die;
		// $data['post'] = $this->Website_model->get_postlist($data);
		$this->template->load('pages','vecency',$data);
	}

	public function addvecency(){
		$data = $this->input->post();
		$result = $this->Website_model->add_vecency($data);
		   if($result){
			$this->session->set_flashdata('msg','Office Vecency Added Successfully');
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/vecency');

	}

	public function updatevecency(){
		$data = $this->input->post();
		$run = $this->Website_model->update_vecency($data);
		if($run){
			
			$this->session->set_flashdata("msg","Vecency Updated!!");
		}else{
			$this->session->set_flashdata("err_msg","Something Error!");
		}
		redirect('admin/vecency');

	}

	public function deletevecency(){
			$id = $this->input->get('id');
			$result = $this->Website_model->delete_vecency($id);
			if($result){
				$this->session->set_flashdata('msg','Vecency deleted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
			redirect('admin/vecency');
	}














}