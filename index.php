<?php

session_start();
$IDPB = ''; 
if( isset( $_GET['IDPB'])){
    $IDPB = $_GET['IDPB']; 
} 
require_once "./mvc/Bridge.php";
$myApp = new App();
?>