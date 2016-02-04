<?php
function get_header($substring = ''){
    if($substring !=null){
        require_once(ABSPATH . '/views/header-'.$substring.'.php');
    } else {
        require_once(ABSPATH . '/views/header.php');
    }
}

function get_footer($substring = ''){
    if($substring !=null){
        require_once(ABSPATH . '/views/footer-'.$substring.'.php');
    } else {
        require_once(ABSPATH . '/views/footer.php');
    }
}

function get_sidebar($substring = ''){
    if($substring !=null){
        if(file_exists(ABSPATH . '/views/sidebar-'.$substring.'.php')){
            require_once(ABSPATH . '/views/sidebar-'.$substring.'.php');
        }
    } else {
        require_once(ABSPATH . '/views/sidebar.php');
    }
}

function get_theme_dir(){
    return THEME_URL;
}

function get_current_path(){
    $urlGet = $_GET['url'];
    $urlTrim = rtrim($urlGet, "/");
    $url = explode("/", $urlTrim);
    return $url[0];
}