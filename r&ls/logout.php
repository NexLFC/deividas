<?php
session_start();
if(isset($_SESSION['user_id'])){
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),'',time()-3600);
    header('Location:http://192.168.33.10/r&ls/');
    exit();
}else{
    header('Location:http://192.168.33.10/r&ls/');
    exit();
}
