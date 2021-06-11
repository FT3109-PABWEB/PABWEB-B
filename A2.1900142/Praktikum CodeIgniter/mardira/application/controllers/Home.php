<?php
class Home extends CI_Controller
{
    public function index()
    {
        parent __construct();
        $this->load->helper('Login');
        cek_session();
    }
    public function index()
    {
        $this->load->view('home/home_view');
    }
}