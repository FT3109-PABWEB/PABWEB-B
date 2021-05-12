<?php

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Mardira";
    }

    public function hello_model()
    {

        // pemuatan model
        $this->load->model('Hello_model');
        // pemanggilan model
        $data = $this->Hello_model->hello_mardira();
        echo $data;
    }

    public function hello_view()
    {
        // memuat view
        $this->load->view('hello_view');
    }

    // penggunaan pola desain MVC
    public function hello_mvc()
    {
        // load model
        $this->load->model('Hello_model');
        // akses model
        $data['mvc'] = $this->Hello_model->mardira_mvc();
        $this->load->view('hello_view', $data);
    }
}
