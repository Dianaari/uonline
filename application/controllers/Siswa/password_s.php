<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password_s extends CI_Controller{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_password');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Siswa/vpassword_s';
        $this->load->view('Siswa/template_siswa',$a);
    }

    public function ubahpassword()
    {
        $username = $this->session->userdata('username');
        $password = md5($this->input->post('password'));
        $passbaru = md5($this->input->post('passbaru'));
        $passbaru1 = md5($this->input->post('passbaru1'));
        $check=$this->m_password->check($username, $password);
        if($check->num_rows()>0){
            if($passbaru == $passbaru1){
                $this->m_password->update($username,$passbaru);
                $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible' role='alert'>Password berhasil diupdate</div>");
                redirect('Siswa/password_s','refresh');
            }else{
                $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible' role='alert'>Konfirmasi Password baru salah!</div>");
                redirect('Siswa/password_s','refresh');
            }
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible' role='alert'>Password lama salah!</div>");
            redirect('Siswa/password_s','refresh');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
    
}