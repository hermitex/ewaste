<?php

class User
{
    private Database $db;

    /**
     * Database constructor
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }

    /**
     * @param $data
     * @return bool
     */
    public function register($data): bool
    {
        //Prepare statement
        $this->db->query("INSERT INTO userlogin (username, password) VALUES(:username, :password)");
        //Bind values
        $this->db->bind(':username', $data['email']);
        $this->db->bind(':password', $data['password']);
        //execute query
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function insertUserDetails($data)
    {

        //Prepare statement]
        $this->db->query("SELECT * FROM userlogin WHERE username = :username");
        $this->db->bind(':username', $data['email']);
        $row = $this->db->single();
        //Prepare statement
        $this->db->query("INSERT INTO users (first_name, last_name, phone, userlogin_userlogin_id) VALUES(:first_name, :last_name, :phone, :userlogin_userlogin_id)");
        //Bind values
        $this->db->bind(':first_name', $data['firstName']);
        $this->db->bind(':last_name', $data['lastName']);-
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':userlogin_userlogin_id', $row->userlogin_id);

        //execute query
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $email
     * @param $password
     * @return false
     */
    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM userlogin WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();


//        var_dump($row);

        var_dump($row->password);


        $hashedPassword = $row->password;

        if ($password == $hashedPassword) {
            echo "pass correct!";
            $this->db->query('SELECT * FROM users WHERE userlogin_userlogin_id = :userlogin_userlogin_id');

            //Bind value
            $this->db->bind(':userlogin_userlogin_id', $row->userlogin_id);

            return $this->db->single();
        } else {
            echo "pass wrong!";
            return false;
        }
    }

    /**
     * @param $username
     * @return bool
     */
    public function findUserByEmail($username)
    {
        $this->db->query('SELECT * FROM `userlogin` WHERE `username` = :username');

        $this->db->bind(':username', $username);

        if ($this->db->resultSet() > 0){
            return true;
        }else{
            return false;
        }
    }
}