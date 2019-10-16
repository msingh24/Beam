<?php
//db details
$dbHost = 'localhost';
$dbName = 'devices';
$dbUsername = 'root';
$dbPassword = '';


//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>