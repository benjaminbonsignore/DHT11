<?php
namespace view;

class Page
{
    private $title="";
    private $body = array();
    
    function __construct($title){
        $this->title = $title;
    }
    
    public function addBodyWithTemplate($templateName,$dataArray){
        $this->body = array("templateName" => $templateName, 'data' => $dataArray);
    }
    
    public function render(){
        global $errors;
        ob_start();
        require("view/template/page.phtml");
        $str = ob_get_contents();
        ob_end_clean();
        return $str;
    }
}

