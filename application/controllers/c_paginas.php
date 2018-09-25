<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_paginas extends CI_Controller {

	
	public function add()
	{

		$this->load->view('v_add_plyn.php');
		
	}
	public function login()
	{

		$this->load->view('v_login_plyn.php');
		
	}
	public function list()
	{

		$this->load->view('v_list_plyn.php', $dados);
		
	}

	public function home()
	{

		$this->load->view('index.php');
		
	}
	


	
	
}
?>