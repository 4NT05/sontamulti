<?php
class c_ebook extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('m_ebook');
    }

    function lihat(){
        $data['ebook'] = $this->m_kategori_ebook->m_lihat();
        $this->load->view('ebook/v_form_lihat',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            //proses kategori
            $this->m_ebook->post();
            redirect('c_ebook/lihat');
        }
        else{
            $this->load->view('ebook/v_form_input');
        }
    }

    function hapus($id){
        $data = array ('ebook_id' => $id);
        $this->m_ebook->m_hapus($data);
        redirect(base_url().'index.php/c_ebook/lihat');
    }

    function edit($id){
        $data=array(
            'ebook_id'=>$id
            );
        $data['data_edit']=$this->m_ebook->m_edit($data);
        $this->load->view('ebook/v_form_edit',$data);
    }
    function update(){
        $id = $this->input->post('ebook_id');
        $data=array(            
            'nama_ebook'=>$this->input->post('nama_ebook')
            );
        $this->m_ebook->m_update($data,$id);
        redirect(base_url().'index.php/c_ebook/lihat');
    }

}
?>
