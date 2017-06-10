<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	 public function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('login');
		}

    }
        public function index() {
        $a['username'] = $this->session->userdata('username');  
        $a['p']         = "Admin/v_home"; 
        $this->load->view('vwHeader',$a);

        }

        public function indexGuru() {
        $a['username'] = $this->session->userdata('username');    
        $a['p']         = "Guru/vhome_g";   
        $this->load->view('Guru/template_guru',$a);

        }

        public function indexSiswa() {
        $a['username'] = $this->session->userdata('username');
        $a['nis'] = $this->session->userdata('nis');
        $a['nama_siswa'] = $this->session->userdata('nama_siswa');  
        $a['jenjang'] = $this->session->userdata('jenjang');
        $a['jenis_kelas'] = $this->session->userdata('jenis_kelas');
        $a['nama_kelas'] = $this->session->userdata('nama_kelas');
        
        $a['nama_ujian'] = $this->session->userdata('nama_ujian');
        $a['nama_mapel'] = $this->session->userdata('nama_mapel');
        $a['nama_guru'] = $this->session->userdata('nama_guru');
        $a['pertanyaan'] = $this->session->userdata('pertanyaan');
        
        $a['p']         = "Siswa/vhome_s";   
        $this->load->view('Siswa/template_siswa',$a);

        }

    function logout()
    {
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
