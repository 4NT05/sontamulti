<?php
class c_kategori_ebook extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('m_kategori_ebook');
    }

    function lihat(){
        $data['kategori_ebook'] = $this->m_kategori_ebook->m_lihat();
        $this->load->view('kategori_ebook/v_form_lihat',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            //proses kategori
            $this->m_kategori_ebook->post();
            redirect('c_kategori_ebook/lihat');
        }
        else{
            $this->load->view('kategori_ebook/v_form_input');
        }
    }

    function hapus($id){
        $data = array ('kategori_ebook_id' => $id);
        $this->m_kategori_ebook->m_hapus($data);
        redirect(base_url().'index.php/c_kategori_ebook/lihat');
    }

    function edit($id){
        $data=array(
            'kategori_ebook_id'=>$id
            );
        $data['data_edit']=$this->m_kategori_ebook->m_edit($data);
        $this->load->view('kategori_ebook/v_form_edit',$data);
    }
    function update(){
        $id = $this->input->post('kategori_ebook_id');
        $data=array(            
            'kategori_ebook_nm'=>$this->input->post('kategori_ebook_nm')
            );
        $this->m_kategori_ebook->m_update($data,$id);
        redirect(base_url().'index.php/c_kategori_ebook/lihat');
    }

}
?>
