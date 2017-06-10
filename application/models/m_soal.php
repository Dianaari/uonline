<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_soal extends CI_Model
{
    public function ModelSoal(){
    $query=$this->db->query("select *, CONCAT(jenjang,' ', jenis_kelas,' ', nama_kelas) AS 'kelas' from kelas 
                            join soal,mapel,ujian where soal.id_mapel = mapel.id_mapel 
                            and soal.id_kelas = kelas.id_kelas and soal.id_ujian = ujian.id_ujian",false);
    return $query->result_array();
    }

    public function del_soal($id_soal){

        $this->db->where('id_soal', $id_soal);
        $this->db->delete('soal');
    }

    public function edit_soal($id_soal,$data){

        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal',$data);
    }

    public function insert($data){
        $this->db->insert('soal',$data);
    }

    public function getMapel(){
        return $this->db->get('mapel');
    }

    public function getIdujian(){
        return $this->db->get('ujian');
    }

    public function get_detail($id_soal) {

        $this->db->select('*');
        $this->db->select("CONCAT(kelas.jenjang,' ', kelas.jenis_kelas,' ', kelas.nama_kelas) AS 'kelas'",false);
        $this->db->from('kelas');
        $this->db->join('mapel','mapel.id_mapel = soal.id_mapel');
        $this->db->join('ujian','ujian.id_ujian = soal.id_ujian');
        $this->db->where('id_soal', $id_soal);
        return $this->db->get('soal');

    }


}