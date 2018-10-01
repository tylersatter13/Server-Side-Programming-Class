<?php

//local server
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','root');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME', 'ecommerce');

//tylersatter.com server
/*
DEFINE ('DB_USER', 'tylersat_admin');
DEFINE ('DB_PASSWORD', 'Betheduck13!');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', '');
*/

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$dbc){
    trigger_error('Could not connect to MySQL'.mysqli_connect_error());
} else{
    echo "conntected";
    mysqli_set_charset($dbc,'utf8');

}