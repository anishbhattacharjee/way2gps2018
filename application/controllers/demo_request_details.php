<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class demo_request_details extends CI_Controller {
 public function __construct()
	{
		parent::__construct();
		session_start();
	$un = $this->session->userdata('username');

		  if($un==NULL)
         {
              redirect('adminlogin');

         }
	}
	public function index()
	{
		$this->load->view('reports/demo_request_details');
	}
	
}