<?php
class m_kategori_event extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function m_lihat(){
		$lihat = $this->db->get('kategori_event');
		return $lihat->result();
	}

	function post(){
		$data=array(
			'kategori_event_nm'=> $this->input->post('kategori_event_nm'));
		$this->db->insert('kategori_event',$data);
	}

	function m_hapus($data){
		$this->db->delete('kategori_event',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('kategori_event');
		return $edit->result();
	}
	
	function m_update($data,$id){
		$this->db->where('kategori_event_id', $id);
		$this->db->update('kategori_event',$data);
	}
}
?>