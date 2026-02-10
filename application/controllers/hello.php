<?php

class hello extends CI_Controller {
    
    public function index ()
{
    $data['nama'] = "si cantik";
    $this->load->view('hello_view',$data);
}
    public function namasaya()
    

{
    $data['nama'] = "o";
   $this->load->view('hello_view',$data);
}


}
