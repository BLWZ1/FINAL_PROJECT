<?php

class Home extends CI_Controller
{
    
    public function index()
    {
        $error = [];
        
        $data['user'] = [];
        $email = $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
            // Redirect(base_url('/login'));
        }
        
        
           
        if($this->input->post('submit') != NULL){
           $input=$this->input->post();
           $data['user']= $this->users->getUser($email);
           
           if ($input['person'] && $input['children'] == "") {
               $error['message'] = "information required";
           }elseif ($input['checkin'] == "") {
               $error['message'] = "information required";
           }elseif ($input['checkout'] == "") {
               $error['message'] = "information required";
           } else {
               $add = $this->users->booking($data['user']->customerId,$input['status']);
               print_r($add);
               if ($add == true) {
                   $error["message"] = " Booking successfully !";
               }
               $error["message"] = " Booking failed !";
           }
        }

        $this->load->view('head/header',$data);
        $this->load->view('home_view',$data);
        $this->load->view('head/footer');
    }

    
}
?>