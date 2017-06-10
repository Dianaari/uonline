<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_guru extends CI_Model
{
    public function ModelGuru(){
    $query=$this->db->query("select * from user join guru on user.username=guru.username",false);
    return $query->result_array();
    }

    public function del_guru($nip){

        $this->db->where('nip', $nip);
        $this->db->delete('guru');
    }

    public function edit_guru($username,$data){

        $this->db->where('username', $username);
        $this->db->update('user',$data);
    }

    public function insert($data){
        $this->db->insert('guru',$data);
    }

    public function insert_user($data){
        $this->db->insert('user',$data);
    }

    public function check($nip)
    {
        $this->db->where("nip",$nip);
        return $this->db->get('guru');
    }

    public function check2($username)
    {
        $this->db->where("username",$username);
        return $this->db->get('user');
    }


    public function nama_guru(){
        $query=$this->db->query("select id_guru, nama_guru from kelas ",false);
        return $query->result_array();

    }

    public function get_detail($nip) {

        $this->db->from('guru');
        $this->db->join('user','user.username=guru.username');
        $this->db->where('nip', $nip);
        return $this->db->get();
    }

    public function tampil_user(){
        $query=$this->db->query("select * from user join guru on user.username=guru.username",false);
        return $query->result_array();
    }


}
