<?php
    class admin extends CI_Controller
    {
        
        public function admin()
        {   
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
            $data['sum'] = $this->admin_model->totalByRooms();
            $data['count'] = $this->admin_model->countByBooking();
            $data['countUser'] = $this->admin_model->countByUser();
            $data['list'] = $this->admin_model->getListBookings1();
            $this->load->view('admin/require/header');
            $this->load->view('admin/home_admin', $data);
            $this->load->view('admin/require/footer');
        }
        
        public function user()
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
        
            $data['listUsers'] = $this->admin_model->getListUsers();

            $this->load->view('admin/require/header');
            $this->load->view('admin/manage_user', $data);
            $this->load->view('admin/require/footer');
        }

        public function delete_user($id){
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }

            $result = $this->admin_model->deleteUser($id);
            if($result){
                Redirect(base_url('admin/manage_user'));
            }
        }

        public function edit_user($id)
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }

            $data['userId'] = $this->admin_model->getUserById($id);
            if(!$data['userId']){
                Redirect(base_url('admin/manager_user'));
            }

            if($this->input->post()){
                $dataInput = $this->input->post();
                $data["message"] = "";
                if($dataInput['name'] == ""){
                    $data["message"] = "field name must be not empty";
                }else if (strlen($dataInput['name']) <= 6 || strlen($dataInput['name']) >= 16) {
                    $data["message"] = " pls set the field name over 6 to 16 characters";
                }else if(!preg_match("/[0-9]/",  $dataInput['phone'])){
                    $data["message"] = " invalid phone";
                }else if(strlen($dataInput['passport'] ) != 12){
                    $data["message"] = " passport must be 12 number";
                }else if (strlen($dataInput['address'])<6) {
                    $data["message"] = " address must be higher than 6 character";
                }else{
                    $this->admin_model->updateUserById($id, $dataInput['name'], $dataInput['phone'], $dataInput['address'], $dataInput['passport']);
                    Redirect(base_url('admin/manage_user'));
                }
            }
            $this->load->view('admin/require/header');
            $this->load->view('admin/edit_user', $data);
            $this->load->view('admin/require/footer');
        }

        public function add_user()
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }

            if($this->input->post()){
                $dataInput = $this->input->post();
                $data["message"] = "";
                $check = $this->users->existEmail($dataInput['email']);
                if($check){
                    $data["message"] = "email is exist";
                }else if (!filter_var($dataInput['email'], FILTER_VALIDATE_EMAIL)) {
                    $data["message"] = " invalid email";
                }else if($dataInput['name'] == ""){
                    $data["message"] = "field name must be not empty";
                }else if (strlen($dataInput['name']) <= 6 || strlen($dataInput['name']) >= 16) {
                    $data["message"] = " pls set the field name over 6 to 16 characters";
                }else if(!preg_match("/[0-9]/",  $dataInput['phone']) && strlen($dataInput['phone'])!= 10){
                    $data["message"] = " invalid phone";
                }else if(strlen($dataInput['passport'] ) != 12){
                    $data["message"] = " passport must be 12 number";
                }else if (strlen($dataInput['address'])<6) {
                    $data["message"] = " address must be higher than 6 character";
                }else{
                    $this->admin_model->createUser($dataInput);
                    Redirect(base_url('admin/manage_user'));
                }
            }
            $this->load->view('admin/require/header');
            $this->load->view('admin/add_user', $data);
            $this->load->view('admin/require/footer');
        }

        public function room()
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
        
            $data['listRooms'] = $this->admin_model->getListRooms();

            $this->load->view('admin/require/header');
            $this->load->view('admin/manage_room', $data);
            $this->load->view('admin/require/footer');
        }

        public function add_room()
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }

            if($this->input->post()){
                $dataInput = $this->input->post();
                $this->admin_model->createRoom($dataInput);
                Redirect(base_url('admin/manage_room'));
            }

            $this->load->view('admin/require/header');
            $this->load->view('admin/add_room', $data);
            $this->load->view('admin/require/footer');
        }

        public function edit_room($id)
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
            
            $data['room'] = $this->admin_model->getRoomById($id);
            if(!$data['room']){ // k phai admin
                Redirect(base_url('admin/manage_room'));
            }
            if($this->input->post()){
                $dataInput = $this->input->post();
                $this->admin_model->updateRoomById($id, $dataInput);
                Redirect(base_url('admin/manage_room'));
            }

            $this->load->view('admin/require/header');
            $this->load->view('admin/edit_room', $data);
            $this->load->view('admin/require/footer');
        }

        public function booking()
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user']= $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
        
            $data['listBookings'] = $this->admin_model->getListBookings();

            $this->load->view('admin/require/header');
            $this->load->view('admin/manage_booking', $data);
            $this->load->view('admin/require/footer');
        }

        public function confirm_booking($id)
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user'] = $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
            
            $data['booking'] = $this->admin_model->getBookingById($id);
            if(!$data['booking']){ // k phai admin
                Redirect(base_url('admin/manage_booking'));
            }

            
            $newQuantity = $data['booking']->quantity - 1;
            if($newQuantity < 0){
                echo '<script>alert("The room not available");setTimeout(function(){window.location.href="admin/manage_booking"}, 1000)</script>';
                exit();
            }
            $this->admin_model->updateStatusBooking($id, 'Confirm');
            $this->admin_model->updateQuantity($data['booking']->roomId, $newQuantity);
            if($data['room']->quantity - 1 == 0){
                $this->activitys->updateStatusRoom($data['room']->roomId);
            }
            Redirect(base_url('admin/manage_booking'));
        }

        public function cancel_booking($id)
        {
            $data = [];
            $email =  $this->session->userdata('email');
            if (empty($email)) {
                Redirect(base_url());
            }
            $data['user'] = $this->admin_model->getUser($email);
            if($data['user']->role != 2){ // k phai admin
                Redirect(base_url());
            }
            
            $data['booking'] = $this->admin_model->getBookingById($id);
            if(!$data['booking']){ // k phai admin
                Redirect(base_url('admin/manage_booking'));
            }

            $this->admin_model->updateStatusBooking($id, 'Cancel');
            Redirect(base_url('admin/manage_booking'));
        }

        public function history()
        {
            $this->load->view('admin/history');
        }

    }

?>
