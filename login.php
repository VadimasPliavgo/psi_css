<html>
<head>
<meta charset="utf-8">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Prisijungimas</title>

</head>
<style>

    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("https://www.larutadelsorigens.cat/wallpic/full/113-1134531_modes-of-transport-cdl-truck-driver.jpg");
        min-height: 100%;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }

    body {
        background: #eee !important;
    }

    .wrapper {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);

    .form-signin-heading,
    .checkbox {
        margin-bottom: 30px;
    }

    .checkbox {
        font-weight: normal;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
    @include box-sizing(border-box);

    &:focus {
         z-index: 2;
     }
    }

    input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }


    /* Large Devices, Wide Screens */

    @media only screen and (max-width : 1500px) {
    }

    @media only screen and (max-width : 1200px) {
        .login {
            width: 600px;
            font-size: 2em;
        }
    }

    @media only screen and (max-width : 1100px) {
        .login {
            margin-top: 2%;
            width: 600px;
            font-size: 1.7em;
        }
    }

    /* Medium Devices, Desktops */
    @media only screen and (max-width : 992px) {
        .login {
            margin-top: 1%;
            width: 550px;
            font-size: 1.7em;
            min-height: 0;
        }
    }

    /* Small Devices, Tablets */
    @media only screen and (max-width : 768px) {
        .login {
            margin-top: 0;
            width: 500px;
            font-size: 1.3em;
            min-height: 0;
        }
    }

    /* Extra Small Devices, Phones */
    @media only screen and (max-width : 480px) {
        .login {

        h2 {
            margin-top: 0;
        }

        margin-top: 0;
        width: 400px;
        font-size: 1em;
        min-height: 0;
    }
    }

    /* Custom, iPhone Retina */
    @media only screen and (max-width : 320px) {
        .login {
            margin-top: 0;
            width: 200px;
            font-size: 0.7em;
            min-height: 0;
        }
    }


</style>
<body>
<?php
require('db.php');

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT id, username, email, admin, driver  FROM `users` WHERE username='$username'
and password='".md5($password)."' AND active ='1'";
 $result = mysqli_query($con,$query);


 $rows = mysqli_num_rows($result);
        if($rows==1){
            while($row = mysqli_fetch_assoc($result)) {
     $_SESSION['username'] = $row['username'];
     $_SESSION['email'] = $row['email'];
     $_SESSION['admin'] = $row['admin'];
     $_SESSION['driver'] = $row['driver'];
     $_SESSION['valid'] = true;
     $_SESSION['id'] = $row['id'];
            break;}
     header("Location: meniu.php");
         }else{
 echo "<div class='form'>
<h3><center>Username/password is incorrect or your user not activated yet!</center></h3>
<br/><center>Click here to <a href='login.php'>Login</a></center></div>";
 }
    }else{
?>
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">

        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="register.php" class="w3-bar-item w3-button">REGISTRACIJA</a>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">PAGRINDINIS</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Uždaryti ×</a>
            <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">REGISTRACIJA</a>
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">PAGRINDINIS</a>
        </nav>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<div class="wrapper">
    <form action="" method="post" name="login" class="form-signin">
        <h2 class="form-signin-heading" style="text-align:  center">Prisijungimas</h2>
        <input type="text" class="form-control" name="username" placeholder="Prisijungimo Vardas" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Slaptažodis" required=""/>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Prisijungti</button>
    </form>
</div>
<?php } ?>
</body>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>
</html>