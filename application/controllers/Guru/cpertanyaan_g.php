<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpertanyaan_g extends CI_Controller{

		public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_pertanyaan');

    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vinput_g';
        $a['pertanyaan'] = $this->m_pertanyaan->ModelPertanyaan()->result_array();
        $this->load->view('Guru/template_guru',$a);
        }

    public function detail_input($id_soal) { //tampil halaman v_input
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vinput_g';
        $a['pertanyaan'] = $this->m_pertanyaan->get_input($id_soal);
        $this->load->view('vwHeader',$a);          
        
    }



    public function delete($id_pertanyaan){

        $a['username'] = $this->session->userdata('username');
        $this->m_pertanyaan->del_pertanyaan($id_pertanyaan);
        $a['p']='Guru/soal_g/vinput_g';
        $a['pertanyaan'] = $this->m_pertanyaan->ModelPertanyaan()->result_array();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('Guru/template_guru',$a);

    }


    public function input($id_soal){
            $this->form_validation->set_rules('id_soal','id_soal', 'trim|required');
            $this->form_validation->set_rules('jenis_pertanyaan','jenis_pertanyaan', 'trim|required');
            $this->form_validation->set_rules('pertanyaan','pertanyaan', 'trim|required');
            $this->form_validation->set_rules('gambar','gambar', 'trim|');
            $this->form_validation->set_rules('jawaban','jawaban', 'trim|required');


            if($this->form_validation->run() === FALSE){
                $a['p']='Guru/soal_g/vinputpertanyaan_g';
                $a['id_soal'] = $id_soal;
                $a['data'] = $this->input->post();
                $this->load->view('Guru/template_guru',$a);
            }else{


                    $config['upload_path']          = 'assets/img/pertanyaan';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 2000;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 1024;
                 
                    $this->upload->initialize($config);
                 
                    if ( ! $this->upload->do_upload('gambar')){
                        $gambar="";
                    }else{
                        $gambar=$this->upload->file_name;
                    }

                    $id_soal = $this->input->post('id_soal');
                    $id_pertanyaan = $this->input->post('id_pertanyaan');
                    $jenis_pertanyaan = $this->input->post('jenis_pertanyaan');
                    $pertanyaan = $this->input->post('pertanyaan');
                    $opsi = $this->input->post('opsi[]');
                    $isi_opsi = $this->input->post('isi_opsi[]');
                    $jawaban = $this->input->post('jawaban');
                    
                    //print_r($opsi);

                    $object = array(
                        'id_soal' => $id_soal,
                        'jenis_pertanyaan' => $jenis_pertanyaan,
                        'pertanyaan' => $pertanyaan,
                        'gambar' => $gambar
                        
                    );

                    $id_pertanyaan = $this->m_pertanyaan->insert($object);
                    $i = 0;
                    foreach ($isi_opsi as $key => $row) {

                        $object_opsi = array(
                        "id_pertanyaan" => $id_pertanyaan,
                        "opsi" => $opsi[$i],
                        "isi_opsi" => $row,
                        "jawaban" => ($jawaban==$i++)?1:0,
                        );

                        $this->m_pertanyaan->insert_opsi($object_opsi);
                        
                    }

                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil ditambahkan</div>");
                    redirect('Guru/cpertanyaan_g');

            }

    }


    public function tampil($id_soal){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Guru/soal_g/vinputpertanyaan_g';
        $a['pertanyaan'] = $this->m_pertanyaan->ModelPertanyaan()->result_array();
        $a['id_soal'] = $id_soal;

        $this->load->view('Guru/template_guru',$a);

    }

    public function edit($id_soal){

            $config['upload_path']          = 'assets/img/pertanyaan';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 1024;
            $config['max_height']           = 1024;
                 
            $this->upload->initialize($config);
                 
            if ( ! $this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }


        if($this->input->post('submit')){
                    $id_soal = $this->input->post('id_soal');
                    $id_pertanyaan = $this->input->post('id_pertanyaan');
                    $jenis_pertanyaan = $this->input->post('jenis_pertanyaan');
                    $pertanyaan = $this->input->post('pertanyaan');
                    $opsi = $this->input->post('opsi[]');
                    $isi_opsi = $this->input->post('isi_opsi[]');
                    $jawaban = $this->input->post('jawaban');

            $object = array(
                        "id_soal" => $id_soal,
                        "jenis_pertanyaan" => $jenis_pertanyaan,
                        "pertanyaan" => $pertanyaan,
                        "gambar" => $gambar_pertanyaan,
            );

            $i = 0;
                    foreach ($isi_opsi as $key => $row) {

                        $object_opsi = array(
                        "id_pertanyaan" => $id_pertanyaan,
                        "opsi" => $opsi[$i],
                        "isi_opsi" => $row,
                        "jawaban" => ($jawaban==$i++)?1:0,
                        );
            }

        $this->db->where('id_pertanyaan', $is_pertanyaan);
        $this->db->update('pertanyaan',$object);

        $this->db->where('id_opsi', $opsi_jawaban);
        $this->db->update('opsi_jawaban',$object_opsi);

        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
        redirect('Guru/cpertanyaan_g');
        }else{

            $a['username'] = $this->session->userdata('username');
            $a['p']='Guru/soal_g/veditpertanyaan_g';
            $a['id_soal'] = $id_soal;
            $a['data'] = $this->input->post();
            $a['editdata'] = $this->db->where('id_soal',$id_soal)->join('opsi_jawaban','pertanyaan.id_pertanyaan=opsi_jawaban.id_pertanyaan')->get('pertanyaan')->result_array();
            $this->load->view('Guru/template_guru',$a);
        }
        
    
    }




}