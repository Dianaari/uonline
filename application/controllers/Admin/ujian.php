<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_ujian');
        $this->load->model('m_kelas');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/ujian/v_ujian';
        $a['ujian'] = $this->m_ujian->ModelUjian()->result_array();
        $this->load->view('vwHeader',$a);
        }


    public function delete($id_ujian){

        $a['username'] = $this->session->userdata('username');
        $this->m_ujian->del_ujian($id_ujian);
        $a['p']='Admin/ujian/v_ujian';
        $a['ujian'] = $this->m_ujian->ModelUjian()->result_array();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('vwHeader',$a);

    }

    public function edit($id_ujian){

        if($this->input->post('submit')){
            $id_ujian1 = $this->input->post('id_ujian');
            $nama_ujian = $this->input->post('nama_ujian');
            $tahun = $this->input->post('tahun');
            $tgl_mulai = $this->input->post('tgl_mulai');
            $tgl_selesai = $this->input->post('tgl_selesai');
            $status_ujian = $this->input->post('status_ujian');

            $object = array(
                        "id_ujian" => $id_ujian1,
                        "nama_ujian" => $nama_ujian,
                        "id_tahun" => $tahun,
                        "tgl_mulai" => $tgl_mulai,
                        "tgl_selesai" => $tgl_selesai,
                        "status_ujian" => $status_ujian,
            );

        $this->db->where('id_ujian', $id_ujian);
        $this->db->update('ujian',$object);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;
            </span></button>Data Berhasil disimpan</div>");
        redirect('Admin/ujian');
        }else{

            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/ujian/v_editujian';
            $a['editdata'] = $this->db->where('id_ujian',$id_ujian)->get('ujian')->result_array();
            $a['tahun'] = $this->m_ujian->getTahun()->result();
           
            $this->load->view('vwHeader',$a);
        }
    }

    public function add(){
            $this->form_validation->set_rules('id_ujian','id_ujian', 'trim|required');
            $this->form_validation->set_rules('nama_ujian','nama_ujian', 'trim|required');
            $this->form_validation->set_rules('tahun','tahun', 'trim|required');
            $this->form_validation->set_rules('tgl_mulai','tgl_mulai', 'required');
            $this->form_validation->set_rules('tgl_selesai','tgl_selesai', 'required');
            //$this->form_validation->set_rules('status_ujian','status_ujian', 'trim|required');

            if($this->form_validation->run() === TRUE){
                $id_ujian = $this->input->post('id_ujian');
                $check=$this->m_ujian->check($id_ujian);
                if($check->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button>Id Ujian sudah terdaftar. Silahkan ganti dengan Id yang lain !</div>";
                    $a['p']='Admin/ujian/v_addujian'; 
                    $this->load->view('vwHeader',$a);
                }else{
                    $id_ujian = $this->input->post('id_ujian');
                    $nama_ujian = $this->input->post('nama_ujian');
                    $tahun = $this->input->post('tahun');
                    $tgl_mulai = $this->input->post('tgl_mulai');
                    $tgl_selesai = $this->input->post('tgl_selesai');

                        $object = array(
                            "id_ujian" => $id_ujian,
                            "nama_ujian" => $nama_ujian,
                            "id_tahun" => $tahun,
                            "tgl_mulai" => $tgl_mulai,
                            "tgl_selesai" => $tgl_selesai,
                );

                    $this->m_ujian->insert($object);
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/ujian');
                }
            }else{
                $a['message']="";
                $a['p']='Admin/ujian/v_addujian'; 
                $this->load->view('vwHeader',$a);
            }
    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['tahun'] = $this->m_ujian->getTahun()->result();
        $a['ujian'] = $this->m_ujian->ModelUjian()->result_array();
        $a['message']=validation_errors();
        $a['p']='Admin/ujian/v_addujian';
        $this->load->view('vwHeader',$a);
        // print_r($a);
    }

    // public function getSiswa(){
    //     $this->load->library('form_validation');

    //     $a['p']='ujian/v_siswaujian';
    //     $this->m_ujian->modelSiswa($nis);
    //     $a['siswa'] = $this->m_siswa->ModelSiswa();

    //    $this->load->view('vwHeader',$a);

    // }

    public function detail($id_ujian) {
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/ujian/v_detailujian';
        $a['ujian'] = $this->m_ujian->get_detail($id_ujian)->row_array();
        
        // print_r($a);
        $this->load->view('vwHeader',$a);
        
    }


}