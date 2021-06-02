<?php
    class Halaman_utama extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('Login');
            cek_session();
        }
        
        public function index()
        {
            $this->load->view('halaman_utama_v');
            
        }
    }