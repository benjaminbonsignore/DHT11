<?php
 use model\MeasureManager;

 // get last measure
 
 $measureManager = new MeasureManager();
 $lastMeasure = $measureManager->getLastMeasure();
 
 // calculate css bargraph
 
 $bargraph_height = 161 + $lastMeasure->getTemperature() * 4;
 $bargraph_top = 315 - $lastMeasure->getTemperature() * 4;
 
 // call view
 
 use view\Page;
 
 $page = new Page("Thermomètre DHT11");
 
 $data['lastMeasure'] = $lastMeasure;
 $data['bargraph_height'] = $bargraph_height;
 $data['bargraph_top'] = $bargraph_top;
 
 $page->addBodyWithTemplate("thermometer",$data);
 
 echo $page->render();