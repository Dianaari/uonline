 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_mapel');
        $this->load->model('m_kelas');
    }


    public function index(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/mapel/v_mapel';
        $a['mapel'] = $this->m_mapel->ModelMapel()->result_array();
        $this->load->view('vwHeader',$a);
        }

    public function delete($id_mapel){

        $a['username'] = $this->session->userdata('username');

        $this->m_mapel->del_mapel($id_mapel);
        $a['p']='Admin/mapel/v_mapel';
        $a['mapel'] = $this->m_mapel->ModelMapel()->result_array();
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        $this->load->view('vwHeader',$a);

    }

    public function edit($id_mapel){

        if($this->input->post('submit')){
            $id_mapel1 = $this->input->post('id_mapel');
            $nama_mapel = $this->input->post('nama_mapel');
            $kkm = $this->input->post('kkm');

            $object = array(
                        "id_mapel" => $id_mapel1,
                        "nama_mapel" => $nama_mapel,
                        "kkm" => $kkm, 
            ); 

        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('mapel',$object);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
            </button>Data Berhasil disimpan</div>");
        redirect('Admin/mapel');
        }else{
            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/mapel/v_editmapel';
            $a['editdata'] = $this->db->where('id_mapel',$id_mapel)->get('mapel')->result_array();
            $this->load->view('vwHeader',$a);
        }
    }

    public function add_mapel(){
            $this->form_validation->set_rules('id_mapel','id_mapel', 'trim|required');
            $this->form_validation->set_rules('nama_mapel','nama_mapel', 'trim|required');
            $this->form_validation->set_rules('kkm','kkm', 'trim|required');

            if($this->form_validation->run() === TRUE){
                $id_mapel = $this->input->post('id_mapel');
                $check=$this->m_mapel->check($id_mapel);
                if($check->num_rows()!=null){
                    $a['username'] = $this->session->userdata('username');
                    $a['message']="<div class='alert alert-danger' alert-dismissible' role='alert'><button type='button' class='close' 
                    data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                    </button>Id Mapel sudah terdaftar sebagai Mata Pelajaran</div>";
                    $a['p']='Admin/mapel/v_addmapel'; 
                    $this->load->view('vwHeader',$a);
                }else{
                    $id_mapel = $this->input->post('id_mapel');
                    $nama_mapel = $this->input->post('nama_mapel');
                    $kkm = $this->input->post('kkm');

                    $object_mapel = array(
                        "id_mapel" => $id_mapel,
                        "nama_mapel" => $nama_mapel,
                        "kkm" => $kkm,
                    );

                    $this->m_mapel->insert($object_mapel);
                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
                        </button>Data Berhasil ditambahkan</div>");
                    redirect('Admin/mapel');
                }
            }else{
                $a['message']="";
                $a['p']='Admin/mapel/v_addmapel'; 
                $this->load->view('vwHeader',$a);
            }
    }

    public function tampil_addmapel(){
        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/mapel/v_addmapel';
        $a['mapel'] = $this->m_mapel->ModelMapel()->result_array();
        $a['message']=validation_errors();
        $this->load->view('vwHeader',$a);
    }

    public function add_pengajar(){
            $this->form_validation->set_rules('nip','nip', 'trim|required');
            $this->form_validation->set_rules('mapel','mapel', 'trim|required');
            $this->form_validation->set_rules('kelas','kelas', 'trim|required');
            $this->form_validation->set_rules('tahun','tahun', 'trim|required');

            if($this->form_validation->run() === FALSE){
                $a['username'] = $this->session->userdata('username');
                $a['p']='Admin/mapel/v_detailmapel';
                $this->load->view('vwHeader',$a);
            }else{
                    $mapel = $this->input->post('mapel');
                    $nip = $this->input->post('nip');
                    $kelas = $this->input->post('kelas');
                    $tahun = $this->input->post('tahun');

                    $object_pengajar = array(
                        "id_mapel" => $mapel,
                        "nip" => $nip,
                        "id_kelas" => $kelas,
                        "id_tahun" => $tahun,
            );
                    $this->m_mapel->insert_pengajar($object_pengajar);

                    $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
                        &times;</span></button>Data Berhasil ditambahkan</div>");
                    $id_mapel=$this->agent->referrer();
                    redirect($id_mapel);
            }
    }

    public function tampil_addpengajar($id_mapel){
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/mapel/v_addpengajar';
        $a['pengajar'] = $this->m_mapel->get_detail($id_mapel);
        $a['guru'] = $this->m_mapel->getGuru()->result();
        $a['kelas'] = $this->m_kelas->kelas_siswa();
        $a['tahun'] = $this->m_mapel->getTahun()->result();

        $this->load->view('vwHeader',$a);

    }

    public function edit_pengajar($id_mapel){ // gak jadi dipake

        if($this->input->post('submit')){
                    $id_grmapel = $this->input->post('id_grmapel');
                    $mapel = $this->input->post('mapel');
                    $nip = $this->input->post('nip');
                    $kelas = $this->input->post('kelas');
                    $tahun = $this->input->post('tahun');

                    $object_pengajar = array(
                        "id_grmapel" => $id_grmapel,
                        "id_mapel" => $mapel,
                        "nip" => $nip,
                        "id_kelas" => $kelas,
                        "id_tahun" => $tahun,
            );

        $this->db->where('id_grmapel', $id_grmapel);
        $this->db->update('guru_mapel',$object_pengajar);
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Berhasil disimpan</div>");
        redirect('Admin/mapel');
        }else{
            $a['username'] = $this->session->userdata('username');
            $a['p']='Admin/mapel/v_editpengajar';
            $a['editdata'] = $this->db->where('id_mapel',$id_mapel)->get('guru_mapel')->result_array();
            $a['guru'] = $this->m_mapel->getGuru()->result();
            $a['kelas'] = $this->m_kelas->kelas_siswa();
            $a['tahun'] = $this->m_mapel->getTahun()->result();
            $this->load->view('vwHeader',$a);
        }
        
    }

    public function detail($id_mapel) { //tampil halaman lihat pengajar atau detail mapel
        $this->load->library('form_validation');

        $a['username'] = $this->session->userdata('username');
        $a['p']='Admin/mapel/v_detailmapel';
        $a['pengajar'] = $this->m_mapel->get_detail($id_mapel);
        $this->load->view('vwHeader',$a);          
    }

    public function delete_pengajar($id_grmapel){
/*        $a['username'] = $this->session->userdata('username');
        
        $a['mapel'] = $this->m_mapel->get_detail_hapus($nip);*/
        $this->m_mapel->del_pengajar($id_grmapel);
        $id_mapel=$this->agent->referrer();
        /*$a['p']='Admin/mapel/v_detailmapel';*/
        $this->session->set_flashdata("Pesan", "<div class='alert alert-success' alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus</div>");
        /*$this->load->view('vwHeader',$a);*/
        redirect($id_mapel);


    }







}