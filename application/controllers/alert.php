<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class alert extends CI_Controller {

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
		$this->load->view('admin/alert');

	}

	

}