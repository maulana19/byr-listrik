<?php 
defined('BASEPATH') or exit('No Direct Script Access Allowed');

 class Admin extends CI_model
 {
 		 function is_logged_in(){
 		 	return $this->session->userdata('id');
 		 }
 		 function is_role(){
 		 	return $this->session->userdata('akses');
 		 }
 		 function check_login($table,$field1,$field2){
 		 	$this->db->select('*');
 		 	$this->db->from($table);
 		 	$this->db->where($field1);
 		 	$this->db->where($field2);
 		 	$this->db->limit(1);
 		 	$query = $this->db->get();
 		 	if ($query->num_rows()== 0) {
 		 		return FALSE;
 		 	}else{
 		 		return $query->result();
 		 	}
 		 }

 		 function hitung_jumlah_listrik(){
 		 	$query = $this->db->get('daya');
 		 	if ($query->num_rows()>0) {
 		 		return $query->num_rows();
 		 	}else{
 		 		return 0;
 		 	}
 		 }
 		 function hitung_jumlah_pelanggan(){
 		 	$query = $this->db->get('pelanggan');
 		 	if ($query->num_rows()>0) {
 		 		return $query->num_rows();
 		 	}else{
 		 		return 0;
 		 	}
 		 } 		 
 		 function hitung_jumlah_petugas(){
 		 	$query = $this->db->get('petugas');
 		 	if ($query->num_rows()>0) {
 		 		return $query->num_rows();
 		 	}else{
 		 		return 0;
 		 	}
 		 } 		 
 		 function hitung_riwayat(){
 		 	$query = $this->db->get('transaksi');
 		 	if ($query->num_rows()>0) {
 		 		return $query->num_rows();
 		 	}else{
 		 		return 0;
 		 	}
 		 }	
 } ?>