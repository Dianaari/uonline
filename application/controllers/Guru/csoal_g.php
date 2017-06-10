<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csoal_g extends CI_Controller{

		public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_soal');
        $this->load->model('m_kelas');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vsoal_g';
        $a['soal'] = $this->m_soal->ModelSoal();
        $this->load->view('Guru/template_guru',$a);
        }


    public function delete($id_soal){

        $a['username'] = $this->session->userdata('username');
        $this->m_soal->del_soal($id_soal);
        $a['p']='Guru/soal_g/vsoal_g';
        $a['soal'] = $this->m_soal->ModelSoal();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('Guru/template_guru',$a);

    }

    public function edit($id_soal){

        if($this->input->post('submit')){
                    $id_soal1 = $this->input->post('id_soal');
                    $nama_soal = $this->input->post('nama_soal');
                    $ujian = $this->input->post('ujian');
                    $mapel = $this->input->post('mapel');
                    $kelas = $this->input->post('kelas');
                    $waktu_mulai = $this->input->post('waktu_mulai');
                    $waktu_akhir = $this->input->post('waktu_akhir');
                    $jml_pertanyaan = $this->input->post('jml_pertanyaan');

            $object = array(
                        "id_soal" => $id_soal1,
                        "nama_soal" => $nama_soal,
                        "id_ujian" => $ujian,
                        "id_mapel" => $mapel,
                        "id_kelas" => $kelas,
                        "waktu_mulai" => $waktu_mulai,
                        "waktu_akhir" => $waktu_akhir,
                        "jml_pertanyaan" => $jml_pertanyaan,
            );

        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal',$object);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
        redirect('Admin/soal');
        }else{

            $a['username'] = $this->session->userdata('username');
            $a['p']='Guru/soal_g/veditsoal_g';
            $a['editdata'] = $this->db->where('id_soal', $id_soal)->get('soal')->result_array();
            $a['mapel'] = $this->m_soal->getMapel()->result();
            $a['ujian'] = $this->m_soal->getIdujian()->result();
            $a['kelas'] = $this->m_kelas->kelas_siswa();
            
            $this->load->view('Guru/template_guru',$a);
        }
        
    }


    public function add(){
            $this->form_validation->set_rules('nama_soal','nama_soal', 'trim|required');
            $this->form_validation->set_rules('mapel','mapel', 'trim|required');
            $this->form_validation->set_rules('kelas','kelas', 'trim|required');
            $this->form_validation->set_rules('ujian','ujian', 'trim|required');
            $this->form_validation->set_rules('waktu_mulai','waktu_mulai', 'trim|required');
            $this->form_validation->set_rules('waktu_akhir','waktu_akhir', 'trim|required');

            if($this->form_validation->run() === FALSE){
                $a['p']='Guru/soal_g/vaddsoal_g'; 
                $this->load->view('Guru/template_guru',$a);
            }else{
                    $nama_soal = $this->input->post('nama_soal');
                    $mapel = $this->input->post('mapel');
                    $kelas = $this->input->post('kelas');
                    $ujian = $this->input->post('ujian');
                    $waktu_mulai = $this->input->post('waktu_mulai');
                    $waktu_akhir = $this->input->post('waktu_akhir');

                    $object = array(
                        "nama_soal" => $nama_soal,
                        "id_mapel" => $mapel,
                        "id_kelas" => $kelas,
                        "id_ujian" => $ujian,
                        "waktu_mulai" => $waktu_mulai,
                        "waktu_akhir" => $waktu_akhir,

            );
                    $this->m_soal->insert($object);

                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Guru/csoal_g');

            }

    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vaddsoal_g';
        $a['soal'] = $this->m_soal->ModelSoal();
        $a['mapel'] = $this->m_soal->getMapel()->result();
        $a['ujian'] = $this->m_soal->getIdujian()->result();
        $a['kelas'] = $this->m_kelas->kelas_siswa();
        $this->load->view('Guru/template_guru',$a);

    }

    public function detail($id_soal) {
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vdetailsoal_g';
        $a['soal'] = $this->m_soal->get_detail($id_soal)->row_array();
        $a['kelas'] = $this->m_kelas->kelas_siswa();
        
        $this->load->view('Guru/template_guru',$a);
        
    }


}