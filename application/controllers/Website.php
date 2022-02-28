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
			$this->load->view('website/template',$d);
		}

		public function econtractform(){
			$d['v'] = 'website/econtractform';
			$this->load->view('website/template',$d);
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
