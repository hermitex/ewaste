<?php
/*
 * Core class that creates URL
 * It also formats the URL
 * It also loads the core controller
 */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->getUrl();
        //Check in the url for first value and capitalize the first letter
        if (!empty($url[0])){
            if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                //Set a new controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }
        //Require the controller
        require_once '../app/controllers/'.$this->currentController.'.php';
        //Instantiate controller
        $this->currentController = new $this->currentController;

        //Check the second part of the URL
        if (isset($url[1])){
            if (method_exists($this->currentController, $url[1])){
                //Set the currentMethod
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        //Get parameter
        $this->params = $url ? array_values($url) : [];
        //Call a callback with an array of params
//        if (method_exists($this->currentController, $this->currentMethod)){
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
//        }

    }

    public function getUrl(){
        if (isset($_GET['url'])){
            //Get the URL and strip the  rightmost /
            $url = rtrim($_GET['url'], '/');
            //Filter variables as string/number
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //Break the URL into an array
            return explode('/', $url);
        }
    }
}


