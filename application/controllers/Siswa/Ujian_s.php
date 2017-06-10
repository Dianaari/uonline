<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian_s extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_soal');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Siswa/vujian_s';
        $a['ujiansiswa'] = $this->m_soal->ModelSoal();
        $this->load->view('Siswa/template_siswa',$a);
        }




}