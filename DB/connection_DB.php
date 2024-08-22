<?php

$SERVER   = 'localhost';
$USERNAME = 'root'; 
$PASSWORD = '';
$DATABASE = 'student';

$connection = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if ($connection) {
    echo "The connection was successful.";
} else {
    echo "The connection was not successful.";
}



?>