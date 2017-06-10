<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chasil_g extends CI_Controller{

		public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_hasil');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/vhasilujian_g';
        $a['hasil'] = $this->m_hasil->ModelHasil();
        $this->load->view('vwHeader',$a);
        }

    public function cetak_laporan(){
        $data['hasil']=$this->m_hasil->ModelHasil();
        $this->load->view('admin/laporanhasilujian',$data);
        $html = $this->output->get_output();
        $this->load->library('pdf');
        $this->dompdf->load_html($html);
        $this->dompdf->set_paper("A4", "portrait");
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Hasil Ujian.pdf");
        
    }


}