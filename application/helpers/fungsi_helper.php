<?php 
function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id');
	if ($user_session) {
		redirect('admin/listrik/data_listrik');
	}
}
function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id');
	if ($user_session) {
		redirect('login');
	}
}
function check_admin(){
	$ci =& get_instance();
	$ci->load->library('fungsi');
	if ($ci->fungsi->user_login()->akses != 1) {
		redirect('admin/listrik/data_listrik');
	}
}


 ?>