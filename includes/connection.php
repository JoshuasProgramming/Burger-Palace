<?php

/**
 * Grabbing the servername, username, password and dbname
 * 1.servername is ALWAYS "localhost"
 * 2.username is ALWAYS "root"
 * 3.password is ALWAYS "" => empty
 * 4.dbname depends on what you call it. within the db (database) are the tables
 */
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "burger palace";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "connected successfully"
?>