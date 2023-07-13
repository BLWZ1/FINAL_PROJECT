<?php

class user extends CI_Controller
{
    
    public function login()
    {
        $data = [];
        $email =  $this->session->userdata('email');
       
        if (!empty($email)) {
            
            Redirect(base_url('/'));
        }      
        if($this->input->post('submit') != NULL){
            $input =$this->input->post();
            $c = $this->users->checklogin($email);
            $x = $this->users->getUserLogin($input['email']);
            if ($x == "" && $input['password'] == "") {
                $data["message"] = "Email and password required !";
            }
             elseif($input['password'] != $x->password){
                $data["message"] = "Email or password incorrect !";
            } else {
                $login = array(
                    'email' => $input['email']
                );
                $this->session->set_userdata($login);
                $data['user']= $this->users->getUser($email);
                if($data['user']->role != 1){ 
                    Redirect(base_url("/admin"));
                }                
                Redirect(base_url('/'));
            }
        }   
        $this->load->view('login_view', $data);
    }
    public function register(){
        $res = [];
        if($this->input->post('submit') != NULL){            
            $data =$this->input->post();
            $check = $this->users->existEmail($data['email']);    
            if($check){
                $res["message"] = "email is exist";
            }
            else if($data['name'] == ""){
                $res["message"] = "Field name must be not empty";
            }else if (strlen($data['name']) <= 6 || strlen($data['name']) >= 16) {
                $res["message"] = " Pls set the field name over 6 to 16 characters";
            }
            else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $res["message"] = " Invalid email";
            }else if(!preg_match("/[0-9]/",  $data['phone']) && strlen($data['phone']) !=10){
                $res["message"] = " Invalid phone";
            }else if(strlen($data['passport'] ) != 12){
                $res["message"] = " passport must be 12 number";
            }else if (strlen($data['address'])<6) {
                $res["message"] = " Address must be higher than 6 character";

            }elseif($data['password'] != $data['cfpassword'])
            {
                $res["message"] = " Password not match";   
            }elseif (!isset($data['checkbox']) ) {
                $res["message"] = " Agree with term and privacy ? "; 
            }
            else{
                $result = $this->users->newdata($data['name'],$data['email'],$data['phone'],$data['passport'],$data['address'],$data['password']);
                if($result == true){
                    $res["message"] = " Register sucessfully !";
                }else
                 {
                    $res["message"] = " Register failed !";
                }
            }
        }
        $this->load->view('register_view',$res);
        

        
    }
    public function profile(){
        $data = [];
        $email =  $this->session->userdata('email');
        if (empty($email)) {
            Redirect(base_url('/login'));
        }
        $data['user']= $this->users->getUser($email);
        
        $this->load->view('head/header',$data);
        $this->load->view('profile',$data);
        $this->load->view('head/footer');

    }
    public function edit_profile(){
        $data['message'] = " ";
        $input = [];
        $email =  $this->session->userdata('email');
        if (empty($email)) {
            Redirect(base_url('/login'));
        }
        $data['user']= $this->users->getUser($email);
        print_r($data['user']);
        if($this->input->post('submit') != NULL)
        {
            $input =$this->input->post();
            if($input['name'] == "" || $input['phone'] == "" || $input['address'] == "" || $input['passport'] == "" ){
                $data['message'] = "Not be empty";
            }else {
                $update = $this->users->update($input['name'],$input['phone'],$input['address'],$input['passport'],$email);
                if ($update == true) {
                    $data['message'] = "Update successfully";
                }$data['message'] = "Update failed";
            }

        }
        $this->load->view('head/header', $data);
        $this->load->view('edit_profile',$data);
        $this->load->view('head/footer');
        

    }
    public function list_booking(){
        $data = [];
        $email =  $this->session->userdata('email');
        if (empty($email)) {
            Redirect(base_url('/login'));
        }
        $data['user']= $this->users->getUser($email);
        $data['listBookings'] = $this->users->getListBookings($data['user']->customerId);
        $this->load->view('head/header',$data);
        $this->load->view('list_booking',$data);
        $this->load->view('head/footer');
    }
    public function changepassword(){

        $data = [];
       
        $email =  $this->session->userdata('email');
        if (empty($email)) {
            Redirect(base_url('/login'));
        }
        $data['user'] = $this->users->getUser($email);
        
        $x = $this->users->x($email);
        print_r($x);
        if($this->input->post('submit') != NULL)
        
        {
            $input =$this->input->post();
           if ($x->password != $input['password'] || $input['password'] == "") {
                $data['message'] = " password old incorrect";
           }elseif ($input['newpassword'] == ""   ) {
                $data['message'] = "new password not empty";
            }elseif ($input['cfnewpassword'] == "") {
                $data['message'] = "confirm new password not empty";
            }
           elseif ($input['newpassword'] != $input['cfnewpassword']) {
                $data['message'] = "password not match";
           }
           else{
                $change1= $this->users->changepassword($data['user']->customerId,$input['newpassword']);
                print_r($change1);
                if ($change1 == true) {
                    $this->session->unset_userdata('email');
                    Redirect(base_url('/login'));
               }$data['message'] = "Change password failed";
           }
            
        }
        $this->load->view('head/header',$data);
        $this->load->view('changepassword',$data);
        $this->load->view('head/footer');
    }

    public function logout(){
        $this->session->unset_userdata('email');
        Redirect(base_url('/login'));
    }

   public function admin(){

        $this->load->view('head/header');
        $this->load->view('home_admin');
        $this->load->view('head/footer');
   }

}
?>