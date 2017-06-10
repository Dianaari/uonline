<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tahun extends CI_Model{

    public function ModelTahun(){
    $this->db->select('*');
    $this->db->from('tahun');
    return $this->db->get();

    }

    public function del_tahun($id_tahun){

        $this->db->where('id_tahun', $id_tahun);
        $this->db->delete('tahun');
    }

    public function edit_tahun($nip,$data){

        $this->db->where('id_tahun', $id_tahun);
        $this->db->update('tahun',$data);

    }

    public function insert($data){
        $this->db->insert('tahun',$data);
    }

    





}