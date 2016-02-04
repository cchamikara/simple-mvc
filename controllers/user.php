<?php
class User extends Controller{
    function __construct(){
        parent::__construct($name="user");
    }

    function addNew($name='user'){
        parent::addNew($name);
    }

    function edit(){
        $this->view->render('edit_user');
    }

    function create(){
        $usr = new UserDAO();
        $usr->setName($_POST['name']);
        $usr->setAge($_POST['age']);

        $model = new UserModel();

        $res = $model->create($usr);

        if($res==1){
            header("Location: ".SITE_URL."/user/addnew/?e=1");
        }
    }
}