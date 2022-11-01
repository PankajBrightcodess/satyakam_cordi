<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

		public function adddivision(){
		checklogin();
		$data['title']="Division";
		$data['datatable'] = true;	
			$data['state'] = $this->Website_model->get_statelist($data);	
		$this->template->load('pages','addivision',$data);
	}

	public function savedivision(){
		$data = $this->input->post();
		$result = $this->Website_model->insert_division($data);	
		if($result){
			redirect('admin/adddivision');
			$this->session->set_flashdata("msg","Division Add!!");
		}else{
			$this->session->set_flashdata("err_msg","Something Error!!");
			redirect('admin/adddivision');
		}
	}
	
	public function officer_details(){
		checklogin();
		$data['title']="Office Member";
		$data['datatable'] = true;	
		$data['officer']= $this->Website_model->getofficerdetails();
		$this->template->load('pages','office_member',$data);
	}

	public function update_officer(){
		$id = $this->input->get('id');
		$data['title']="Office Member";
		$data['officer']= $this->Website_model->get_officerdetails_for_update($id);
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_post_list();
		// print_r($data['post']);die;
		$this->template->load('pages','office_member_update',$data);

	}

	public function update_officerdetails(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/team/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
			  if(!empty($_FILES['image']['name'])){
			  			
				  $image = upload_file("image", $upload_path, $allowed_types, time().'img');
				  if ($image !='') {
					  $data['image'] = $image['path'];
				  }
			  }
			  if(!empty($_FILES['signature']['name'])){
				  $image = upload_file("signature", $upload_path, $allowed_types, time().'sig');
				  if ($image !='') {
					  $data['signature'] = $image['path'];
				  }
			  }
			  if(!empty($_FILES['aadhar']['name'])){
				  $image = upload_file("aadhar", $upload_path, $allowed_types, time().'aad');
				  if ($image !='') {
					  $data['aadhar'] = $image['path'];
				  }
			  }
			   if(!empty($_FILES['pan']['name'])){
				  $image = upload_file("pan", $upload_path, $allowed_types, time().'pan');
				  if ($image !='') {
					  $data['pan'] = $image['path'];
				  }
			  }
			   if(!empty($_FILES['bank_account']['name'])){
				  $image = upload_file("bank_account", $upload_path, $allowed_types, time().'ban');
				  if ($image !='') {
					  $data['bank_account'] = $image['path'];
				  }
			  }
		  	  if(!empty($_FILES['security_e_receipt']['name'])){
				  $image = upload_file("security_e_receipt", $upload_path, $allowed_types, time().'sec');
				  if ($image !='') {
					  $data['security_e_receipt'] = $image['path'];
				  }
			  }
			  if(!empty($_FILES['processing_receipt']['name'])){
				  $image = upload_file("processing_receipt", $upload_path, $allowed_types, time().'pro');
				  if ($image !='') {
					  $data['processing_receipt'] = $image['path'];
				  }
			  }
			   if(!empty($_FILES['training_receipt']['name'])){
				  $image = upload_file("training_receipt", $upload_path, $allowed_types, time().'tra');
				  if ($image !='') {
					  $data['training_receipt'] = $image['path'];
				  }
			  }
	
		$res = $this->Website_model->update_officerdetails($data);
		if($res==true){
			$this->session->set_flashdata("msg","Update Officer Details");
		}else{
			$this->session->set_flashdata("err_msg","Something Error");
		}
		redirect('admin/officer_details');
	}





	public function update_userpass(){
		$data = $this->input->post();
		$id = $data['id'];
		// print_r($id);die;
		$run = $this->Website_model->update_officerrecords($data);
		// print_r($run);die;
		if($run){
			$this->send_mail($id);
			die;
			redirect('admin/officer_details');
			$this->session->set_flashdata("msg","Userid And Password Updated!!");
		}else{
			$this->session->set_flashdata("err_msg","Userid Already Avaliable");
			redirect('admin/officer_details');
		}

	}
	public function send_mail($id){
		// $this->load->helper('email');
		$run=$this->Website_model->get_idpass($id);
		if(!empty($run)){
					$contact_no = $run['mobile_no'];
					$user = $run['username'];
					$pass = $run['password'];
					$message= 'Congratulations! Your all details has been verified, everything is clear, we provide username '.$user.' and Password '.$pass.' SATYAKAM FOUNDATION';

		   			 $base_url = "http://msg.icloudsms.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=d86d79b187995b8785fce5a58023ab34";
		    		$senderId = "SKFOUN";
		    		$routeId = "1";
		    		if(!empty($contact_no)){
		      			$curl = curl_init();
		      			curl_setopt_array($curl, array(
		       		    CURLOPT_URL => $base_url,
		        		CURLOPT_RETURNTRANSFER => true,
		        		CURLOPT_ENCODING => "",
		        		CURLOPT_MAXREDIRS => 10,
		        		CURLOPT_TIMEOUT => 30,
		        		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		        		CURLOPT_CUSTOMREQUEST => "POST",
		        		CURLOPT_POSTFIELDS => "{\"smsContent\":\"$message\",\"routeId\":\"$routeId\",\"mobileNumbers\":\"$contact_no\",\"senderId\":\"$senderId\",\"signature\":\"signature\",\"smsContentType\":\"english\"}",
		        		CURLOPT_HTTPHEADER => array(
		        			"Cache-Control: no-cache",
		        			"Content-Type: application/json"
		        		),
		      			));
			      	$response = curl_exec($curl);
			        $err = curl_error($curl);
			      	curl_close($curl);
			      	if($err){
			        	// return false;
			        	$this->session->set_flashdata('err_msg','Something Error!');
			        	redirect('admin/officer_details');
			      	}else{
			      		if($response==true){
			      			$this->session->set_flashdata('msg','Successfully Forword username and Password on register Mobile No.');
			      			redirect('admin/officer_details');
			      		}else{
			      			$this->session->set_flashdata('err_msg','Something Error');
			      			redirect('admin/officer_details');
			      		}
			      	}
			    // }
				}

		// $from_email = "indiaskfoundation468@gmail.com"; 
  //        $to_email = $run['email_id']; 
  //        $username = $run['username']; 
  //        $password = $run['username']; 
  //        $subject = 'Document Verification';
  //        $message = 'Your Document is Verified.<br>UserId :'.$username.'<br>Password :'.$password;
  //  		 $send= sendemail($to_email,$subject,$message);
  //  		  if($send) {
  //          $this->session->set_flashdata("msg","Email sent successfully."); 
  //        }
  //        else {
  //          $this->session->set_flashdata("err_msg","Error in sending Email."); 
  //        }
  //        redirect('admin/officer_details'); 
	}
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
		$depart_id = $this->input->post('depart_id');
		$data['title']="Daily Activity Report(My Office)";
		$data['datatable'] = true;
		$data['officer_list']= $this->Website_model->get_officer_list_for_myofficedetails($depart_id);

		$this->template->load('pages','my_report',$data);
	}
	public function my_report_team(){
		// echo PRE;
		$depart_id = $this->input->post('depart_id');
		// print_r($_POST);die;
		$data['title']="Daily Activity Report(My Office)";
		$data['datatable'] = true;	
		// $data['depart'] = $this->Website_model->get_departlist($data);	
		// $data['post'] = $this->Website_model->get_postlist($data);
		$data['officer_list']= $this->Website_model->get_officer_list_for_myofficedetails($depart_id);

		$this->template->load('pages','my_report_team',$data);
	}

	public function daily_report_list(){
		$user_id = $this->input->get();
		$data['user_id'] = $user_id;
		$data['revenue'] = $this->Website_model->revenuelist($user_id);
		$data['security'] = $this->Website_model->securitylist($user_id);
		$data['group'] = $this->Website_model->grouplist($user_id);
		$data['club'] = $this->Website_model->clublist($user_id);
		$data['travelling'] = $this->Website_model->travellinglist($user_id);

		if(!empty($data['revenue'])||!empty($data['security'])||!empty($data['group'])||!empty($data['club'])||!empty($data['travelling'])){
			$data['title']="Daily Activity Report List ";
			$data['datatable'] = true;	
			$data['depart'] = $this->Website_model->get_departlist($data);	
			$data['post'] = $this->Website_model->get_postlist($data);
			$this->template->load('pages','daily_report_list',$data);
		}
		else{ 
		$this->session->set_flashdata("err_msg","Opps No Such Data!");
			$this->my_report();
		}
	}

	public function reportlist_mymonth(){
			$data = $this->input->post();
			$user_id['id'] = $data['id'];
			$month = $data['month'];
		  $revenuelist = $this->Website_model->revenuelistbymonth($user_id,$month);
		$securitylist = $this->Website_model->securitylistbymonth($user_id,$month);
		$grouplist = $this->Website_model->grouplistbymonth($user_id,$month);
		$clublist = $this->Website_model->clublistbymonth($user_id,$month);
		$travellinglist = $this->Website_model->travellinglistbymonth($user_id,$month);
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
    $alldata['first'] = $html;
    $alldata['second'] = $html1;
    $alldata['third'] = $html2;
    $alldata['forth'] = $html3;
    $alldata['fifth'] = $html4;
    $results = json_encode($alldata);
    echo $results;
	}



	public function reportlist_year(){
		$data = $this->input->post();
			$user_id['id'] = $data['id'];
			$year = $data['year'];
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
    $alldata['first'] = $html;
    $alldata['second'] = $html1;
    $alldata['third'] = $html2;
    $alldata['forth'] = $html3;
    $alldata['fifth'] = $html4;
    $results = json_encode($alldata);
    echo $results;
		
	}
