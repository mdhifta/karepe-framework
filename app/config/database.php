<?php 

$db_server = 'localhost';
$db_name = 'karepe';
$db_user = 'db_user';
$db_password = '';

$connection = new mysqli($db_server, $db_user, $db_password, $db_name);

if($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}