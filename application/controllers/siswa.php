<?php
class siswa extends CI_Controller{

	function dataku()
	{
		$this->load->model('Siswa_Model');


		$data['siswa']=$this->Siswa_Model->tampilkan_data();

		$this->load->view('Siswa_View',$data);

	}

}