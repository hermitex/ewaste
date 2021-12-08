<?php

class Users extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){
        $users = $this->userModel->getUsers();
        $data = [
            'tittle' => 'Users Home Page',
            'users' => $users
        ];
        $this->view('users/index', $data);
    }

    public function login()
    {
        $this->view('users/login');
    }
}