<?php 
defined('BASEPATH')or exit('Maaf,Alamat Yang tuju Tidak Ditemukan');



class petugas extends CI_Controller
{
	
	public function __construct(){
		parent :: __construct();

		$this->load->model('model_petugas');
	}
	public function index()
	{
$this->load->database();
 		$jumlah_data  = $this->model_petugas->jumlah_data();
 		$this->load->library('pagination');
 		$config['base_url'] = base_url().'index.php/petugas/index/';
 		$config['total_rows'] = $jumlah_data;
 		$config['per_page'] = 2;
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
 		$data['tugas'] = $this->model_petugas->data($config['per_page'],$from);
		$data = array(
			'title' => 'Daftar Petugas',
			'gender'=> ['Perempuan','Laki-Laki'],
			'akses' => ['Petugas','Admin'],
			'tugas' => $this->model_petugas->get_all(), 
		);
 		$this->load->view('admin/petugas/data_petugas',$data);
	}
	public function tambah(){
		$data = array(
			'title'   => 'Tambah Data Petugas');
		$this->load->view('admin/petugas/tambah_petugas',$data);
	}
 	public function simpan(){
 		$data = array(
			'kode_petugas' => $this->input->post("kode_petugas"),
			'nama'  => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
			'telepon' => $this->input->post("telepon"),
			'gender' => $this->input->post("gender"),
			'akses'   => $this->input->post("akses"),
			'username' => $this->input->post("username"),
			'password' => $this->input->post("password"),  );
 		$this->model_petugas->simpan($data);

 		redirect('petugas/');
 	}
 	public function edit($id){
 		$id   = $this->uri->segment(3); 
 		$data = array(
 			'title' 		=> 'Edit Data Petugas',
 			'gender'		 => ['Perempuan','Laki-Laki'],
			'akses'		 => ['Pegawai','Admin'],
 			'data_petugas'  => $this->model_petugas->edit($id), 
 		);
 		$this->load->view('admin/petugas/edit_petugas',$data);
 	}
 	public function update(){
 		$id['id']  = $this->input->post("id");
 		$data = array(
 			'kode_petugas' => $this->input->post("kode_petugas"),
			'nama'  => $this->input->post("nama"),
			'alamat' => $this->input->post("alamat"),
			'telepon' => $this->input->post("telepon"),
			'gender' => $this->input->post("gender"),
			'akses'   => $this->input->post("akses"),				
			'username' => $this->input->post("username"),
			'password' => $this->input->post("password"), 
		);
		$this->model_petugas->update($data, $id);

		redirect('petugas/');
 	}
 	public function hapus($id){
 		$this->db->where('id', $id);
 		$this->db->delete('petugas');
 		
 		redirect('petugas/');
 	}
 	public function cari(){
 		$key = $this->input->post('carian');
 		$this->load->library('pagination');
 		$data = array (
			'title' => 'Tampil Daftar Petugas',
			'tugas' => $this->model_petugas->cari_petugas($key),
 			'gender'		 => ['Perempuan','Laki-Laki'],
			'akses'		 => ['Pegawai','Admin'],
 		);
 		$this->load->view('admin/petugas/data_petugas',$data);
 	}
}

 ?>