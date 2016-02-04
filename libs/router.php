<?php

class Router
{
    public $name = '';

    function __construct()
    {
        $urlGet = $_GET['url'];
        $urlTrim = rtrim($urlGet, "/");
        $url = explode("/", $urlTrim);
        $controller_file = "./controllers/" . $url[0] . ".php";
        $dao_file = "./dao/" . $url[0] . "_dao.php";
        $model_file = "./models/" . $url[0] . "_model.php";
        $this->name = $url[0];
        if (file_exists($controller_file)) {
            require $controller_file;
        } else {
            require "./controllers/error.php";
            //$controller = new Error();
            return false;
        }

        if (file_exists($dao_file)) {
            require_once($dao_file);
        }
        if (file_exists($model_file)) {
            require_once($model_file);
        }
        $controller = new $url[0]();

        if (isset($url[2])) {
            /** calling action with parameters */
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->index($url[0]);
            }
        }
    }

    /*function get_theme_url(){
        return "http://localhost/mvc/view/";
    }*/
}