<?php
class Controller{
    function __construct($name){
        //echo "Main Controller<br/>";
        $this->view = new View();
        //interact  with the model at this point
        //$this->view->render($name.'/index');
    }

    function addNew($name){
        $this->view->addNew($name);
    }

    function index($name){
        $this->view->render($name);
    }


}