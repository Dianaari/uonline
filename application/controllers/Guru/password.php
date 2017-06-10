<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_password');
/*        if($this->session->userdata('status') != 'Guru')
        {
            redirect('Login');
        }*/
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/vpassword';
        //$a['check'] = $this->m_password->check($username, $password);
        $this->load->view('Guru/template_guru',$a);
    }

    public function ubahpassword()
    {
        //$nip = $this->session->userdata('nip');
        $username = $this->session->userdata('username');
        $password = md5($this->input->post('password'));
        $passbaru = md5($this->input->post('passbaru'));
        $passbaru1 = md5($this->input->post('passbaru1'));
        $check=$this->m_password->check($username, $password);
        if($check->num_rows()>0){
            if($passbaru == $passbaru1){
                $this->m_password->update($username,$passbaru);
                $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible' role='alert'>Password berhasil diupdate</div>");
                redirect('Guru/password','refresh');
            }else{
                $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible' role='alert'>Konfirmasi Password baru salah!</div>");
                redirect('Guru/password','refresh');
            }
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible' role='alert'>Password lama salah!</div>");
            redirect('Guru/password','refresh');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
    
}