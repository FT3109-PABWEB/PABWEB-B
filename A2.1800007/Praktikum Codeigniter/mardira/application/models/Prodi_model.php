<?php

class Prodi_model extends CI_Controller
{
	public function lihat_data()
	{
		return $this->db->get('prodi')->result();
	}
}

?>