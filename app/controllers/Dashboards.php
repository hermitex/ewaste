<?php

class Dashboards extends Controller
{

    public function __construct()
    {
        $this->dashboardModel = $this->model('Dashboard');
    }

    public function dashboard()
    {
        if (isset($_SESSION['user_id'])):
            $count = $this->dashboardModel->getUsers();

            $data = [
                'users'=>$count
            ];
            $this->view('users/dashboard', $data);
        else:
            $data = [
                'title' => 'Login Page',
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => '',
                'message' => 'You have to logon first to access the dashboard'
            ];
            $this->view('users/login', $data);
        endif;
    }



}