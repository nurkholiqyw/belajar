<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->library('database');
		$this->load->library('session');
		//$this->load->library('url');
		//load model
		$this->load->model('Model_login');
	}

	function index()
	{
		$this->load->view('login');
	}

	function cek() {
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$login=$this->Model_login->cek($username,$password);
		if($login) {
			//echo "berhasil";
			$data=array(
				'username'=>$username,
				'logged_in'=>true,
			);
			//set data ke session
			$this->session->set_userdata($data);
			redirect('profil');
		}else{
			echo "Gagal";
		}
	}
}
