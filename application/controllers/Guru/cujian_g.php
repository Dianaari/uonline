<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cujian_g extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_ujian');
        $this->load->model('m_kelas');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/ujian_g/vujian_g';
        $a['ujian'] = $this->m_ujian->ModelUjian()->result_array();
        $this->load->view('Guru/template_guru',$a);
        }


}