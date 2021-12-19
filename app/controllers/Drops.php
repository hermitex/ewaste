<?php

class Drops extends Locations
{

    public function __construct(){
        $this->drooffModel = $this->model('Drop');
    }

    public function drop(){
        $locations = $this->drooffModel->getDropoofLocations();
        $data = [
            'locations' => $locations
        ];
        $this->view('users/drop', $data);
    }

    public function showDropoffLocations()
    {

    }
}