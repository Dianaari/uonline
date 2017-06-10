<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_siswa extends CI_Model
{
    public function ModelSiswa(){
    $query=$this->db->query("select *, CONCAT(jenjang,' ', jenis_kelas,' ', nama_kelas) AS 'kelas' from user join kelas, kelas_siswa,siswa,tahun 
                        where kelas.id_kelas=kelas_siswa.id_kelas and siswa.nis=kelas_siswa.nis 
                        and kelas_siswa.id_tahun=tahun.id_tahun and user.username=siswa.username",false);
    return $query->result_array();
    }

    // public function check_siswa($nis,$nama_siswa,$kelas,$username){ // model halaman dashboard siswa
    //     $this->db->select("*");
    //     $this->db->from('siswa');
    //     $this->db->where('nis', $nis);
    //     $this->db->where('nama_siswa',$nama_siswa);
    //     /*$this->db->where('kelas',$kelas);*/
    //     $this->db->where('username',$username);
    //     return $this->db->get();
    // }

    public function del_siswa($nis){

        $this->db->where('nis', $nis);
        $this->db->delete('siswa');
    }

    public function edit_siswa($nis,$data){

        $this->db->where('username', $nis);
        $this->db->update('user',$data);
    }

    public function insert($data){
        $this->db->insert('siswa',$data);
    }

    public function insert_user($data){
        $this->db->insert('user',$data);
    }

    public function check($nis)
    {
        $this->db->where("nis",$nis);
        return $this->db->get('siswa');
    }

    public function check2($username)
    {
        $this->db->where("username",$username);
        return $this->db->get('user');
    }

    public function siswa_ujian(){
        $query=$this->db->query("select *, CONCAT(jenjang,' ', jenis_kelas,' ', nama_kelas) AS 'kelas' from kelas join kelas_siswa,siswa where kelas.id_kelas=kelas_siswa.id_kelas and siswa.nis=kelas_siswa.nis",false);
        return $query->result_array();

    }

    public function getSiswaKelas($id_kelas){ //tdk dipakai
    $query=$this->db->query("select *, CONCAT(jenjang,' ', jenis_kelas,' ', nama_kelas) AS 'kelas' from kelas 
                                join kelas_siswa,siswa where kelas.id_kelas=kelas_siswa.id_kelas 
                                and siswa.nis=kelas_siswa.nis AND CONCAT(jenjang,' ', jenis_kelas)='".trim(rawurldecode($id_kelas))."'",false);
    return $query->result_array();
    }

    public function get_detail($nis) {
        $this->db->select('*');
        $this->db->select("CONCAT(kelas.jenjang,' ', kelas.jenis_kelas,' ', kelas.nama_kelas) AS 'kelas'",false);
        $this->db->from('user');
        $this->db->join ('siswa','user.username=siswa.username');
        $this->db->join('kelas_siswa','siswa.nis=kelas_siswa.nis');
        $this->db->join('kelas','kelas.id_kelas=kelas_siswa.id_kelas');
        $this->db->join ('tahun','kelas_siswa.id_tahun=tahun.id_tahun');
        $this->db->where('siswa.nis', $nis);
        return $this->db->get();

    }
    public function getTahun(){
        return $this->db->get('tahun');
    }



}