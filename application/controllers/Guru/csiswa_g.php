<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csiswa_g extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_siswa');
        $this->load->model('m_kelas');
    }


    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/siswa_g/vsiswa_g';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $this->load->view('Guru/template_guru',$a);
        }

    public function delete($nis){

        $a['username'] = $this->session->userdata('username');
        $this->m_siswa->del_siswa($nis);
        $a['p']='Guru/siswa_g/vsiswa_g';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('Guru/template_guru',$a);

    }

    public function edit($nis){

            if($this->input->post('submit')){
                $nis1 = $this->input->post('nis');
                $nama_siswa = $this->input->post('nama_siswa');
                $jenkel = $this->input->post('jenkel');
                $kelas = $this->input->post('kelas');
                $tahun = $this->input->post('tahun');
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                $level = $this->input->post('level');

                $object_user = array(
                            "username" => $username,
                            "password" => $password,
                            "level" => $level,
                );

                $object_siswa = array(
                            "nis" => $nis1,
                            "nama_siswa" => $nama_siswa,
                            "jenkel" => $jenkel,
                            "username" => $username,
                ); 

                $object_kls = array(
                            "nis" => $nis,
                            "id_kelas" => $kelas,
                            "id_tahun" => $tahun,
                );

            $this->db->where('username', $username);
            $this->db->update('user',$object_user);

            $this->db->where('nis', $nis);
            $this->db->update('siswa',$object_siswa);

            $this->db->where('nis', $nis);
            $this->db->update('kelas_siswa',$object_kls);

            $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
            redirect('Guru/csiswa_g');
        }else{

            $a['username'] = $this->session->userdata('username');
            $a['p']='Guru/siswa_g/veditsiswa_g';
            $a['editdata'] = $this->db->where('siswa.nis',$nis)->join('kelas_siswa','siswa.nis=kelas_siswa.nis')->join('user','user.username=siswa.username')->get('siswa')->result_array();
            $a['kelas'] = $this->m_kelas->kelas_siswa();
            $a['tahun'] = $this->m_siswa->getTahun()->result();
            $this->load->view('Guru/template_guru',$a);
        }
        
    }


    public function add(){
            $this->form_validation->set_rules('nis','nis', 'trim|required');
            $this->form_validation->set_rules('nama_siswa','nama_siswa', 'trim|required');
            $this->form_validation->set_rules('jenkel','jenkel', 'trim|required');
            $this->form_validation->set_rules('kelas','kelas', 'trim|required');
            $this->form_validation->set_rules('tahun','tahun', 'trim|required');
            $this->form_validation->set_rules('username','username', 'trim|required');
            $this->form_validation->set_rules('password','password', 'trim|required');
            $this->form_validation->set_rules('level','level', 'trim|required');

            if($this->form_validation->run() === TRUE){
                $nis = $this->input->post('nis');
                $check=$this->m_siswa->check($nis);
                if($check->num_rows()!=null){
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>NIS sudah terdaftar sebagai Siswa</div>";
                    $a['p']='Guru/siswa_g/vaddsiswa_g'; 
                    $this->load->view('Guru/template_guru',$a);
                }else{
                    $nis = $this->input->post('nis');
                    $nama_siswa = $this->input->post('nama_siswa');
                    $jenkel = $this->input->post('jenkel');
                    $kelas = $this->input->post('kelas');
                    $tahun = $this->input->post('tahun');
                    $username = $this->input->post('username');
                    $password = md5($this->input->post('password'));
                    $level = $this->input->post('level');

                    $object_user = array(
                        "username" => $username,
                        "password" => $password,
                        "level" => $level,
                    );

                    $object_siswa = array(
                        "nis" => $nis,
                        "nama_siswa" => $nama_siswa,
                        "jenkel" => $jenkel,
                        "username" => $username,
            );

                    $object_kls = array(
                        "nis" => $nis,
                        "id_kelas" => $kelas,
                        "id_tahun" => $tahun,
            );

                    $this->m_siswa->insert_user($object_user);
                    $this->m_siswa->insert($object_siswa);
                    $this->m_kelas->insert_kls($object_kls);
                    
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Guru/csiswa_g');
                    
                }
            }else{
                $a['message']="";
                $a['p']='Guru/siswa_g/vaddsiswa_g'; 
                $this->load->view('Guru/template_guru',$a);
            }
    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/siswa_g/vaddsiswa_g';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $a['kelas'] = $this->m_kelas->kelas_siswa();
        $a['tahun'] = $this->m_siswa->getTahun()->result();

        $this->load->view('Guru/template_guru',$a);
    }

    public function peserta($id_kelas){
        $a['p']='ujian/v_siswaujian';
        $a['siswa'] = $this->m_siswa->getSiswaKelas($id_kelas);
        $this->load->view('Guru/template_guru',$a);
        }


    public function detail($nis) {
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/siswa_g/vdetailsiswa_g';
        $a['siswa'] = $this->m_siswa->get_detail($nis)->row_array();

        $this->load->view('Guru/template_guru',$a);
        
    }



}