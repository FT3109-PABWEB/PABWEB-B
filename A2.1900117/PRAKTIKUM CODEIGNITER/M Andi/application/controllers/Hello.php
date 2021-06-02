<?php

class Hello extends CI_Controller
{
      public function index()
      {
            echo "Hello Andi";
      }

      public function hello_model()
      {
            $this->load->model("Hello Andi");
            $data = $this->Hello_model->hello_Andi();
            echo $data;
      }

      public function hello_view()
      {
            $this->load->view('hello_view');
      }

      public function hello_mvc()
      {
            $this->load->model('Hello_model');
            $data['mvc'] = $this->Hello_model->andi_mvc();
            $this->load->view('hello_view', $data);
      }
}