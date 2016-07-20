<?php
class m_login extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->tbl ="users";
	}

	function cek_user($username="username",$password="password")
	{
		$query = $this->db->get_where($this->tbl,array('username' =>$username,'password'=>$password));
		$query = $query->result_array();
		return $query;
	}

	function ambil_user($username)
	{
		$query = $this->db->get_where($this->tbl, array('username'=>$username));
		$query = $query->result_array();
		if($query){
			return $query[0];
		}
	}
}