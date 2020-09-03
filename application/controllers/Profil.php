<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index()
	{
		$data['username']=$this->session->userdata('username');
		$this->load->view('profil',$data);
	}
}
