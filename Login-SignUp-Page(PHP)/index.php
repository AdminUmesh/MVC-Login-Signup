<?php
require_once('Controller/Controller.php');
class Index{
    public function __construct(){
        $Call_Contoller=new Controller();
        $Call_Contoller->Content();
    }
}

// Create an instance of Index class
$Index = new Index();