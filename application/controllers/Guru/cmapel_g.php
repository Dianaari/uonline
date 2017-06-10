<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cmapel_g extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_mapel');
        $this->load->model('m_kelas');
    }


    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/mapel_g/vmapel_g';
        $a['mapel'] = $this->m_mapel->ModelMapel()->result_array();
        $this->load->view('Guru/template_guru',$a);
        }

    public function detail($id_mapel) { //tampil halaman lihat pengajar atau detail mapel
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/mapel_g/vdetailmapel_g';
        $a['pengajar'] = $this->m_mapel->get_detail($id_mapel);
        $this->load->view('Guru/template_guru',$a);          
        
    }





}