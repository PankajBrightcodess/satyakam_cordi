<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Project extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_and_setcookie();
	}
	
		public function index(){
			$d['v'] = 'website/index';
			$this->load->view('website/template',$d);
		}