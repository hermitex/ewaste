<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
      $this->view('pages/index');
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
}