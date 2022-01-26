<?php
    //require the database connection
    require_once 'connection.php';

    if(isset($_POST["submit"])){
        
        //User is trying to register to website => create variables based on user information
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        //create user => we're inserting the user's infomation into the same table within PHPMyAdmin 
        $sql = "INSERT INTO users (fullname, email, userPassword) VALUES ('$name', '$email', '$password')";
        
        if(mysqli_query($conn, $sql)){

            //if successful forward them back to the index.html page
            header("location: ../index.html");
        } else {
            echo "ERROR: Data wasn't stored in table 'users'";
        }

        //connection closed
        mysqli_close($conn);

    } else {
        echo "fail";
    }
?>