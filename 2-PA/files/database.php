<?php
//Connect with mySQLI
$hostname="localhost";
$username="root";
$password="";
$database="handy";
$conn = mysqli_connect($hostname, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
