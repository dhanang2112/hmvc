<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
    public function __construct()
    {
        parent::__construct();
       
        $this->load->model('jenis_brg_qry','jenis_brg');
    }
	

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'admin'){
		$data['val'] = $this->jenis_brg->get_jenis_brg();
		$this->template
			->title('Form Daftar Barang')
			->set_layout('main')
			->build('index',$data);
		}
		else 
			header("location:".base_url());
	}


}
