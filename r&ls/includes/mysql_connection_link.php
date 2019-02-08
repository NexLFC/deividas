<?php
define('DB_USER','root');
define('DB_PASSWORD','5k09gj3-od2kfi');
define('DB_HOST','http://46.101.131.157');
define('DB_NAME','r&ls');

$dbcl = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbcl->connection_error){
    die('Could not connect to MySQL: '.$dbcl->connect_error);
}else{
    $dbcl->set_charset('utf8');
}
