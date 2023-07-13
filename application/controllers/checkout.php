<?php

class Home extends CI_Controller
{
    
    public function index()
    {
        // Load view
        $this->load->view('head/header');
        

        $this->load->view('checkout');
        
        $this->load->view('head/footer');
    }

}
?>