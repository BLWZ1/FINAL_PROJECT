<?php

class activity extends CI_Controller
{
    
    public function about()
    {
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header', $data);
        $this->load->view('about');
        $this->load->view('head/footer');
        
    }
    public function contact(){
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header', $data);
        $this->load->view('contact');
        $this->load->view('head/footer');
    }
    public function blog(){
        $data = [];
        $email =  $this->session->userdata('email');
        if (!empty($email)) {
            $data['user'] = $this->users->getUser($email);
        }
        $this->load->view('head/header', $data);
        $this->load->view('blog');
        $this->load->view('head/footer');
    }

    public function booking($id){      
        $data = [];
        $email =  $this->session->userdata('email');
        if (empty($email)) {
            Redirect(base_url('/login'));
        }
        $data['room'] = $this->activitys->getroombyId($id);
        $data['user'] = $this->users->getUser($email);
        if ($data['room'] == NULL ) {
            Redirect('base_url(/booking)');
        } 
        $data['type'] = $this->activitys->getroombytype($data['room']->kindRoom);
        $date = date('Y-m-d H:i:s');
        if($this->input->post('submit') != NULL)
        {
            $input = $this->input->post();
            $input['customerId'] = $data['user']->customerId;
            $input['roomId'] = $id;
            $data['status'] = 0;
            $bookingDetail = $this->activitys->getBookingDetail($id);          
            if($data['room']->quantity == 0 || $data['room']->statusRoom != 'available'){
                $data['message']= "The room not available ";
            }elseif(strtotime($input['checkout']) < strtotime($input['checkin'])){
                $data['message']= " Please choose date check in better than date check out";
            }elseif(strtotime($input['checkout']) < strtotime($date) || strtotime($input['checkin']) < strtotime($date)){
                $data['message']= "Please can't choose previous time date";
            }else {
                $this->activitys->createBooking($input);
                $data['status'] = 1;
                $data['message'] = "Booking room successfully";
            }

            // if ($data['room']->statusRoom != 'available'  && strtotime($bookingDetail->checkoutDate) > strtotime($input['checkin'])) {
            //     $data['message']= "The room not available/ after day $bookingDetail->checkoutDate will have available";
            // }elseif(strtotime($input['checkout']) < strtotime($input['checkin'])){
            //     $data['message']= "Please choose date check in better than date check out";
            // }elseif(strtotime($input['checkout']) < strtotime($date) || strtotime($input['checkin']) < strtotime($date)){
            //     $data['message']= "Please can't choose previous time date";
            // }else{
            //     $data['status'] = 1;
            //     $data['message'] = "Booking room successfully";
            //     $input['customerId'] = $data['user']->customerId;
            //     $input['roomId'] = $data['room']->roomId;
                
            //     $this->activitys->createBooking($input);
                

            //     $this->activitys->updateStatusRoom($data['room']->roomId);
            // }

        }
    
        $this->load->view('head/header', $data);
        $this->load->view('booking',$data);
        $this->load->view('head/footer');
    }
   

}
?>