<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_guru');
    }

    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/guru/v_guru';
        $a['guru'] = $this->m_guru->ModelGuru();
        $this->load->view('vwHeader',$a);
        }


    public function delete($nip){

        $a['username'] = $this->session->userdata('username');
        $this->m_guru->del_guru($nip);
        $a['p']='Admin/guru/v_guru';
        $a['guru'] = $this->m_guru->ModelGuru();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");

        $this->load->view('vwHeader',$a);

    }

    public function edit($nip){

        if($this->input->post('submit')){
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $level = $this->input->post('level');
            $nip1 = $this->input->post('nip');
            $nama_guru = $this->input->post('nama_guru');
            $no_telp = $this->input->post('no_telp');

            $object_user = array(
                "username" => $username,
                "password" => $password,
                "level" => $level,
            );

            $object = array(
                "nip" => $nip1,
                "nama_guru" => $nama_guru,
                "no_telp" => $no_telp,
/*                "username" => $username,*/
            );
            print_r(array($object_user,$object));

        $this->db->where('username', $username);
        $this->db->update('user',$object_user);

        $this->db->where('nip', $nip);
        $this->db->update('guru',$object);

        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' 
            class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
        redirect('Admin/guru');
        }else{
            
            $a['username'] = $this->session->userdata('username');
            $a['editdata'] = $this->db->where('nip',$nip)->join('user','user.username=guru.username')->get('guru')->result_array();
            $a['p']='Admin/guru/v_editguru';
            $this->load->view('vwHeader',$a);
        }
        
    }


    public function add(){
            $this->form_validation->set_rules('username','username', 'trim|required');
            $this->form_validation->set_rules('password','password', 'trim|required');
            $this->form_validation->set_rules('level','level', 'trim|required');
            $this->form_validation->set_rules('nip','nip', 'trim|required');
            $this->form_validation->set_rules('nama_guru','nama_guru', 'trim|required');
            $this->form_validation->set_rules('no_telp','no_telp', 'trim|required');

            if($this->form_validation->run() === TRUE){
                $nip = $this->input->post('nip');
                $username = $this->input->post('username');
                $check=$this->m_guru->check($nip);
                $check2=$this->m_guru->check2($username);
                if($check->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' 
                    class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button>NIP sudah terdaftar sebagai Guru</div>";
                    $a['p']='Admin/guru/v_addguru'; 
                    $this->load->view('vwHeader',$a);
                }else if($check2->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' 
                    class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button>Username sudah digunakan. Silahkan ganti dengan username baru!</div>";
                    $a['p']='Admin/guru/v_addguru';
                    $this->load->view('vwHeader',$a);
                }
                else{
                    $username = $this->input->post('username');
                    $password = md5($this->input->post('password'));
                    $level = $this->input->post('level');
                    $nip = $this->input->post('nip');
                    $nama_guru = $this->input->post('nama_guru');
                    $no_telp = $this->input->post('no_telp');

                    $object_user = array(
                        "username" => $username,
                        "password" => $password,
                        "level" => $level,
                    );

                    $object = array(
                        "nip" => $nip,
                        "nama_guru" => $nama_guru,
                        "no_telp" => $no_telp,
                        "username" => $username,
                    );

                    $this->m_guru->insert_user($object_user);
                    $this->m_guru->insert($object);

                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                        </button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/guru');
                
                }
            }else{
                $a['message']="";
                $a['p']='Admin/guru/v_addguru'; 
                $this->load->view('vwHeader',$a);
            }
    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/guru/v_addguru';
        $a['guru'] = $this->m_guru->ModelGuru();
        $a['message']=validation_errors();
        $this->load->view('vwHeader',$a);
    }

    public function detail($nip) {
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/guru/v_detailguru';
        $a['guru'] = $this->m_guru->get_detail($nip)->row_array();
        $this->load->view('vwHeader',$a);
        
    }






}