<?php
session_start();
if(isset($_SESSION['user_id'])){
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),'',time()-3600);
    header('Location:http://46.101.131.157/r&ls/');
    exit();
}else{
    header('Location:http://46.101.131.157/r&ls/');
    exit();
}
