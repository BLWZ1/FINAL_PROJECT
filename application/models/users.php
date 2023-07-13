<?php 
    class users extends CI_Model
    {
        public function newData($name, $email,$phone,$passport,$address,$password)
        {
            $insert= $this->db->query("Insert into customer (customerName,email,phone,passport,address) 
                                            values ('$name','$email','$phone','$passport','$address')");
            $lastinsertid= $this->db->insert_id();
            $date = date('Y-m-d');
            $insertaccount = $this->db->query("Insert into account(customerID,email,password,role,createOn) 
                                            values ('$lastinsertid', '$email', '$password', 1, '$date') ");
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        public function booking($id,$status)
        {
            $date1 = date('Y-m-d');
            $insert = $this->db->query("Insert into booking(customerId,status,createOn) values($id,1,'$date1' )");
            $lastinsertid= $this->db->insert_id();
            $insertbookingdetails = $this->db->query("Insert into booking_detail(bookingdetailId,roomId,checkinDate,checkoutDate,personNumber,childNumber) values ('$roomId', '$checkinDate', '$checkoutDate', '$personNumber', '$childNumber') ");
            return ($this->db->affected_rows() != 1) ? false : true;
        }

        public function getListBookings($id){
            $query = $this->db->query('SELECT booking.*, 
                    booking_detail.checkinDate, booking_detail.checkoutDate, booking_detail.personNumber, 
                    booking_detail.childNumber, booking_detail.roomId, 
                    customer.customerName, customer.phone, rooms.price 
                    FROM booking 
                    INNER JOIN booking_detail ON booking_detail.bookingId = booking.bookingId 
                    INNER JOIN customer ON customer.customerId = booking.customerId 
                    INNER JOIN rooms ON booking_detail.roomId = rooms.roomId 
                    WHERE booking.customerId = '.$id.'
                    ORDER BY booking.bookingId DESC');
            return $query->result();
        }

        public function existEmail($email){
            $uname = $this->db->query("Select customerId FROM customer WHERE email = '$email' ");
            
            if($uname->row()){
                return true;
            }return false;
        }
        public function checklogin($email){
            $loginName = $this->db->query("Select customerId FROM customer WHERE email = '$email' ");
            if($loginName->row()){
                return true;
            }return false;
            
        }
        public function getUserLogin($email){
            $loginName = $this->db->query("Select * FROM account WHERE email = '$email' ");
            return $loginName->row();
            
        }
        public function getUser($email){
            $getUserbyEmail = $this->db->query("SELECT customer.*, account.role FROM customer INNER JOIN account ON account.customerId = customer.customerId WHERE customer.email = '$email'");
               // ham row() tra ve 1 object don le , con ham $result tra ve 1 array se co tat ca cac object ben trong no or 1 mang object rong~ , 
            return $getUserbyEmail->row();
        }
        
        // public function getUser($email){
        //     $getUserbyEmail = $this->db->query("Select * FROM customer WHERE email = '$email'");
        //        // ham row() tra ve 1 object don le , con ham $result tra ve 1 array se co tat ca cac object ben trong no or 1 mang object rong~ , 
        //     return $getUserbyEmail->row();
            
        // }
        public function x($email){
            $x = $this->db->query("SELECT customer.customerId, account.email, account.password FROM account 
            INNER JOIN customer on customer.customerId = account.customerId
            WHERE account.email = '$email'");
            return $x->row();
            
        }
        public function update($name,$phone,$address,$passport,$email){
            $updatebyEmail= $this->db->query("Update customer set customerName = '$name', phone = '$phone', address = '$address',passport = '$passport' WHERE email = '$email'");
            return true;
        }
        public function changepassword($id,$password){
            $updatebyEmail = $this->db->query("Update account set password = '$password' WHERE customerId =$id");
            return true;
        }
    }
?>
