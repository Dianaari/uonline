 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
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
        $a['p']='Admin/siswa/v_siswa';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $this->load->view('vwHeader',$a);
        }

    public function delete($nis){

        $a['username'] = $this->session->userdata('username');
        $this->m_siswa->del_siswa($nis);
        $a['p']='Admin/siswa/v_siswa';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('vwHeader',$a);

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

        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
            &times;</span></button>Data Berhasil disimpan</div>");
        redirect('Admin/siswa');
        }else{
            
            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/siswa/v_editsiswa';
            $a['editdata'] = $this->db->where('siswa.nis',$nis)->join('user','user.username=siswa.username')->join('kelas_siswa','siswa.nis=kelas_siswa.nis')->get('siswa')->result_array();
            $a['kelas'] = $this->m_kelas->kelas_siswa();
            $a['tahun'] = $this->m_siswa->getTahun()->result();
            $this->load->view('vwHeader',$a);
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
                $username = $this->input->post('username');
                $check=$this->m_siswa->check($nis);
                $check2=$this->m_siswa->check2($username);
                if($check->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' 
                    class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button>NIS sudah terdaftar sebagai Siswa</div>";
                    $a['p']='Admin/siswa/v_addsiswa';
                    $this->load->view('vwHeader',$a);
                }else if ($check2->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' 
                    class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button>Username sudah digunakan. Silahkan ganti dengan username baru!</div>";
                    $a['p']='Admin/siswa/v_addsiswa';
                    $this->load->view('vwHeader',$a);
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
                    
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' 
                        class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                        </button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/siswa');
                    
                }
            }else{
                $a['message']="";
                $a['p']='Admin/siswa/v_addsiswa';
                $this->load->view('vwHeader',$a);
            }
    }

    public function tampil(){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/siswa/v_addsiswa';
        $a['siswa'] = $this->m_siswa->ModelSiswa();
        $a['kelas'] = $this->m_kelas->kelas_siswa();
        $a['tahun'] = $this->m_siswa->getTahun()->result();
        $a['message']=validation_errors();
        
        $this->load->view('vwHeader',$a);
    }

    public function peserta($id_kelas){
        $a['p']='Admin/ujian/v_siswaujian';
        $a['siswa'] = $this->m_siswa->getSiswaKelas($id_kelas);
        $this->load->view('vwHeader',$a);
        }


    public function detail($nis) {
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/siswa/v_detailsiswa';
        $a['siswa'] = $this->m_siswa->get_detail($nis)->row_array();

        $this->load->view('vwHeader',$a);
        
    }


/*    public function checksiswa(){ //dashboard siswa
        $hasil = $this->m_siswa->cek_siswa($nis, $nama_siswa, $id_kelas);

            if($hasil->num_rows()>0){
            foreach($hasil->result() as $data){
                $sess_data['nis'] = $data->nis;
                $sess_data['nama_siswa'] = $data->nama_siswa;

                $this->session->set_userdata($sess_data);
            }
             if($this->session->userdata('level') == 'siswa'){
                redirect('home/indexSiswa');
            }

            }
     

    }*/


}