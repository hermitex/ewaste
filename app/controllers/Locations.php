<?php

class Locations extends Controller
{

    function __construct()
    {
        $this->locationModel = $this->model('Location');
    }

    public function location(){
        $locations = $this->locationModel->getLocations();
        $data = [
            'locations' => $locations
        ];
        $this->view('pages/location', $data);
    }

    public function addLocation()
    {
        $data = [
            'title' => 'Locations',
            'locationName' => '',
            'lat' => '',
            'long' => '',
            'address' => '',
            'phone' => '',
            'nameError' => '',
            'latError' => '',
            'longError' => '',
            'addressError' => '',
            'phoneError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD' == 'POST']){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Locations',
                'name' => trim($_POST['name']),
                'lat' => trim($_POST['lat']),
                'long' => trim($_POST['long']),
                'nameError' => '',
                'latError' => '',
                'longError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $coValidation = "^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$";
            $phoneValidation = "";

            if (empty($data['name'])){
                $data['nameError'] = 'Location name cannot be empty.';
            }elseif (!preg_match($nameValidation, $data['name'])){
                $data['nameError'] = 'Location can only contain letters and numbers.';
            }

            if (empty($data['lat'])){
                $data['latError'] = 'Latitude cannot be empty.';
            }elseif (!preg_match($coValidation, $data['lat'])){
                $data['latError'] = 'Invalid latitude value.';
            }

            if (empty($data['long'])){
                $data['longError'] = 'Longitude cannot be empty.';
            }elseif (!preg_match($coValidation, $data['lat'])){
                $data['longError'] = 'Invalid longitude value.';
            }else{
                $isLocation = checkIfRegisterd($data['lat'], $data['long']);
                if ($isLocation){
                    $data['latError'] = 'Latitude already registered.';
                    $data['longError'] = 'Longitude already registered.';
                }
            }
            if (empty($data['address'])){
                $data['addressError'] = 'Address cannot be empty.';
            }

            if (empty($data['phone'])){
                $data['phoneError'] = 'Phone cannot be empty.';
            }

            if (empty($data['nameError'] && $data['latError'] && $data['longError'] && $data['addressError'] && $data['phoneError'])){

                if ($this->locationModel->addLocation($data)){
                    header('location: '.URLROOT.'/pages/location');
                }else{
                    die("Something went wrong. Please try again!");
                }
            }

        }
    }

    public function displayLocation()
    {
        $locations = $this->locationModel->getLocations();
        $data = [
            'locations' => $locations
        ];

        $this->view('pages/index', $data);
    }

    public function removeLocation($id, $name, $lat, $long)
    {

    }

    public function updateLocation($id, $name, $lat, $long)
    {

    }
}