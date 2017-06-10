<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function cek_user($nama_pengguna, $kata_sandi) {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('username', $nama_pengguna);
        $this->db->where('password', md5($kata_sandi));
        return $this->db->get();
    }

    function cek_usersiswa($nama_pengguna, $kata_sandi) {
        return $query = $this->db->query("select * from user join siswa using(username) join kelas_siswa using(nis) 
                                        join kelas using(id_kelas) join soal using(id_kelas) join mapel using(id_mapel) join ujian using(id_ujian) 
                                        join guru_mapel where siswa.username = '$nama_pengguna' and password = '$kata_sandi'");

    }

    function get_alluser() {
        $this->db->from($this->tabel);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }


}