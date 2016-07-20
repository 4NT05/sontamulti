<?php
class m_kategori_ebook extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function m_lihat(){
		$lihat = $this->db->get('kategori_ebook');
		return $lihat->result();
	}

	function post(){
		$data=array(
			'kategori_ebook_nm'=> $this->input->post('kategori_ebook_nm'));
		$this->db->insert('kategori_ebook',$data);
	}

	function m_hapus($data){
		$this->db->delete('kategori_ebook',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('kategori_ebook');
		return $edit->result();
	}
	
	function m_update($data,$id){
		$this->db->where('kategori_ebook_id', $id);
		$this->db->update('kategori_ebook',$data);
	}
}
?>