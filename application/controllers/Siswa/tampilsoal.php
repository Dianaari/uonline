<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilsoal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_pertanyaan');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Siswa/v_tampilsoal';
        $a['pertanyaan'] = $this->m_pertanyaan->tampil_soal()->result_array();
        $this->load->view('Siswa/template_siswa',$a);
        // print_r($a);

        }

    public function nilai() {
        $a['username'] = $this->session->userdata('username');    
        $a['p']         = "Siswa/v_nilai";   
        $this->load->view('Siswa/template_siswa',$a);

        }


}