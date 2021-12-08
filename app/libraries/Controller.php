<?php
/*
 * Base controller class
 * Every other controller extends it
 * Ot loads the models and views
 */
class Controller
{
    public function model($model)
    {
        //require the model
        require_once '../app/models/'.$model.'.php';
        //Instantiate the model
        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            die('View does not exist!');
        }
    }
}