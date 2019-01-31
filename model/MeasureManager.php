<?php

namespace model;

use PDO;

class MeasureManager extends DatabaseConnection {
    public function CreateMeasure(Measure $measure) {
        $query = $this->bdd->prepare();
        
        $query->bindParam(":dateTime");
    }
    
    public function getAllMeasure(){}
 
    public function getMeasureById($id){}
    
    public function getLastMeasure(){}
    
    public function updateMeasure($measure,$id){}
    
    public function deleteMeasure($id){}
}