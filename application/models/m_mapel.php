<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_mapel extends CI_Model
{
    public function ModelMapel(){
    $this->db->select('*');
    $this->db->from('mapel');
    return $this->db->get();

    }

    public function del_mapel($id_mapel){

        $this->db->where('id_mapel', $id_mapel);
        $this->db->delete('mapel');
    }

    public function edit_mapel($id_mapel,$data){

        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('mapel',$data);
    }

    public function insert($data){
        $this->db->insert('mapel',$data);
    }

    public function check($id_mapel)
    {
        $this->db->where("id_mapel",$id_mapel);
        return $this->db->get('mapel');
    }

    public function getGuru(){
        return $this->db->get('guru');
    }

    public function get_detail($id_mapel) { //Pengajar
    $query=$this->db->query("select *, CONCAT(kelas.jenjang,' ', kelas.jenis_kelas,' ', kelas.nama_kelas) AS 'kelas' from guru_mapel 
                        join kelas using (id_kelas) join guru using(nip) join tahun using(id_tahun) where id_mapel ='$id_mapel'",false);
    return $query->result_array();

    }

/*    public function get_detail_hapus($nip) { //Guru mapel
    $query=$this->db->query("select *, CONCAT(kelas.jenjang,' ', kelas.jenis_kelas,' ', kelas.nama_kelas) AS 'kelas' from guru_mapel 
                        join kelas using (id_kelas) join guru using(nip) join tahun using(id_tahun) where nip ='$nip'",false);
    return $query->result_array();

    }
*/
    public function del_pengajar($id_grmapel){

        $this->db->where('id_grmapel', $id_grmapel);
        $this->db->delete('guru_mapel');
    }

    public function edit_pengajar($id_mapel,$data){

        $this->db->where('id_mapel', $id_mapel);
        $this->db->update('guru_mapel',$data);
    }

    public function insert_pengajar($data){
        $this->db->insert('guru_mapel',$data);
    }

    public function getTahun(){
        return $this->db->get('tahun');
    }
    
    

}