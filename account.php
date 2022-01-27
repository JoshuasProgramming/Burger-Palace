<?php
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
    session_start();

    //grabbing the database connection to phpMYAdmin
    require_once 'includes/connection.php';

    //Catch post data once the user presses the update button and process information
    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $newPassword = $_POST['newPassword'];

        //check if content is present

        //update database table 'users'
        $sql_query = ("UPDATE users SET userPassword='$newPassword' WHERE email='$email' AND fullname='$name' AND userPassword='$password'" );
        $result = mysqli_query($conn, $sql_query);
        //Create failure message
        if(!$sql_query){
            die("Failed to update database. Check query string.");
        }
        else if($sql_query){
            //echo "database updted";
            header("location: logout.php");
        } else {
            echo "no changes made";
        }
    }
?>

<!--We've basically got two files here. An HTML file which has an input form for
the user to update their account with and a php file (above) which will process 
that information by making a sql query--->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION['name'] ?>'s account</title>
</head>
<body>
    <!--Navigation bar & hero section below-->
    <section class='top' id='landingPage'>
        <header>
            <p><a href='index.html#landingPage' class='landing-direct'>Burger Palace</a></p>
            <ul class='navbar'>
                <li><a href='../index.html#About'>About</a></li>
                <li><a href='../index.html#Menu'>Menu</a></li>
                <li><a href='../index.html#Contact'>Contact</a></li>
                <li><a href='account.php' class='change-color'><?php echo $_SESSION['name'];?></a></li>
                <li><a href='logout.php' title='logout'>Logout</a></li>
            </ul>
        </header>
        
        <form action="#" method="post" class="update-form">
            <input class="update-email" placeholder="current email" name="email" autocomplete="off">
            <input class="update-name" placeholder="current name" name="name" autocomplete="off">

            <input placeholder="current password" name="password" class="update-password" type="password" autocomplete="off">
            <input placeholder="new password" name="newPassword" class="update-password2" type="password" autocomplete="off">

            <button type="submit" name="update" class="update-btn">Update</button>

        </form>

</body>
</html>