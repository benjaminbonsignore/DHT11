<?php
namespace controller;

class Router
{
    private $parameters = array();
    private $worker = null;
    
    public function __construct(){
        global $config;
        
        foreach ($_GET as $key => $value){
            $this->parameters[strtolower($key)] = $value;
        }
        
        $this->worker = isset($this->parameters['w']) ? $this->parameters['w'] : $config['homepage_controller'];
    }
    
    public function routeTheRequest(){
        global $config;
        global $errors;
        
        if(file_exists("controller/$this->worker.php")){
            require_once "controller/$this->worker.php";
        } else { //worker not found -> go to homepage
            $errors[] = "Controller (".$this->worker.") not found :-(";
            if(file_exists("controller/".$config['homepage_controller'].".php")){
                require_once "controller/".$config['homepage_controller'].".php";
            } else {
                $errors[] = "Controller (".$config['homepage_controller'].") not found :-(";
                require_once "controller/error.php";
            }
        }
    }
}

