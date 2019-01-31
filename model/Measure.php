<?php
namespace model;

class Measure {
    private $id;
    private $datetime;
    private $temperature;
    private $humidite;
    
    public function __construct($datetime,$temperature,$humidite) {
        $this->datetime = $datetime;
        $this->temperature = $temperature;
        $this->humidite = $humidite;   
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id): void{
        $this->id = $id;
    }
    
    public function getDateTime(){
        return $this->datetime;
    }
    
    public function setDateTime($datetime): void{
        $this->datetime = $datetime;
    }
    
    public function getTemperature(){
        return $this->temperature;
    }
    
    public function setTemperature($temperature): void{
        $this->temperature = $temperature;
    }
    
    public function getHumidite(){
        return $this->humidite;
    }
    
    public function setHumidite($humidite): void{
        $this->humidite = $humidite;
    }  
}