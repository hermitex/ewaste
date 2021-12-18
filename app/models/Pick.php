<?php

class Pick
{
    private $db;

    function __construct(){
        $this->db = new Database;
    }

    public function sendRequest($data)
    {
        //Prepare statement
        $this->db->query("INSERT INTO requests (name, residency, address, phone, comment) VALUES(:name, :residency, :address, :phone, :comment)");
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':residency', $data['residency']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':comment', $data['comment']);
        //execute query
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getPickupLocations()
    {
        $this->db->query('SELECT * FROM location');
        return $this->db->resultSet();
    }
}