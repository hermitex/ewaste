<?php

class Drops extends Controller
{

    public function __construct(){
        $this->drooffModel = $this->model('Drop');
    }

    public function drop(){
        $locations = $this->drooffModel->getLocations();
        $data = [
            'locations' => $locations
        ];
        $this->view('pages/drop', $data);
    }


    public function showDropoffLocations()
    {

    }
}