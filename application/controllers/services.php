<?php
class services extends CI_Controller
{
    



    public function mylist()
    {
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        
        
        $data['room'] = $this->activitys->getRoom();
        
        




        $this->load->view('head/header',$data);
        
        $this->load->view('listroom',$data);
        
        $this->load->view('head/footer');
    }
    public function myres()
    {
        // Load view
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        
        $this->load->view('head/header',$data);
        
        $this->load->view('restaurant',$data);
        
        $this->load->view('head/footer');
    }
    public function mypool()
    {
        // Load view
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header',$data);
        
        $this->load->view('pab',$data);
        
        $this->load->view('head/footer');
    }
    public function myentertainment()
    
    {
        // Load view
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header',$data);
        
        $this->load->view('entertainment',$data);
        
        $this->load->view('head/footer');
    }
    public function myspa()
    {
        // Load view
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header',$data);
        
        $this->load->view('mas',$data);
        
        $this->load->view('head/footer');
    }
    public function mytour()
    {
        // Load view
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header',$data);
        
        $this->load->view('tour',$data);
        
        $this->load->view('head/footer');
    }
}
?>