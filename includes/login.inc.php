<?php
    //prevents the undefined array key ERROR
    error_reporting(0);

    //require the database connection
    require_once 'connection.php';

    //isset checks if the varible 'submit' is set => outputs a true or false output. 
    if(isset($_POST["submit"])){
        
        //making variables of the user's details + preventing sql injection
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        //SELECT all information from the user table and check if it's equal to the login input
        $sql_query = "SELECT * FROM users WHERE fullname='$name' AND email='$email' AND userPassword= '$password' ";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        //If the sql SELECT query is correct we'll turn the page into an HTML welcoming page,which has a link to 'update account'
        //Page will also concat the user's name onto the navigation bar as well as the h1 welcoming text
        if($count == 1){
            echo "
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../style.css'>
            <body>
                 <!--Navigation bar & hero section below-->
                 <section class='top'>
                    <header>
                        <p>Burger Palace</p>
                        <ul class='navbar'>
                            <li><a href='../index.html#About'>About</a></li>
                            <li><a href='../index.html#Menu'>Menu</a></li>
                            <li><a href='../index.html#Contact'>Contact</a></li>
                            <li><a href='account.html' class='change-color'>".$name."</a></li>
                        </ul>
                    </header>
                    <h1 class='thanks-header' id='thankYou' style='margin:0px 80px;'>Welcome ".$name." </h1>
                    <button><a href='../index.html' class='Go-back'>Update Account</a></button>
                    
                </section>    
                <script src='script.js'></script>
            </body>
            </html>";
        //If the user's login information doesn't work, they'll be given a "can't login" message/error.
        } else {
            echo "Can't login";
        }
    }
?>

