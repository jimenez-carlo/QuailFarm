<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "db_agroculture";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected";
}
