<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_ujian extends CI_Model
{

    public function ModelUjian(){
    $this->db->select('');
    $this->db->from('ujian');
    $this->db->join('tahun','tahun.id_tahun = ujian.id_tahun');
    return $this->db->get();

    }

    public function del_ujian($id_ujian){

        $this->db->where('id_ujian', $id_ujian);
        $this->db->delete('ujian');
    }

    public function edit_ujian($nip,$data){

        $this->db->where('id_ujian', $id_ujian);
        $this->db->update('ujian',$data);
    }

    public function insert($data){
        $this->db->insert('ujian',$data);
    }

    public function insert_klsujian($data){
        $this->db->insert('soal',$data);
    }

    public function check($id_ujian)
    {
        $this->db->where("id_ujian",$id_ujian);
        return $this->db->get('ujian');
    }

    public function getTahun(){
        return $this->db->get('tahun');
    }

    public function get_detail($id_ujian) {

        $this->db->from('ujian as u');
        $this->db->join('tahun as t','u.id_tahun = t.id_tahun');
        $this->db->where('u.id_ujian', $id_ujian);
        return $this->db->get('ujian');

    }
    

}