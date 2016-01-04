<?php 

class Siswa_Model extends CI_Model{


	function tampilkan_data()

{
		return $this->db->get('siswa');
}	
	
}