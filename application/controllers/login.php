<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		
		$this->load->model('m_login');
		
	}

	public function index() {
		$this->load->view('v_login');
	}

	public function tampil_loginpengelola() {
		$this->load->view('v_loginpengelola');
	}

	public function tampil_loginsiswa(){
        $this->load->view('Siswa/v_loginsiswa');

	}
 
	public function cek_login() {
		$nama_pengguna = $this->input->post('nama_pengguna');
		$kata_sandi = $this->input->post('kata_sandi');
		$hasil = $this->m_login->cek_user($nama_pengguna, $kata_sandi);
		
		if($hasil->num_rows()>0){
       		foreach($hasil->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}
			 if($this->session->userdata('level') == 'admin')
			{
				redirect('home');
			}
			else if($this->session->userdata('level') == 'guru')
			{
				redirect('home/indexGuru');
			}
			else
			{
				$this->session->set_flashdata('Pesan',"<div class='alert alert-danger alert-dismissible' 
				role='alert'>Kombinasi <strong>Username</strong> dan <strong>Password</strong> tidak valid</div>");
	            redirect('login/tampil_loginpengelola');
			}
		}
		else {
            $this->session->set_flashdata('Pesan',"<div class='alert alert-danger alert-dismissible' 
			role='alert'>Kombinasi <strong>Username</strong> dan <strong>Password</strong> tidak valid</div>");
            redirect('login/tampil_loginpengelola');
		}
	}

	public function login_siswa() {
		$nama_pengguna = $this->input->post('nama_pengguna');
		$kata_sandi = md5($this->input->post('kata_sandi'));
		$hasil = $this->m_login->cek_usersiswa($nama_pengguna, $kata_sandi);
		
		if($hasil->num_rows()>0){
       		foreach($hasil->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['level'] = $data->level;
				$sess_data['nama_siswa'] = $data->nama_siswa;
				$sess_data['jenkel'] = $data->jenkel;
				$sess_data['nis'] = $data->nis;
				$sess_data['jenjang'] = $data->jenjang;
				$sess_data['jenis_kelas'] = $data->jenis_kelas;
				$sess_data['nama_kelas'] = $data->nama_kelas;
				$sess_data['nama_ujian'] = $data->nama_ujian;
				$sess_data['nama_mapel'] = $data->nama_mapel;
				
				
				$this->session->set_userdata($sess_data);
			}
			 if($this->session->userdata('level') == 'siswa')
			{
				redirect('home/indexSiswa');
			}
		}
		else {
            $this->session->set_flashdata('Pesan',"<div class='alert alert-danger alert-dismissible' 
			role='alert'>Kombinasi <strong>Username</strong> dan <strong>Password</strong> tidak valid</div>");
            redirect('login/tampil_loginsiswa');
		}
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}	

}

?>