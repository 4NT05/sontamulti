<?php

class login extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$session = $this->session->userdata('isLogin');
		if($session == FALSE)
		{
			$this->load->view('form_login');
			}else{
				redirect('dashboard');
			}
	}
	
	function do_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$cek = $this->m_login->cek_user($username,md5($password));
		if(count($cek) == 1){
			foreach ($cek as $cek){
			$level = $cek['level'];
		}
		$this->session->set_userdata(array(
			'isLogin' => TRUE,
			'username' => $username,
			'level' => $level,
			));

		redirect('dashboard','refresh');
		}
		else{ 
			echo 
			redirect ('login','index');
		}	
	}
}


?>