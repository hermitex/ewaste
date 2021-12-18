<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->locationModel = $this->model('Location');
    }


    public function index(){
        $locations = $this->locationModel->getLocations();
        $data = [
            'locations' => $locations
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
      $this->view('pages/about');
    }

    public function drop()
    {
        $this->view('pages/drop');
    }

    public function pick()
    {
        $this->view('pages/pick');
    }

    public function location()
    {
        $this->view('pages/location');
    }

    public function contact()
    {
        $this->view('pages/contact');
    }

    public function request()
    {
        $this->view('pages/index');
    }
}