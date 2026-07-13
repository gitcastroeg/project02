<?php
echo "test01";
$host = "66.113.234.121";
$user = "root";
$password = "Default123!@#";
$database = "comelec";
$port = 3306;

$con = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error){
    die ("Connection failed:" . $conn->connect_error);
}

echo "Connection succesful!";
?>
