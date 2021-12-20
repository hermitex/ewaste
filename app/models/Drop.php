<?php

class Drop
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLocations()
    {
        $this->db->query('SELECT * FROM location');
        return $this->db->resultSet();
    }

}