<?php

define('BASE_URL','http://46.101.131.157/r&ls/');
define('MYSQL','./includes/mysql_connection_link.php');
define('HEADER','./includes/header.php');
define('FOOTER','./includes/footer.php');
define('ADMIN_EMAIL','admin@nex.com');

function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}
