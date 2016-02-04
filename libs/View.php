<?php
class View{
    function __construct(){
        //echo "Seems you are in wrong place !!<br/>";
    }

    public function render($name){
        $view_file = 'views/pages/'.$name.".php";
        if(file_exists($view_file)){
            require_once($view_file);
        } else {
            require_once('views/pages/error.php');
        }
    }

    public function addNew($name){
        $add_new_view = 'views/pages/add_'.$name.'.php';
        if(file_exists($add_new_view)){
            require_once ($add_new_view);
        } else {
            require_once('views/pages/error.php');
        }
    }
}