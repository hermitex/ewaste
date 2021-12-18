<?php

class Drivers extends Users
{
    private $workingHours;


    public function driver()
    {
        $data = [
            'driverName' => 'Driver 1',
            'notifications' => '',
            'pickupRequests' => '20'
        ];
        $this->view('pages/diver', $data);
    }

    public function acceptPickupRequests()
    {

    }

    public function cancelPickupRequests()
    {

    }

    public function viewNotification()
    {

    }

    public function editWorkingHours($hours)
    {
        $this->workingHours = $hours;
    }
}