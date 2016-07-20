<?php
class m_penulis extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function m_lihat(){
		$lihat = $this->db->get('penulis');
		return $lihat->result();
	}

	function post(){
		$data=array(
			'penulis_nm'=> $this->input->post('penulis_nm'),
			'penulis_email'=> $this->input->post('penulis_email'),
			'penulis_hp'=> $this->input->post('penulis_hp'),
			'blokir'=> $this->input->post('blokir')
			);
		$this->db->insert('penulis',$data);
	}

	function m_hapus($data){
		$this->db->delete('penulis',$data);
		
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('penulis');
		return $edit->result();
	}
	
	function m_update($data,$id){
		$this->db->where('penulis_id', $id);
		$this->db->update('penulis',$data);
	}
}
?>