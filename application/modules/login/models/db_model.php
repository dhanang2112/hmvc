<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model {
	public function getlogindata ($usr, $pwd){
		$u = $usr;
		$p = md5($pwd);
		$cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p));
		if($cek_login->num_rows() > 0){
			$qad = $cek_login -> row();
			if($u == $qad -> username && $p == $qad->password){
				$sess = array (
					'username' 	=> $qad->username,
					'stts'		=> $qad->status,
				);
				$this->session->set_userdata($sess);
				if($qad -> status == 'admin')
					header('location:'.base_url().'admin');
				else
					header('location:'.base_url().'user');
			}
		}
		else{
			echo "<script> alert('Username/Password salah, silahkan coba lagi....');";
			echo " windows.location.href = '" .base_url(). "';";
			echo "</script>";
		}		
	}
}