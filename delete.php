<?php
//Get users session
//session_start() creates a session or resumes the current one based on a 
//session identifier passed via a GET or POST request, or passed via a cookie.
session_start();

//include the database connection
require_once 'includes/connection.php';

$name = $_SESSION['name'];
$email = $_SESSION['email'];

//sql query for deleting the a particular user from the 'users' table in PHPMyAdmin
$sql_query = ("DELETE FROM users WHERE fullname='$name'");
$result = mysqli_query($conn, $sql_query);

//If the sql query happens, the user has been deleted and is sent back to logout.php file
//The logout.php file will close the session and send them to the index.html page
if($sql_query){
    header("Location: logout.php");
} else {
    //If the above doesn't work I've put a mysql_error with the database connection sql 
    //variable as a paramete
    mysql_error($onn);
}
?>