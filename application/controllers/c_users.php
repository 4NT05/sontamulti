<?php
class c_users extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('m_users');
    }

    function lihat(){
        $data['users'] = $this->m_users->m_lihat();
        $this->load->view('users/v_form_lihat',$data);
    }

    function post(){
        if(isset($_POST['submit'])){
            //proses kategori
            $this->m_users->post();
            redirect('c_users/lihat');
        }
        else{
            $this->load->view('users/v_form_input');
        }
    }

    function hapus($id){
        $data = array ('users_id' => $id);
        $this->m_users->m_hapus($data);
        redirect(base_url().'index.php/c_users/lihat');
    }

    function edit($id){
        $data=array(
            'users_id'=>$id
            );
        $data['data_edit']=$this->m_users->m_edit($data);
        $this->load->view('users/v_form_edit',$data);
    }
    function update(){
        $id = $this->input->post('users_id');
        $data=array(            
            'nama_lengkap'=>$this->input->post('nama_lengkap'),
            'username'=>$this->input->post('username'),
            'alamat'=>$this->input->post('alamat'),
            'email'=>$this->input->post('email'),
            'pekerjaan'=>$this->input->post('pekerjaan'),
            'j_kel'=>$this->input->post('j_kel'),
            'hp'=>$this->input->post('hp'),
            );
        $this->m_users->m_update($data,$id);
        redirect(base_url().'index.php/c_users/lihat');
    }

}
?>
