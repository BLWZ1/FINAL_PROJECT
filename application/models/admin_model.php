<?php
class admin_model extends CI_Model
{
    public function getUser($email){
        $getUserbyEmail = $this->db->query("SELECT customer.*, account.role FROM customer INNER JOIN account ON account.customerId = customer.customerId WHERE customer.email = '$email'");
           // ham row() tra ve 1 object don le , con ham $result tra ve 1 array se co tat ca cac object ben trong no or 1 mang object rong~ , 
        return $getUserbyEmail->row();
    }

    public function getListUsers(){
        $query = $this->db->query('SELECT * FROM customer ORDER BY customerId DESC');
        return $query->result();
    }

    public function getUserById($id){
        $query = $this->db->query('SELECT * FROM customer WHERE customerId = '.$id);
        return $query->row();
    }
    public function deleteUser($id){
        $query = $this->db->query('DELETE customer, account, booking, booking_detail FROM customer 
                LEFT JOIN account ON customer.customerId = account.customerId 
                LEFT JOIN booking ON customer.customerId = booking.customerId 
                LEFT JOIN booking_detail ON booking.bookingId = booking_detail.bookingId WHERE customer.customerId = '.$id);
        return true;
    }

    public function createUser($data)
    {
        $query = $this->db->query("
            INSERT INTO customer 
            (customerName, email, phone, address, passport) 
            VALUES ('".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['address']."', '".$data['passport']."')
        ");
        $lastId = $this->db->insert_id();
        $date = date('Y-m-d');
        $this->db->query("
            INSERT INTO account 
            (customerId, email, password, createOn) 
            VALUES ($lastId, '".$data['email']."', '".$data['password']."', $date)
        ");
        return true;
    }

    public function updateUserById($id, $name, $phone, $address, $passport)
    {
        $query = $this->db->query("UPDATE customer set customerName = '$name', phone = '$phone', address = '$address', passport = '$passport' WHERE customerId = ".$id);
        return true;
    }


    public function getListRooms(){
        $query = $this->db->query('SELECT * FROM rooms ORDER BY roomId DESC');
        return $query->result();
    }

    public function createRoom($data)
    {
        $query = $this->db->query("
            INSERT INTO rooms 
            (roomName, kindRoom, price, quantity, title, image) 
            VALUES ('".addslashes($data['name'])."', '".$data['type']."', '".$data['price']."', '".$data['quantity']."', '".addslashes($data['description'])."', '".$data['image']."')
        ");
        return true;
    }

    public function getRoomById($id){
        $query = $this->db->query('SELECT * FROM rooms WHERE roomId = '.$id);
        return $query->row();
    }

    public function updateRoomById($id, $data)
    {
        $query = $this->db->query("UPDATE rooms SET roomName = '".addslashes($data['name'])."', kindRoom = '".$data['type']."', price = '".$data['price']."', quantity = '".$data['quantity']."', title = '".addslashes($data['description'])."', image = '".$data['image']."' WHERE roomId = ". $id);
        return true;
    }

    public function getListBookings(){
        $query = $this->db->query('SELECT booking.*, 
                booking_detail.checkinDate, booking_detail.checkoutDate, booking_detail.personNumber, 
                booking_detail.childNumber, booking_detail.roomId, 
                customer.customerName, customer.phone, rooms.price 
                FROM booking 
                INNER JOIN booking_detail ON booking_detail.bookingId = booking.bookingId 
                INNER JOIN customer ON customer.customerId = booking.customerId 
                INNER JOIN rooms ON booking_detail.roomId = rooms.roomId 
                ORDER BY booking.bookingId DESC');
        return $query->result();
    }
    public function getListBookings1(){
        $query = $this->db->query("SELECT booking.*, 
        booking_detail.checkinDate, booking_detail.checkoutDate, booking_detail.personNumber, 
        booking_detail.childNumber, booking_detail.roomId, 
        customer.customerName, customer.phone, rooms.price 
        FROM booking 
        INNER JOIN booking_detail ON booking_detail.bookingId = booking.bookingId 
        INNER JOIN customer ON customer.customerId = booking.customerId 
        INNER JOIN rooms ON booking_detail.roomId = rooms.roomId 
        WHERE status = 'Pending' 
        ORDER BY booking.bookingId DESC ");
        return $query->result();
    }
    public function totalByRooms(){
        $query = $this->db->query('SELECT SUM(quantity) as sum FROM rooms');
        return $query->row();
    }
    public function countByBooking(){
        $query = $this->db->query('SELECT Count(bookingId) as total FROM booking');
        return $query->row();
    }
    public function countByUser(){
        $query = $this->db->query('SELECT Count(customerId) as total FROM customer');
        return $query->row();
    }
    public function getBookingById($id){
        $query = $this->db->query('SELECT booking.*, booking_detail.roomId, rooms.quantity FROM booking 
                INNER JOIN booking_detail ON booking.bookingId = booking_detail.bookingId 
                INNER JOIN rooms ON booking_detail.roomId = rooms.roomId 
                WHERE booking.bookingId = '.$id
            );
        return $query->row();
    }

    public function updateStatusBooking($id, $status)
    {
        $query = $this->db->query("UPDATE booking SET status = '$status' WHERE bookingId = ". $id);
        return true;
    }

    public function updateQuantity($id, $quantity)
    {
        $this->db->query("UPDATE rooms SET quantity = $quantity WHERE roomId = $id");
        return true;
    }


}