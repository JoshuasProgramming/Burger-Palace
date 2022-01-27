<?php
    //Get users session
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
    session_start();
?>

<html>
<head>
<title>Welcome <?php echo $_SESSION["name"];?></title> <!--insert user's session name in HTML title--->
</head>
<body>

<?php

//if the user has a session created from the previous page (login.html) then we'll print
//out the unique page for the user's session

//this page includes inserts of PHP (echo $_SESSION['name']), which are used to show the
//user's name on the navigation bar AND to address the user, with a welcome message
//Everything else in the HTML script below is identical to the index.html file (its just 
//in php this time).
if($_SESSION["name"]){

?>
<?php

echo "
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='style.css'>
<body>
     <!--Navigation bar & hero section below-->
     <section class='top' id='landingPage'>
        <header>
            <p><a href='index.html#landingPage' class='landing-direct'>Burger Palace</a></p>
            <ul class='navbar'>
                <li><a href='index.html#About'>About</a></li>
                <li><a href='index.html#Menu'>Menu</a></li>
                <li><a href='index.html#Contact'>Contact</a></li>
                <li><a href='account.php' class='change-color'>"; echo $_SESSION['name'];"</a></li>";
                echo "
                <li><a href='logout.php' title='logout'>Logout</a></li>
            </ul> "; echo "
        </header>
        <h1 class='account-header' id='thankYou' style='margin:0px 80px;'>Welcome<br><center>"; echo $_SESSION['name'];"</center>"; echo "</h1>
        <a href='account.php' class='Update-cta'>Update Account</a>
        <a href='#' class='Delete-cta' id='delete_btn'>Delete Account</a>
    </section>    
    <script src='script2.js'></script>
</body>
</html>";

    //If the user hasn't made a session created from the previous page (login.html)
    //They'll be given this echo/error message below.
    } else {
        echo "Can't access index.php. Try a different name, email and password";
    }
?>
</body>
</html>



























<!---
echo "
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../style.css'>
            <body>
                 Navigation bar & hero section below
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
--->