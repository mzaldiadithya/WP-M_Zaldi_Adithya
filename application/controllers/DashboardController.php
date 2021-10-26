<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->view('Admin/Dashboard');
		$this->components();
	}

	public function components()
	{
		$this->load->view('Admin/partials/header');
		$this->load->view('Admin/partials/sidebar');
		$this->load->view('Admin/partials/js');
	}
}