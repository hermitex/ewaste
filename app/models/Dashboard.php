<?php

/**
 *
 */
class Dashboard
{
    private Database $db;

    /**
     * Dashboard constructor
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->rowCount();
    }


    /**
     *
     */
    public function dashboard()
    {

    }
}