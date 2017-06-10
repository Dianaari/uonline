<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_hasil extends CI_Model
{
    public function ModelHasil(){
    $query=$this->db->query("select * from hasil_ujian join siswa using(nis) join soal using(id_soal) 
    						join mapel using(id_mapel) join ujian using(id_ujian)",false);
    return $query->result_array();

    }

}