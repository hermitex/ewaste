<?php

class Picks extends Controller
{
    function __construct()
    {
        $this->pickupModel = $this->model('Pick');
    }

    public function pick()
    {
       $locations = $this->pickupModel->getPickupLocations();

       $data = [
           'locations' => $locations
       ];

       $this->view('pages/pick', $data);
    }

    public function sendPickupRequest()
    {
        $data = [
            'name' => '',
            'residency' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'comment' => '',
            'nameError' => '',
            'residencyError' => '',
            'emailError' => '',
            'phoneError' => '',
            'addressError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => trim($_POST['name']),
                'residency' => trim($_POST['residency']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'comment' => trim($_POST['message']),
                'nameError' => '',
                'residencyError' => '',
                'emailError' => '',
                'phoneError' => '',
                'addressError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $coValidation = "/^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$/";

            if (empty($data['name'])){
                $data['nameError'] = 'Location name cannot be empty.';
            }elseif (!preg_match($nameValidation, $data['name'])){
                $data['nameError'] = 'Location can only contain letters and numbers.';
            }

            if (empty($data['residency'])){
                $data['residencyError'] = 'Residency cannot be empty.';
            }elseif (!preg_match($nameValidation, $data['residency'])){
                $data['residencyError'] = 'Residency an only contain letters and numbers.';
            }

            if (empty($data['email'])){
                $data['emailError'] = 'Email cannot be empty.';
            }elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailError'] = 'Invalid email address.';
            }

            if (empty($data['phone'])){
                $data['phoneError'] = 'Phone cannot be empty.';
            }


            if (empty($data['nameError']) && empty($data['addressError']) && empty($data['emailError']) && empty($data['residencyError']) && empty($data['phoneError'])) {
                if ($this->pickupModel->sendRequest($data)){
                    header('location: '.URLROOT.'/pages/request');
                }else{
                    die("Something went wrong. Please try again!");
                }
            }
        }
        $this->view('pages/pick', $data);
    }
}