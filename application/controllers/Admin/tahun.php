<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_tahun');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/tahun/v_tahun';
        $a['tahun'] = $this->m_tahun->ModelTahun()->result_array();
        $this->load->view('vwHeader',$a);
        }


    public function delete($id_tahun){

        $a['username'] = $this->session->userdata('username');
        $this->m_tahun->del_tahun($id_tahun);
        $a['p']='Admin/tahun/v_tahun';
        $a['tahun'] = $this->m_tahun->ModelTahun()->result_array();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('vwHeader',$a);

    }

    public function edit($id_tahun){

        if($this->input->post('submit')){
            $id_tahun1 = $this->input->post('id_tahun');
            $tahun_ajaran = $this->input->post('tahun_ajaran');
            $status_tahun = $this->input->post('status_tahun');

            $object = array(
                "id_tahun" => $id_tahun1,
                "tahun_ajaran" => $tahun_ajaran,
                "status_tahun" => $status_tahun,
            );  


        $this->db->where('id_tahun', $id_tahun);
        $this->db->update('tahun',$object);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
        redirect('Admin/tahun');
        }else{

            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/tahun/v_edittahun';
            $a['editdata'] = $this->db->where('id_tahun',$id_tahun)->get('tahun')->result_array();
            $this->load->view('vwHeader',$a);
        }
    }


    public function add(){
            $this->form_validation->set_rules('tahun_ajaran','tahun_ajaran', 'trim|required');
            $this->form_validation->set_rules('status_tahun','status_tahun', 'trim|required');
            $this->form_validation->set_rules('trailer', 'Trailer', 'trim|is_numeric');  

            if($this->form_validation->run() === FALSE){
                $a['p']='Admin/tahun/v_addtahun'; 
                $this->load->view('vwHeader',$a);
            }else{
                    $tahun_ajaran = $this->input->post('tahun_ajaran');
                    $status_tahun = $this->input->post('status_tahun');


                    $object = array(
                        "tahun_ajaran" => $tahun_ajaran,
                        "status_tahun" => $status_tahun,
            );
                    $this->m_tahun->insert($object);
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/tahun');
           }
    }


    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/tahun/v_addtahun';
        $a['tahun'] = $this->m_tahun->ModelTahun()->result_array();
        $this->load->view('vwHeader',$a);
    }



}