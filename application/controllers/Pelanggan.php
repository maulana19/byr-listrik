<?php 
defined('BASEPATH')or exit('Maaf,Alamat Yang tuju Tidak Ditemukan');



class pelanggan extends CI_Controller
{
	
	public function __construct(){
		parent :: __construct();

		$this->load->helper(array('url'));
		$this->load->model('model_pelanggan');
		$this->load->model('model_listrik');
	}
	public function index()
	{
		$this->load->database();
		 		$jumlah_data  = $this->model_pelanggan->jumlah_data();
		 		$this->load->library('pagination');
		 		$config['base_url'] 		= base_url().'index.php/pelanggan/index/';
		 		$config['total_rows'] 		= $jumlah_data;
		 		$config['per_page'] 		= 2;
		        $config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';
		 		$from = $this->uri->segment(3);
		 		$this->pagination->initialize($config);
		 		$data['pelanggan'] = $this->model_pelanggan->data($config['per_page'],$from);
		 		$this->load->view('admin/pelanggan/data_pelanggan',$data);
	}
	public function harga(){
		$data = array(
			'title'        => 'Pilih Harga',
			'data_listrik' => $this->model_listrik->get_all(),);
			$this->load->view('admin/pelanggan/harga',$data);
	}
	public function tambah(){
		$data = array(
			'title'   => 'Tambah Data Pelanggan',
			'data_listrik' => $this->model_listrik->get_all(),);
		$this->load->view('admin/pelanggan/tambah_pelanggan',$data);
	}
 	public function simpan(){
 		$data = array(
			'kode_pelanggan' => $this->input->post("kode_pelanggan"),
			'nama'  => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
			'telepon' => $this->input->post("telepon"),
			'gender' => $this->input->post("gender"),
			'daya' => $this->input->post("daya"),  );
 		$this->model_pelanggan->simpan($data);

 		redirect('pelanggan/');
 	}
 	public function edit($id){
 		$id   = $this->uri->segment(3); 
 		$data = array(
 			'title' 		=> 'Edit Data Pelanggan',
 			'gender'		 => ['Perempuan','Laki-Laki'],
 			'data_pelanggan'  => $this->model_pelanggan->edit($id),
			'data_listrik' => $this->model_listrik->get_all(), 
 		);
 		$this->load->view('admin/pelanggan/edit_pelanggan',$data);
 	}

 	public function update(){
 		$id['id']  = $this->input->post("id");
 		$data = array(
			'kode_pelanggan' => $this->input->post("kode_pelanggan"),
			'nama'  => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
			'telepon' => $this->input->post("telepon"),
			'gender' => $this->input->post("gender"),
			'daya' => $this->input->post("daya"),
		);
		$this->model_pelanggan->update($data, $id);

		redirect('pelanggan/');
 	}
 	public function hapus($id){
 		$this->db->where('id', $id);
 		$this->db->delete('pelanggan');
 		
 		redirect('pelanggan/');
 	}
 	public function cari_pelanggan(){
	 	$key = $this->input->post('carian');
		 		$this->load->library('pagination');

	 	$data =  array(
	 		'title'   => 'Data Pelanggan',
	 		'pelanggan'=> $this->model_pelanggan->cari_pelanggan($key),);

	 	$this->load->view('admin/pelanggan/data_pelanggan',$data);
	 }
}

 ?>