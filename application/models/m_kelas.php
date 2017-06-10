<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kelas extends CI_Model
{
    public function ModelKelas(){
    $this->db->select('*');
    $this->db->from('kelas');
    return $this->db->get();

    }

    public function del_kelas($id_kls){

        $this->db->where('id_kelas', $id_kls);
        $this->db->delete('kelas');
    }

    public function edit_kelas($id_kls,$data){

        $this->db->where('id_kelas', $id_kls);
        $this->db->update('kelas',$data);
    }

    public function insert($data){
        $this->db->insert('kelas',$data);
    }

    public function insert_kls($data){
        $this->db->insert('kelas_siswa',$data);
    }

    public function kelas_siswa(){
        $query=$this->db->query("select id_kelas, CONCAT(jenjang,' ', jenis_kelas,' ', nama_kelas) AS 'kelas' from kelas ",false);
        return $query->result_array();

    }

    public function jenjang_kelas(){
        $query=$this->db->query("select id_kelas, CONCAT(jenjang,' ', jenis_kelas) AS 'jenjang_kelas' from kelas group by jenjang_kelas",false);
        return $query->result_array();

    }
    // public function getTahun(){
    //     return $this->db->get('tahun');
    // }
    

}