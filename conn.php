<?php
$host = "127.0.0.1";
$username = "u262412783_lmedinac";
$password = "Root_1234";
$database = "u262412783_paypal";
//Database connection
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Connection Failed" . mysqli_connect_error());
} else {
}