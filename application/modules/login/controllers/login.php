<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function _construct(){
		session_start();
	}
	
	public function index()
	{
		$cek = $this->session->userdata('username');
		if(empty($cek)){
			$this->load->view('p_login');
		}
		else{
			$st = $this->session->userdata('stts');
			if($st == 'admin')
				header('location:'.base_url().'admin');
				else
				header('location:'.base_url().'user');	
		}

		// $this->load->view('p_login');
	}
}
