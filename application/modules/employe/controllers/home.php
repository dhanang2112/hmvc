<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Home extends MX_Controller {
	public function index()
	{
		$this->load->view('v_home');
	}
}

