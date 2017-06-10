<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Homesiswa extends CI_Controller{
	
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_siswa','M_mapel','M_ujian','M_soal'));
        $this->load->library(array('form_validation','Siswa/template_siswa'));
        if($this->session->userdata('status') != 'Siswa')
        {
            redirect('login');
        }
    }

    function index(){ //gak dipake
        $a['username'] = $this->session->userdata('username');


        $a['nama_siswa'] = $this->M_siswa->check_siswa('nama_siswa');
        $a['kelas'] = $this->M_siswa->check_siswa('kelas');
        $a['pengajar'] = $this->M_mapel->check_guru();
        $a['nama_ujian'] = $this->M_ujian->check_ujian();
        $a['jml_soal'] = $this->M_soal->count_all();
        $a['alokasi_waktu'] = $this->M_soal->count_all();
        $a['p']         = "Siswa/vhome_s"; 
        $this->load->view('vwHeader',$a);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    
}