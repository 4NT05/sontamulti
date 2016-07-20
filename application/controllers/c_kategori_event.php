<?php
class c_kategori_event extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('m_kategori_event');
    }

    function lihat(){
        $data['kategori_event'] = $this->m_kategori_event->m_lihat();
        $this->load->view('kategori_event/v_form_lihat',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            //proses kategori
            $this->m_kategori_event->post();
            redirect('c_kategori_event/lihat');
        }
        else{
            $this->load->view('kategori_event/v_form_input');
        }
    }

    function hapus($id){
        $data = array ('kategori_event_id' => $id);
        $this->m_kategori_event->m_hapus($data);
        redirect(base_url().'index.php/c_kategori_event/lihat');
    }

    function edit($id){
        $data=array(
            'kategori_event_id'=>$id
            );
        $data['data_edit']=$this->m_kategori_event->m_edit($data);
        $this->load->view('kategori_event/v_form_edit',$data);
    }
    function update(){
        $id = $this->input->post('kategori_event_id');
        $data=array(            
            'kategori_event_nm'=>$this->input->post('kategori_event_nm')
            );
        $this->m_kategori_event->m_update($data,$id);
        redirect(base_url().'index.php/c_kategori_event/lihat');
    }

}
?>
