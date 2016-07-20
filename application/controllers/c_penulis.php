<?php
class c_penulis extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('m_penulis');
    }

    function lihat(){
        $data['penulis'] = $this->m_penulis->m_lihat();
        $this->load->view('penulis/v_form_lihat',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            //proses kategori
            $this->m_penulis->post();
            redirect('c_penulis/lihat');
        }
        else{
            $this->load->view('penulis/v_form_input');
        }
    }

    function hapus($id){
        $data = array ('penulis_id' => $id);
        $this->m_penulis->m_hapus($data);
        redirect(base_url().'index.php/c_penulis/lihat');
    }

    function edit($id){
        $data=array(
            'penulis_id'=>$id
            );
        $data['data_edit']=$this->m_penulis->m_edit($data);
        $this->load->view('penulis/v_form_edit',$data);
    }
    function update(){
        $id = $this->input->post('penulis_id');
        $data=array(            
            'penulis_nm'=>$this->input->post('penulis_nm'),
            'penulis_email'=>$this->input->post('penulis_email'),
            'penulis_hp'=>$this->input->post('penulis_hp'),
            'blokir'=>$this->input->post('blokir')
            );
        $this->m_penulis->m_update($data,$id);
        redirect(base_url().'index.php/c_penulis/lihat');
    }

}
?>
