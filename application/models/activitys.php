<?php 
    class activitys extends CI_Model
    {
        public function getRoom(){
            $room = $this->db->query("Select * FROM rooms");
            return $room->result();
        }
        public function getroombyId($id){
            $room = $this->db->query("Select * FROM rooms Where roomId = '$id'");
            return $room->row();
        }
        public function getroombytype($typeRoom){
            $type = $this->db->query("Select * FROM rooms Where kindRoom = '$typeRoom'  LIMIT 2" );

            return $type->result();
        }
        
        public function createBooking($data){
            $date = date('Y-m-d H:i:s');
            $room = $this->db->query("INSERT INTO booking (customerId, createOn) VALUES ('".$data['customerId']."', '$date')");
            $lastId = $this->db->insert_id();
            $checkIn = date("Y-m-d H:i:s", strtotime($data['checkin']));
            $checkout = date("Y-m-d H:i:s", strtotime($data['checkout']));
            $detail = $this->db->query("
                INSERT INTO booking_detail 
                (bookingId, roomId, checkinDate, checkoutDate, personNumber, childNumber, createOn)
                VALUES ($lastId, '".$data['roomId']."', '$checkIn', '$checkout',  '".$data['person']."',  '".$data['children']."', '$date')
            ");
            return true;
        }

        public function updateStatusRoom($id)
        {
            $this->db->query("UPDATE rooms SET statusRoom = 'Reserve' WHERE roomId = $id");
            return true;
        }

        public function getBookingDetail($id)
        {
            $query = $this->db->query("SELECT booking.*, booking_detail.checkinDate, booking_detail.checkoutDate 
                                        FROM booking INNER JOIN booking_detail 
                                        ON booking_detail.bookingId = booking.bookingId 
                                        WHERE roomId = $id AND status = 'Pending' 
                                        ORDER BY bookingId DESC");

            return $query->row();
        }
    }
?>