<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_password extends CI_Model{
	    
		public  function check($username,$password){
			$this->db->select("*");
        	$this->db->from('user');
			$this->db->where("username",$username);
	        $this->db->where("password",$password);
	        return $this->db->get();
	    }
		
		public function update($username,$passbaru){
			return $query = $this->db->query("update user set password = '$passbaru' where username = '$username'");
		}

	}