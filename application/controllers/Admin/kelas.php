<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_kelas');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/kelas/v_kelas';
        $a['kelas'] = $this->m_kelas->ModelKelas()->result_array();
        $this->load->view('vwHeader',$a);
        }


    public function delete($id_kls){

        $a['username'] = $this->session->userdata('username');
        $this->m_kelas->del_kelas($id_kls);
        $a['p']='Admin/kelas/v_kelas';
        $a['kelas'] = $this->m_kelas->ModelKelas()->result_array();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");

        $this->load->view('vwHeader',$a);

    }

    public function edit($id_kelas){ //gak jadi dipake

        if($this->input->post('submit')){
                $id_kls1 = $this->input->post('id_kelas');
                $jenjang = $this->input->post('jenjang');
                $jenis_kelas = $this->input->post('jenis_kelas');
                $nama_kelas = $this->input->post('nama_kelas');

            $object = array(
                "id_kelas" => $id_kls1,
                "jenjang" => $jenjang,
                "jenis_kelas" => $jenis_kelas,
                "nama_kelas" => $nama_kelas,
            );  

        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas',$object);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' 
            class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
            </button>Data Berhasil disimpan</div>");
        redirect('Admin/kelas');

        }else{
            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/kelas/v_editkelas';
            $a['editdata'] = $this->db->where('id_kelas',$id_kelas)->get('kelas')->result_array();
            //$a['tahun'] = $this->m_kelas->getTahun()->result();
            $this->load->view('vwHeader',$a);
        }
    }


    public function add(){
            $this->form_validation->set_rules('jenjang','jenjang', 'trim|required');
            $this->form_validation->set_rules('jenis_kelas','jenis_kelas', 'trim|required');
            $this->form_validation->set_rules('nama_kelas','nama_kelas', 'trim|required');
            
            if($this->form_validation->run() === FALSE){
                $a['p']='Admin/kelas/v_addkelas'; 
                $this->load->view('vwHeader',$a);
            }else{
                    $jenjang = $this->input->post('jenjang');
                    $jenis_kelas = $this->input->post('jenis_kelas');
                    $nama_kelas = $this->input->post('nama_kelas');
                    
                    $object = array(
                        "jenjang" => $jenjang,
                        "jenis_kelas" => $jenis_kelas,
                        "nama_kelas" => $nama_kelas,
                        
                    );

                    $this->m_kelas->insert($object);
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/kelas');
            }
    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/kelas/v_addkelas';
        $a['kelas'] = $this->m_kelas->ModelKelas()->result_array();
        $this->load->view('vwHeader',$a);
    }
}