<?php if (! defined('BASEPATH')) exit('No direct script access allowed');


class Login_model extends CI_model
{
	
	public function get($username){
		$this->db->where('username', $username);
		//Untuk Menambahkan Where Clause : username='$username'
		$result = $this->db->get('petugas')->row();
		//Untuk Mengkeksekusi dan Mengambil data hasil query
		return $result;
	} 
}

 ?>