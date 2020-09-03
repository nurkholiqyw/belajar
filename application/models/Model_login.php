<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Controller {

	
	public function cek($username,$password)
	{
		$data=$this->db->get_where('admin',array('username'=>$username,'password'=>$password));
		//SELECT * FROM admin WHERE username=$username AND password=$username
		if ($data->num_rows()>0) {
			return TRUE;
		}else {
			return FALSE;
		}
	}
}
