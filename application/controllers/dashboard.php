<?php

	class dashboard extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('m_login');
			$this->auth->cek_auth();
		}

		function index()
		{
			$ambil_akun = $this->m_login->ambil_user($this->session->userdata('username'));
			$data = array(
				'username' => $ambil_akun,
				);
			$stat = $this->session->userdata('level');
			if($stat==1){//admin
				$this->load->view('v_home',$data);
			}else{
				$this->load->view('dashboard_user',$data);
			}
		}

		function login()
		{
			$session = $this->session->userdata('isLogin');
			if($session == FALSE)
			{
				$this->load->view('form_login');
			}else{
				redirect('dashboard');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
	}

?>