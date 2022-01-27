<?php
//Get users session
//session_start() creates a session or resumes the current one based on a 
//session identifier passed via a GET or POST request, or passed via a cookie.
session_start();

//unregister a session variable using the unset method with the session user as a parameter
unset($_SESSION["name"]);

//Once the session has be disconnected/unregistered the user is sent back to the login.html page
header("Location:login.html");
?>