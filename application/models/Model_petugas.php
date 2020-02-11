<?php 
defined('BASEPATH') or exit('Maaf,Alamat Yang tuju Tidak Ditemukan');


class Model_petugas extends CI_model
{
	public function get_all(){
		$query = $this->db->select('*')
				->from('petugas')
				->order_by('id','DESC')
				->get();
		return $query->result();
	}
	public function simpan($data){
		$query = $this->db->insert("petugas",$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function edit($id){
		$query = $this->db->where("id",$id)
				->get('petugas');
		if ($query) {
			return $query->row();
		}else{
			return false;
		}
	}
	public function update($data,$id){
		$query = $this->db->update("petugas", $data, $id);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function hapus($id){
		$query = $this->db->delete("petugas", $id);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	public function cari_petugas($key){
		$q = $this->db->select('*')
					->from("petugas")
					->like('kode_petugas',$key)
					->or_like('nama',$key)
					->get();
				return $q->result();
	}
	public function data($number,$offset){
		return $query = $this->db->get('petugas',$number,$offset)->result();
	}
	public function jumlah_data(){
		return $query = $this->db->get('petugas')->num_rows();
	}

}

 ?>