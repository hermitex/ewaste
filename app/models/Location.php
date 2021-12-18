<?php

class Location
{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    public function getLocations()
    {
        $this->db->query('SELECT * FROM location');
        return $this->db->resultSet();
    }

    public function register($data)
    {
        //Prepare statement
        $this->db->query("INSERT INTO location (name, lat, long, address, phone) VALUES(:name, :lat, :long, :address, :phone)");
        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':lat', $data['lat']);
        $this->db->bind(':long', $data['long']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        //execute query
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function checkIfRegisterd($lat, $long)
    {
        $this->db->query('SELECT * FROM loaction WHERE lat = :lat AND long = :long');

        $this->db->bind(':lat', $lat);
        $this->db->bind(':long', $long);

        if ($this->db->resultSet() > 0){
            return true;
        }else{
            return false;
        }
    }

}