// '''''''''delete officer'''''''''''''

	public function delete_officer(){
		$id = $this->uri->segment(3);
				$result = $this->Website_model->deleted_officer($id);
		   if($result){
			$this->session->set_flashdata('msg','Deleted Successfully');
			}else{
				$this->session->set_flashdata("err_msg","Something Error!");
			}
		redirect('admin/officer_details');
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
		// $data['datatable'] = true;
		$depart_id = $this->input->post();
		$data['expense_list'] = $this->Website_model->get_expenselist($depart_id);
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

	public function member_list(){
		$data['title']=" Member List (Ajeevika)";
		$data['datatable'] = true;	
		$data['depart'] = $this->Website_model->get_departlist($data);	
		$data['post'] = $this->Website_model->get_postlist($data);
		$data['members']= $this->Website_model->get_memberlist_for_admin();
		$this->template->load('pages','memberlist',$data);
	}

	public function membership_certificate(){
		$id = $this->uri->segment(3);
	  $data['certificate'] = $this->Website_model->get_certificatelist($id);
	  // $data['certificate_list']=$this->Website_model->get_list()
		$data['title']=" Membership Certificate";
		$data['datatable'] = true;	
		$this->template->load('pages','membership_certificate',$data);
	}


	public function save_certificate(){
			$data = $this->input->post();
			$photo = $this->input->post('image');
			$result = $this->Website_model->create_member_certificate($data);
			$pdf = $this->customfpdf->getInstance();
     	$pdf->AliasNbPages();
     	$pdf->AddPage();
      $pdf->Header('Arial');
     	$pdf->SetFont('Times','',25);
     	$image="assets/images/logo1.jpg";
     	$pdf->Image(base_url($image), 5, $pdf->GetY(), 23.78);
     	$image1="assets/images/logo4.jpg";
     	$pdf->Image(base_url($image1), 30, $pdf->GetY(), 23.78);
     	$image2="assets/images/logo5.jpeg";
     	$pdf->Image(base_url($image2), 60, $pdf->GetY(), 83.78);
     	$image1="assets/images/logo2.jpg";
     	$pdf->Image(base_url($image1), 148, $pdf->GetY(), 23.78);
    	$image1="assets/images/logo3.jpg";
    	$pdf->Image(base_url($image1), 173, $pdf->GetY(), 33.78);
     	$pdf->SetFont('Arial','B',15);
     	$pdf->Cell(0,30,'',0,1,'C');
     	$pdf->Cell(0,0,'',1,1,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'DIVISION  :'.$result['division'],1,0,'L');
     	$pdf->Cell(63,5,'DISTRICT  :'.$result['dist'],1,0,'L');
     	$pdf->Image(base_url($photo), 153, $pdf->GetY(), 21.78);
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'',0,1,'L');
     	$pdf->Cell(126,5,'SPONSOR ID NO.  :'.$result['sponser_id'],1,0,'L');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'',0,1,'L');
     	$pdf->Cell(126,5,'NAME OF MEMBER  :'.$result['member_name'],1,0,'L');
     	$pdf->Cell(63,5,'',0,1,'C');
     	$pdf->Cell(126,5,'FATHER/HUSBAND NAME  :'.$result['father_name'],1,0,'L');
     	$pdf->Cell(63,5,'',0,1,'L');
     	$pdf->Cell(63,5,'EMAIL  :'.$result['email'],1,0,'L');
     	$pdf->Cell(63,5,'MOBILE NO.  :'.$result['mobile'],1,0,'L');
     	$pdf->Cell(63,5,'',0,1,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,9,'PROVISONAL ADDRESS',1,1,'C');
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(94,5,'SAVING PLAN NUMBERS :'.$result['saving_plan_no'],1,0,'L');
     	$pdf->Cell(95,5,'TERM YEARS  :'.$result['term_years'],1,1,'L');
     	$pdf->Cell(94,5,'NUMINEE :'.$result['numinee_name'],1,0,'L');
     	$pdf->Cell(95,5,'RELATION  :'.$result['numinee_relation'],1,1,'L');
     	$pdf->Cell(94,5,'AGE :'.$result['numinee_age'],1,0,'L');
     	$pdf->Cell(95,5,'AADHAR NO. :'.$result['numinee_age'],1,1,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,10,'INSTRUCTION',0,1,'C');
      $pdf->SetFont('Arial','I',9);
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(189,5,'CERTIFIED THAT THE PERSON MENTIONED IN THE TABLE WANTS MEMBERSHIP AFTER UNDERSTANDING ALL THE RULES AND ',0,1,'C');
      $pdf->Cell(189,5,'INSTRUCTIONS OF THE GROUP. AFTER MATCHING ALL THE DOCUMENTS. I ISSUE THIS MEMBERSHIP CERTIFICATE.',0,1,'C');
      $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,10,'',0,1,'L');
      $pdf->SetFont('Arial','',9);
      $pdf->SetFont('Arial','',9);
     	$pdf->Cell(189,30,'',0,1,'L');
     $pdf->Cell(94,5,'',0,0,'L');
     $pdf->Cell(95,5,'AUTHORISED SIGNATURE',0,1,'R');
     $pdf->Cell(94,5,'',0,0,'L');
     $pdf->SetFont('Arial','B',9);
     $pdf->Cell(95,5,'GROUP CREATIVE DEPARTMENT',0,1,'R');
      $pdf->Cell(189,30,'',0,1,'L');
      $pdf->Cell(189,30,'',0,1,'L');
      $pdf->Cell(189,25,'',0,1,'L');
      // $pdf->Cell(94,5,'',0,0,'L');
     $pdf->Cell(189,5,'CONTROL OFFICE',0,1,'C');
     $pdf->Cell(189,10,'',0,1,'C');
     $pdf->Cell(189,5,'Near Railway Station, Malgodam Road Suraj Ganj Ward No. 18 Madhubani(Bihar)847211',0,1,'C');
     $pdf->Cell(189,5,'EMAIL : INDIASKFOUNDATION468@GMAIL.COM | WEBSITE : INDIASATYAKAM.COM',0,1,'C');
    $file =  date('Ymdhis').'_details.pdf';
    $pdf->Output($file,'I');
	}
