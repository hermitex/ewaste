<?php

class User
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }

    public function register($data)
    {
        //Prepare statement
        $this->db->query("INSERT INTO users (first_name, last_name, email, password) VALUES(:first_name, :last_name, :email, :password)");
        //Bind values
        $this->db->bind(':first_name', $data['firstName']);
        $this->db->bind(':last_name', $data['lastName']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        //execute query
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            $row = [];
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        $this->db->bind(':email', $email);

        if ($this->db->resultSet() > 0){
            return true;
        }else{
            return false;
        }
    }
}