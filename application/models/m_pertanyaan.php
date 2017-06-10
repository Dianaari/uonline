<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_pertanyaan extends CI_Model
{
    public function ModelPertanyaan(){
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->join('opsi_jawaban','pertanyaan.id_pertanyaan = opsi_jawaban.id_pertanyaan');
        $this->db->join('soal','soal.id_soal=pertanyaan.id_soal');
        $this->db->where('jawaban', 1);

        return $this->db->get();

    }

    public function get_input($id_soal){
        $query=$this->db->query("select * from pertanyaan join opsi_jawaban using(id_pertanyaan) join soal using(id_soal) where id_soal ='$id_soal' and jawaban=1 ",false);
        return $query->result_array();

/*        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->join('opsi_jawaban','id_pertanyaan');
        $this->db->join('soal','id_soal');
        $this->db->where('jawaban', 1);
        $this->db->where('pertanyaan.id_soal',$id_soal);
        return $this->db->get();*/

    }


    public function del_pertanyaan($id_pertanyaan){

        $this->db->where('id_pertanyaan', $id_pertanyaan);
        $this->db->delete('pertanyaan');
    }

    public function edit_pertanyaan($id_pertanyaan,$data){
        
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->join('opsi_jawaban','pertanyaan.id_pertanyaan = opsi_jawaban.id_pertanyaan');
        $this->db->join('soal','soal.id_soal=pertanyaan.id_soal');
        $this->db->where('id_pertanyaan', $id_pertanyaan);
        $this->db->update('pertanyaan',$data);
    }

    public function insert($object){
        $this->db->insert('pertanyaan',$object);
        $insert_id = $this->db->insert_id();

          return  $insert_id;
    }
    
    public function insert_opsi($object_opsi){
        $this->db->insert('opsi_jawaban',$object_opsi);
    }

    public function tampil_soal(){
    $this->db->select('*');
    $this->db->from('pertanyaan');
    $this->db->join('opsi_jawaban','pertanyaan.id_pertanyaan = opsi_jawaban.id_pertanyaan');
    $this->db->join('soal','soal.id_soal=pertanyaan.id_soal');
    return $this->db->get();

    }

}