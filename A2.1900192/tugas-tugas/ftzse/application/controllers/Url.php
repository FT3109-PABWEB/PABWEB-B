<?php 

class Url extends CI_Controller
{
	public function index()
	{
		$this->load->view('url_view');
	}

	public function detil($id)
	{
		$id = $this->uri->segment(3);
		$data['segment'] = $id;
		$this->load->view('halaman_detail',$data);
	}
	public function blank()
	{
		echo "halaman ini kosong silakan kembali";
		redirect('halaman');
	}
}