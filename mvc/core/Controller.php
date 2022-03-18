<?php

class Controller{


    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($session, $data=[]){
   
        if( $session == "1"){
            require_once "./mvc/views/admin.php";
        }
        else if( $session == "0" ){
            require_once "./mvc/views/user.php";
        }
        else if( $session = "2" ){
            require_once "./mvc/views/login.php";
        }
       
    }

}
?>