// 	public function add_generalgroup(){
// 		$records = $this->input->post();
// 		if(!empty($_FILES['registered_group_list']['name'])){
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result1 = upload_file("registered_group_list", $upload_path, $allowed_types, time());
// ;		   	  $src1=$result1['path'];
//        	  if(!empty($src1)){
//             $data['registered_group_list'] = $src1;
//           }
// 		    }
// 		    if(!empty($_FILES['new_group_creative']['name'])){
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result2 = upload_file("new_group_creative", $upload_path, $allowed_types, time());
// 		   	  $src2=$result2['path'];
//        	  if(!empty($src2)){
//             $data['new_group_creative'] = $src2;
//           }
// 		    }
// 		    if(!empty($_FILES['group_saving_status']['name'])){
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result3 = upload_file("group_saving_status", $upload_path, $allowed_types, time());
// 		   	  $src3=$result3['path'];
//        	  if(!empty($src3)){
//             $data['group_saving_status'] = $src3;
//           }
// 		    }
// 		    if(!empty($_FILES['banking']['name'])){
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result4 = upload_file("banking", $upload_path, $allowed_types, time());
// 		   	  $src4=$result4['path'];
//        	  if(!empty($src4)){
//             $data['banking'] = $src4;
//           }
// 		    }
// 		    if(!empty($_FILES['e_received']['name'])){
// 		    	// $this->load->helper('upload');
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result5 = upload_file("e_received", $upload_path, $allowed_types, time());
// 		   	  $src5=$result5['path'];
//        	  if(!empty($src5)){
//             $data['e_received'] = $src5;
//           }
// 		    }
// 		     if(!empty($_FILES['group_loan_status']['name'])){
// 		     	// $this->load->helper('upload');
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result6 = upload_file("group_loan_status", $upload_path, $allowed_types, time());
// 		   	  $src6=$result6['path'];
//        	  if(!empty($src6)){
//             $data['group_loan_status'] = $src6;
//           }
// 		    }
// 		    if(!empty($_FILES['emi_banking']['name'])){
// 		     	// $this->load->helper('upload');
// 		    	$upload_path = './assets/admin_upload/ajeevika/general_group/';
//         	$allowed_types = 'pdf';
//         	$result6 = upload_file("emi_banking", $upload_path, $allowed_types, time());
// 		   	  $src6=$result6['path'];
//        	  if(!empty($src6)){
//             $data['emi_banking'] = $src6;
//           }
// 		    }
// 		    $data['depart_id'] = $records['depart_id'];
// 		    $data['posts'] = $records['posts'];
// 		   	$result = $this->Website_model->create_generalgroup($data);
// 		   	if($result){
// 				$this->session->set_flashdata('msg','My Office Inserted Successfully');
// 			}else{
// 				$this->session->set_flashdata("err_msg","Something Error!");
// 			}
// 			redirect('admin/myteamoffice');
// 	}

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


	public function permission(){
		$data['title']="Permission";
		$data['datatable'] = true;	
		$data['state'] = $this->Website_model->get_statelist($data);
		$data['depart'] = $this->Website_model->get_alldepartpostlist();
		$this->template->load('pages','permission',$data);
	}

	public function insert_data(){
		$data = $this->input->post();
				$result = $this->Website_model->permissiongenerate($data);
				print_r($result);die;
	}

	public function permissionlist(){
		$data['title']="Permission";
		$data['datatable'] = true;	
		$data['state'] = $this->Website_model->get_statelist($data);
		$data['depart'] = $this->Website_model->get_alldepartpostlist();
		$this->template->load('pages','permissionlist',$data);
	}

	public function menucontrollist(){
		$data = $this->input->post();
		$result = $this->Website_model->get_menucontrollist($data);
		$html ='<table class="table data-table stripe hover nowrap table-bordered">';
        $html.='<thead>';
          $html.='<tr>';    
            $html.='<th>Sl No.</th>';
            $html.='<th>Department</th>';
            $html.='<th>Post</th>';              
            $html.='<th>E-Contract</th>';                
            $html.='<th>My Office</th>';                                           
            $html.='<th>My Project</th>';                                            
            $html.='<th>Vecency</th>';                                            
            $html.='<th>Events</th>';                                            
            $html.='<th>Gallery</th>';                                            
            $html.='<th>Action</th>';                                            
            $html.='</tr>';
            $html.='</thead>';

		if(!empty($result)){
			$i=0;
			foreach ($result as $key => $val) {$i++;
				
						$html.= '<tr>';
				    $html.= '<td>'.$i.'</td>';
				    $html.= '<td>'.$val['department'].'</td>';
            $html.='<td >'.$val['post'].'</td>';
            if($val['e_contract']=='true'){
            	$html.='<td><input type="checkbox" checked class="e_contract" id="e_contract" name="e_contract"></td>';
            }else{
            	$html.='<td><input type="checkbox" class="e_contract" id="e_contract" name="e_contract"></td>';
            }
            if($val['my_office']=='true'){
            	$html.='<td><input type="checkbox" checked class="my_office" id="my_office" name="my_office"></td>';
            }
            else{
            	$html.='<td><input type="checkbox" class="my_office" id="my_office" name="my_office"></td>';
            }
            if($val['my_project']=='true'){
            	$html.='<td><input type="checkbox" checked class="my_project" id="my_project" name="my_project"></td>';
            }else{
            	$html.='<td><input type="checkbox" class="my_project" id="my_project" name="my_project"></td>';
            }
            if($val['vecency']=='true'){
            		$html.='<td><input type="checkbox" checked class="vecency"  id="vecency" name="vecency"></td>';
            }
            else{
            	$html.='<td><input type="checkbox" class="vecency"  id="vecency" name="vecency"></td>';
            }
            if($val['events']=='true'){
            	$html.='<td><input type="checkbox" checked class="events" id="events" name="events"></td>';
            }
            else{
            	$html.='<td><input type="checkbox" class="events" id="events" name="events"></td>';
            }
            if($val['gallery']=='true'){
            	 $html.='<td><input type="checkbox"  checked class="gallery" id="gallery" value="1" name="gallery"></td>';
            }
            else{
            	 $html.='<td><input type="checkbox" class="gallery" id="gallery" value="1" name="gallery"></td>';
            }
            $html.='<td><span class="float-right">';
             $html.='<button type="button" class="btn btn-success btn-xs departm" value="'.$val['post_id'].'">Update</button>';
           $html.='</td>';
           $html.='</tr>';
           
        
			}

		}
		$html.='</tbody>';
    $html.='</table>';
			echo $html;
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


	public function delete_member(){
		$data = $this->input->post();
		$result = $this->Website_model->delete_member_model($data);
		echo $result;
	}


	public function online_applylist(){

		$depart_id = $this->input->post('depart_id');
		$payment_status = $this->input->post('payment_status');
		// print_r($depart_id);die;
		$data['title']="Apply List";
		$data['datatable'] = true;
		$data['applylist'] = $this->Website_model->get_applylist($depart_id,$payment_status);
		// echo PRE;
		// print_r($data['applylist']);die;
		$this->template->load('pages','online_apply_list',$data);
	}

	public function admitcardpage(){
		$id = $this->input->get('id');
		$data['vacencydetails'] = $this->Website_model->get_vacencydetailsbyid($id);

		$data['state'] = $this->Website_model->get_state();
		$data['title']="Create Admit Card";
		$data['datatable'] = true;
		$this->template->load('pages','admitcardpage',$data);
	}

	public function resultpage(){
		$id = $this->input->get('id');
		$data['vacencydetails'] = $this->Website_model->get_vacencydetailsbyidsforresult($id);
	
		$data['state'] = $this->Website_model->get_state();
		$data['title']="Create Result";
		$data['datatable'] = true;
		$this->template->load('pages','resultpage',$data);
	}

	public function saveresult(){
		$data = $this->input->post();

		$records = $this->Website_model->save_result($data);
		 if($records){
					$this->session->set_flashdata('msg','Result Added Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/online_applylist');
	}


	public function saveadmitcard(){
	  $data = $this->input->post();
	  $applicant_no = $data['applicant_no'];
	  $checked = $this->checkadmitcard($applicant_no);
	  if($checked['verify']!=1){
	  	  $result = $this->Website_model->insert_admitcard($data);
			  if($result){
					$this->session->set_flashdata('msg','Admit Card Generate Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/online_applylist');
	  }
	  else{
	  	$this->session->set_flashdata('msg','Already Exist!');
	  	redirect('admin/online_applylist');
	  }
	}

	public function upload_admincard(){
		$depart_id = $this->input->post('depart_id');
		$data['title']="Admit Card List";
		$data['datatable'] = true;
		$data['admitcardlist'] = $this->Website_model->get_admitcardlist($depart_id);
		$this->template->load('pages','admit_cardlist',$data);
	}

	public function publish_admitcard(){
		$id = $this->input->get('id');
		print_r($id);die;
		$result =  $this->Website_model->admitcard_publish($id);
		if($result){
					$this->session->set_flashdata('msg','Published Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/departmentwise_admitcard');
	}

	public function publish_result(){
		$id = $this->input->get('id');
		$result =  $this->Website_model->result_publish($id);
		if($result){
					$this->session->set_flashdata('msg','Published Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/departmentwise_resultlist');
	}

	public function checkadmitcard($applicant_no){
		$result = $this->Website_model->check_admitcard($applicant_no);
			return $result;
	}

	public function update_admitcard(){
	  $data = $this->input->post();
	  $result = $this->Website_model->admitcard_updated($data);
	   if($result){
					$this->session->set_flashdata('msg','Admit Card Updated Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/upload_admincard');
	}

	public function pdf_admitcard(){
		$id = $this->input->get('id');
		// print_r($id);die;
		$result = $this->Website_model->pdf_generate_admitcard($id);
		// echo PRE;
		// print_r($result);die;
		$photo = $result['photo'];
		$signature = $result['signature'];
		$reporting_time = new DateTime($result['reporting_time']);
		$reporting =  $reporting_time->format('h:i A');
		$interview_time = new DateTime($result['interview_time']);
		$interview =  $interview_time->format('h:i A');
		$pdf = $this->customfpdf->getInstance();
     	$pdf->AliasNbPages();
     	$pdf->AddPage();
      	$pdf->Header('Arial');
     	$pdf->SetFont('Times','',25);
   //   $pdf->Cell(0,10,'satyakama.',0,0,'C');
     	$image="assets/images/logo1.jpg";
     	$pdf->Image(base_url($image), 5, $pdf->GetY(), 23.78);
     	$image1="assets/images/logo4.jpg";
     	$pdf->Image(base_url($image1), 30, $pdf->GetY(), 23.78);
     	$image2="assets/images/logo5.jpeg";
     	$pdf->Image(base_url($image2), 60, $pdf->GetY(), 83.78);
     	$image1="assets/images/logo2.jpg";
     	$pdf->Image(base_url($image1), 148, $pdf->GetY(), 23.78);
    	$image1="assets/images/logo3.jpg";
    	$pdf->Image(base_url($image1), 173, $pdf->GetY(), 33.78);
     	$pdf->SetFont('Arial','B',15);
     	$pdf->Cell(0,30,'',0,1,'C');
     	$pdf->Cell(0,0,'',1,1,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,7,'Application No  :'.$result['applicant_no'],1,0,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(63,7,'ADMIT CARD',0,0,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,7,'Batch No.  :'.$result['batch_no'],1,1,'L');
     	$pdf->Cell(63,7,'Registration No  :'.$result['registration_no'],1,0,'L');
     	$pdf->SetFont('Arial','B',10);

     	$pdf->Cell(63,7,date('Y').'-'.date('y',strtotime('+1 year')),0,0,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,7,'Issue Date  :'.date('d-m-Y',strtotime($result['added_on'])),1,1,'L');
     	$pdf->Cell(63,7,'Candidate Name  :',1,0,'L');
     	$pdf->Cell(63,7,$result['candidate_name'],1,1,'L');
     	$pdf->Cell(63,7,'Father/Husband Name  :',1,0,'L');
     	$pdf->Cell(63,7,$result['father_name'],1,1,'L');
     	if(!empty($photo)){
     		$pdf->Image(base_url($photo), 150, $pdf->GetY(), 36.70);
     	}
     	
     	// $pdf->Cell(63,7,'',1,1,'C');
     	// $images = $result['photo'];
     	// $pdf->Image(base_url(), 148, $pdf->GetY(), 23.78);
     	$pdf->Cell(63,7,'Date Of Birth  :'.date('d-m-Y',strtotime($result['dob'])),1,0,'L');
     	$pdf->Cell(63,7,'Mobile No.  :'.$result['mobile_no'],1,0,'L');
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(63,7,'Aadhar No.  :'.$result['aadharno'],1,0,'L');
     	$pdf->Cell(63,7,'Gender  :'.$result['gender'],1,0,'L');
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(63,7,'Category  :'.$result['category'],1,0,'L');
     	$pdf->SetFont('Arial','',8);
     	$pdf->Cell(63,7,$result['post_name'],1,0,'L');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,7,'',0,1,'L');
     	$pdf->SetFont('Arial','B',9);
     	$pdf->Cell(126,7,'INTERVIEW INFOMATION',1,0,'C');
      $pdf->SetFont('Arial','',8);
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(63,7,'State  :'.$result['name'],1,0,'L');
     	$pdf->Cell(63,7,'Center Unit :'.$result['center_name'],1,0,'L');
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(63,7,'Unit Code No.  :'.$result['unit_code'],1,0,'L');
     	$pdf->Cell(63,7,'Interview Date  :'.$result['interviewdate'],1,0,'L');
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(63,7,'Reporting Time  :'.$reporting,1,0,'L');
     	$pdf->Cell(63,7,'Interview Start Time  :'.$interview,1,0,'L');
     	if(!empty($signature)){
     	   $pdf->Image(base_url($signature), 145, $pdf->GetY(), 45.70);
     	}
     	$pdf->Cell(63,7,'',0,1,'C');
     	$pdf->Cell(126,10,'Center Address  :',0,1,'L');
     	$pdf->Cell(126,10,$result['center_address'],1,1,'L');
      $pdf->Cell(63,10,'',0,1,'C');
      $pdf->Cell(189,7,'',0,1,'L');
      $pdf->Cell(189,7,'',0,1,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,10,'INSTRUCTION',0,1,'C');
      $pdf->SetFont('Arial','I',9);
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(189,5,'1.   IT WILL BE VERY IMPORTANT FOR ALL THE CANDIDATES APPEARING IN THE INTERVIEW TEST TO PAY ATTENTION TO THE',0,1,'L');
      $pdf->Cell(189,5,'     FOLLOWING POINTS.',0,1,'L');
      	$pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'2.   IT IS MANDATORY FOR ALL THE CANDIDATES APPEARING IN THE INTERVIEW TEST TO REGISTER THEIR ATTENDANCE',0,1,'L');
      $pdf->Cell(189,5,'     TEST TO REGISTER THEIR ATTENDANCE ON THE DATE AND REPORTING TIME LIMIT PUBLISHED IN THE ADMIT CARD TIME LIMIT',0,1,'L');
      $pdf->Cell(189,5,'     ATTENDANCE FAILURE TO DO SO WILL BE TREATED AS ABSENT.',0,1,'L');
      $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'3.   ALL THE CANDIDATES WILL HAVE TO GET THEIR INTERVIEW TEST VERIFIED WITH THE ADMIT CARD AND ALL OTHER ',0,1,'L');
      $pdf->Cell(189,5,'     VALUE DOCUMENTS FROM THE DOCUMENT VARIFICATION OFFICER AND WAIT YOUR TURN.',0,1,'L');
      $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'4.   CONSUMPTION OF ALL TYPES OF DHPUV PAAN AND FOOD ITEMS IS PROHIBITED AT THE INTERVIEW VENUE.',0,1,'L');
      $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'5.   DURING THE INTERVIEW CANDIDATES WILL HAVE TO GIVE PREFERENCE TO FORMAL DRESS ONLY.',0,1,'L');
     $pdf->Cell(189,5,'',0,1,'L'); 
     $pdf->Cell(189,5,'',0,1,'L'); 
     $pdf->Cell(189,5,'',0,1,'L');
     $pdf->Cell(189,5,'',0,1,'L');
     $pdf->Cell(189,5,'AUTHORISED SIGNATURE',0,1,'R');
    $file =  date('Ymdhis').'_details.pdf';
    $pdf->Output($file,'I');
	}

	public function result_list(){
		$depart_id = $this->input->post('depart_id');
		$data['title']="Result List";
		$data['datatable'] = true;
		$data['result_list'] = $this->Website_model->get_resultlist($depart_id);
		$this->template->load('pages','result_list_vecency',$data);
	}



	public function update_result(){
		$data = $this->input->post();
		$result = $this->Website_model->result_updated($data);
	   if($result){
					$this->session->set_flashdata('msg','Result Updated Successfully');
				}else{
					$this->session->set_flashdata("err_msg","Something Error!");
				}
				redirect('admin/result_list');
	}

	public function pdf_result(){
		  $id = $this->input->get('id');
			$result = $this->Website_model->pdf_generate_result($id);
			// echo PRE;
			// print_r($result);die;
			$pdf = $this->customfpdf->getInstance();
     	$pdf->AliasNbPages();
     	$pdf->AddPage();
      $pdf->Header('Arial');
     	$pdf->SetFont('Times','',25);
     	$image="assets/images/logo1.jpg";
     	$pdf->Image(base_url($image), 5, $pdf->GetY(), 23.78);
     	$image1="assets/images/logo4.jpg";
     	$pdf->Image(base_url($image1), 30, $pdf->GetY(), 23.78);
     	$image2="assets/images/logo5.jpeg";
     	$pdf->Image(base_url($image2), 60, $pdf->GetY(), 83.78);
     	$image1="assets/images/logo2.jpg";
     	$pdf->Image(base_url($image1), 148, $pdf->GetY(), 23.78);
    	$image1="assets/images/logo3.jpg";
    	$pdf->Image(base_url($image1), 173, $pdf->GetY(), 33.78);
     	$pdf->SetFont('Arial','B',15);
     	$pdf->Cell(0,30,'',0,1,'C');
     	$pdf->Cell(0,0,'',1,1,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'Application No  :'.$result['applicant_no'],1,0,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(63,5,'RESULT',0,0,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'Batch No.  :'.$result['batch_no'],1,1,'L');
     	$pdf->Cell(63,5,'Registration No  :'.$result['registration_no'],1,0,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(63,5,date('Y').'-'.date('y',strtotime('+1 year')),0,0,'C');
     	if(!empty($result['photo'])){
     		$images = $result['photo'];
     		$pdf->Image(base_url($images), 148, $pdf->GetY(), 30.78);
     	}

     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(63,5,'Issue Date  :'.date('d-m-Y',strtotime($result['issue_date'])),1,1,'L');
     	$pdf->Cell(63,5,'Candidate Name  :'.$result['candidate_name'],1,0,'L');

     	$pdf->Cell(63,5,'Father/Husband Name  :'.$result['father_name'],1,0,'L');

     	$pdf->Cell(63,5,'',0,1,'C');
     	
     	$pdf->Cell(63,5,'Email  :'.$result['email'],1,0,'L');
     	$pdf->Cell(63,5,'Mobile No.  :'.$result['mobile_no'],1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	// $pdf->Cell(63,5,'  :',1,0,'L');
     	// $pdf->Cell(63,5,':',1,0,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(126,5,'Designation  :'.$result['designation'],1,0,'L');
     	    
     	$pdf->Cell(63,5,'',0,1,'L');
  
     	
     	$pdf->Cell(126,5,'Center Unit Name  :'.$result['center'],1,1,'L');
     	$pdf->Cell(63,5,'Unit Code No.  :'.$result['unit_code'],1,0,'L');

     	$pdf->Cell(63,5,'Interview Date  :'.date('d-m-Y',strtotime($result['interviewdate'])),1,0,'L');

     	if(!empty($result['signature'])){
     		$images = $result['signature'];
     		$pdf->Image(base_url($images), 152, $pdf->GetY(), 20.78);
     	}
     	$pdf->Cell(63,5,'',0,1,'C');
     	$pdf->Cell(126,5,'Reporting Time  :'.date('h:i A', strtotime($result['interview_time'])),1,0,'L');
     	// $pdf->Cell(63,5,'Interview Start Time  :'.$result['interview_time'],1,0,'L');
     	$pdf->Cell(63,5,'',0,1,'C');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,9,'RESULT',1,1,'C');
      // $pdf->Cell(63,9,'',1,1,'C');
      $pdf->SetFont('Arial','',9);
      $pdf->Cell(94,5,'Personality  :'.$result['personality'],1,0,'L');
     	$pdf->Cell(95,5,'Leadership Quality  :'.$result['leadership_quality'],1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	$pdf->Cell(94,5,'Thinking Ability  :'.$result['thinking'],1,0,'L');
     	$pdf->Cell(95,5,'Qualification  :'.$result['qualification'],1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	 $pdf->Cell(94,5,'Extra Qualification :'.$result['extra_qualification'],1,0,'L');
     	$pdf->Cell(95,5,'Experience  :'.$result['experience'],1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	$pdf->Cell(94,5,'IQ  :'.$result['iq_test'],1,0,'L');
     	$pdf->Cell(95,5,'Mind Set  :'.$result['mind_set'],1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
      $pdf->SetFont('Arial','',9);
     	$pdf->Cell(189,5,'Result Deceleration  :'.$result['result_decelear'],1,1,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,10,'Securityfund/Processing And Training Fee Demand',1,1,'C');
     	$pdf->SetFont('Arial','',9);
     	$pdf->Cell(94,5,'Security Deposit(Rs.)  :'.$result['security_deposit'].'/-',1,0,'L');
     	$pdf->Cell(95,5,'Processing Fee(Rs.)   :'.$result['procesing_fee_'].'/-',1,1,'L');
     	// $pdf->Cell(63,5,'',0,1,'C');
     	$pdf->Cell(94,5,'Training Fee(Rs.)  :'.$result['training_fee'].'/-',1,0,'L');
     	$pdf->Cell(95,5,'Other  :'.$result['others'].'/-',1,1,'L');
     	$pdf->Cell(189,5,'Total Demand Amount In Figures   :'.$result['total_amount'].'/-',1,1,'L');
     	$pdf->Cell(189,5,'In Word   :'.$result['total_amount_in_word'],1,1,'L');
     	$pdf->Cell(189,5,'Last Date For Make Payment   :'.date('d-m-Y',strtotime($result['last_payment_date'])),1,1,'L');
      $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'',0,1,'L');
     	$pdf->SetFont('Arial','B',10);
     	$pdf->Cell(189,10,'INSTRUCTION',0,1,'C');
      $pdf->SetFont('Arial','I',9);
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(189,5,'THE SUCCESSFULLY CATEGORY HAS COMPULSARY IMPLIMENTED THE CANDIDATES OF ALL THE POST INCLUDED IN THE',0,1,'L');
      $pdf->Cell(189,5,'SECTION 2022-23. IT HAS BEEN MADE MANDATORY TO DEPOSIT A NON JUDICIAL STAMP RS. 1000 ALLOWING ',0,1,'L');
      $pdf->Cell(189,5,'WITH THE SECURITY FUND, PROCESSING AND TRAINING FEE UNDER THE APPOINTMENT RULES OF THE INSTITUTION.',0,1,'L');
      	$pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'1.   ALL FEES AND NON-JUDICIAL STAMPS WILL BE DEPOSITED BY THE STIPULATED DATE ONLY IN SPECIAL ',0,1,'L');
      $pdf->Cell(189,5,'      PRESENTATION THE CANDIDATE CAN DEMAND AN ADDITIONAL TIME OF  7 DAYS FROM THE OFFICE.',0,1,'L');
      // $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'2.   ALL DEMAND FEE WILL BE CHARGED IN LUMP SUM PAYMENT. ',0,1,'L');
      $pdf->Cell(189,5,'3.   ALL THE DEMAND AMOUNT CANDIDATES WILL HAVE TO DEPOSIT THEM SELVES ON THE PERSONAL ACCOUNT OF THE',0,1,'L');
      $pdf->Cell(189,5,'      INSTITUTE WITH THE HELP OF E-PAYMENT CASH DEPOSIT WILL NOT BE TAKEN.',0,1,'L');
      // $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'4.   CANDIDATES MUST KEEP ALL THE FEE PAYMENT RECEIPTS SAFE WITH THEM.',0,1,'L');
      // $pdf->Cell(189,5,'',0,1,'L');
      $pdf->Cell(189,5,'5.   AFTER THE FEE IS DEPOSITED IN THE INSTITUTE THE INSTITUTE OR ITS OFFICIALS WE NEVER ACCEPT THE REQUEST TO ',0,1,'L');
      $pdf->Cell(189,5,'      PAY BACK THE AMOUNT BEFORE THE DEADLINE.',0,0,'L');
      $pdf->Cell(189,10,'',0,1,'L');
       $pdf->SetFont('Arial','B',10);
      $pdf->Cell(9,5,'NOTE : ',0,0,'L');
       $pdf->SetFont('Arial','',9);
      $pdf->Cell(180,5,'AFTER THE FEE IS DEPOSITED IN THE INSTITUTE THE INSTITUTE OR ITS OFFICIALS WE NEVER ACCEPT ',0,1,'L');
       $pdf->Cell(189,5,'THE REQUEST TO PAY BACK THE AMOUNT BEFORE THE DEADLINE.',0,0,'L'); 
    $pdf->SetFont('Arial','B',9);
     $pdf->Cell(189,30,'',0,1,'L');
     $pdf->Cell(94,5,'CANDIDATE SIGNATURE',0,0,'L');
     $pdf->Cell(95,5,'AUTHORISED SIGNATURE',0,1,'R');
    
    // $pdf->SetFont('Arial','',8);
    $file =  date('Ymdhis').'_details.pdf';
    $pdf->Output($file,'I');

	}

	public function my_team(){
		$depart_id= $this->input->post();

		 $data['title']="Team List";
			$data['datatable'] = true;
			$data['depart_list'] = $this->Website_model->get_teamlist($depart_id);

			$this->template->load('pages','team_list',$data);
	}



	// '''''''''''''''''''controlling department wise''''''''''''''''''''''''''''''
		public function departmentwisecontrol(){
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','depart_wise_control',$data);
		}
		public function completed_noncompleted(){
			$data['title']="Check List";
			$data['datatable'] = true;
			$this->template->load('pages','check_completed_or_not',$data);
		}
		public function departmentwiseexpense(){
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','department_wise_expense',$data);
		}

		public function departmentwise_team(){
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','depart_wise_grouplist',$data);
		}

		public function departmentwise_vacency(){
			$data['payment_status'] = $this->input->post('payment_status');
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','department_wise_vecency',$data);
		}
		public function departmentwise_admitcard(){
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','department_wise_admitcard',$data);
		}
		public function departmentwise_resultlist(){
			$data['title']="Department Wise Control";
			$data['datatable'] = true;
			$data['depart'] = $this->Website_model->get_departlist($data);
			$this->template->load('pages','department_wise_result',$data);
		}
}