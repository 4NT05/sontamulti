<?php
class m_users extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function m_lihat(){
		$lihat = $this->db->get('users');
		return $lihat->result();
	}

	function post(){
		$data=array(
			'nama_lengkap'=> $this->input->post('nama_lengkap'),
			'username'=> $this->input->post('username'),
			'password'=> md5($this->input->post('password')),
			'alamat'=> $this->input->post('alamat'),
			'email'=> $this->input->post('email'),
			'pekerjaan'=> $this->input->post('pekerjaan'),
			'j_kel'=> $this->input->post('j_kel'),
			'hp'=> $this->input->post('hp')
			);
		$this->db->insert('users',$data);
	}

	function m_hapus($data){
		$this->db->delete('users',$data);
		
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('users');
		return $edit->result();
	}
	
	function m_update($data,$id){
		$this->db->where('users_id', $id);
		$this->db->update('users',$data);
	}
}
?>