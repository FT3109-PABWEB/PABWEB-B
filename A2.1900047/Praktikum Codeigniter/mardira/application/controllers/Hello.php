<?php

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Mardira";
    }

    public function hello_model()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->hello_mardira();
        echo $data;
    }


}