<?php

// http://localhost/live/Home/Show/1/2

class Login extends Controller{

    function Display(){
        //call Views
        $this->View(2, []);
    }

    function Kiemtra(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        //call Models
        $KT = $this->model("SinhVienModel");
        if($KT->CheckAccount($username, $password)){
             //set true session
             $KT->UpdateLog(1);
        }
    header("location:http://localhost/quanlynhansu/Home/SayHi");
    }
    function logout(){
           //call Models
           $logout = $this->model("SinhVienModel");
           $logout->UpdateLog(0);
           header("location:http://localhost/quanlynhansu/Home/SayHi");
    }
}
?>