<?php
function getConnection(){
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "handy";
    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $userName, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
    ?>