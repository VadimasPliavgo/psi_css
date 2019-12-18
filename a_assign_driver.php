<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

if ($_SESSION['admin'] == false)
    header("Location: meniu.php");
else {
    include ('db.php');
    if (isset($_POST['update'])) {
        $id = stripslashes($_POST['id']);

        $driver = stripslashes($_POST['driver']);
        $driver = mysqli_real_escape_string($con, $driver);
        $sql = "UPDATE orders SET driver_id  = $driver ,status = 'Vairuotojas priskirtas' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        header("Location: a_orders.php");
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT id, owner_id, load_city, discharge_city, volume, weight, quantity, type, status, price FROM orders WHERE id = $id LIMIT 1";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <html>
    <head>
        <head>
            <meta charset="utf-8">

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title>Edit Order</title>

        </head>
        <title>Redaguoti užsakymą</title>
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
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">

            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="a_users.php" onclick="w3_close()" class="w3-bar-item w3-button">VAIRUOTOJAI</a>
                <a href="a_orders.php" class="w3-bar-item w3-button">UŽSAKYMAI</a>
                <a href="auth.php" onclick="w3_close()" class="w3-bar-item w3-button">ATSIJUNGTI</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Uždaryti ×</a>
                <a href="a_users.php" onclick="w3_close()" class="w3-bar-item w3-button">VAIRUOTOJAI</a>
                <a href="a_orders.php" class="w3-bar-item w3-button">UŽSAKYMAI</a>
                <a href="auth.php" onclick="w3_close()" class="w3-bar-item w3-button">ATSIJUNGTI</a>
            </nav>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <br/><br/><br/>
    <div style="text-align: center;">
        <body>
            <h2>Priskirti Vairuotoją</h2>

            <form method="post" class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Id:<br>
                <input type="text"  class="form-control"value="<?php echo $row['id']; ?>" disabled><br>
                Pasikrovimo Adresas:<br>
                <input type="text"  class="form-control"value="<?php echo $row['load_city']; ?>" disabled><br>
                Išsikrovimo Adresas:<br>
                <input type="text"  class="form-control"value="<?php echo $row['discharge_city']; ?>" disabled><br>
                Tūris (m3):<br>
                <input type="numer" class="form-control"value="<?php echo $row['volume']; ?>" disabled><br>
                Svoris (kg):<br>
                <input type="number" class="form-control"value="<?php echo $row['weight']; ?>" disabled><br>
                Kiekis:<br>
                <input type="number" class="form-control"value="<?php echo $row['quantity']; ?>" disabled><br>
                Tipas:<br>
                <input type="text" class="form-control"value="<?php echo $row['type']; ?>" disabled><br><br>
                Kaina €:<br>
                <input type="number" class="form-control"name="price" value="<?php echo $row['price']; ?>" disabled ><br>
                Statusas:<br>
                <input type="text" class="form-control"value="<?php echo $row['status']; ?>" disabled><br>
                Vairuotojas:<br>
                <select name="driver" class="form-control">
                    <?php
                    $sql = "SELECT id, username FROM users WHERE driver = true";
                    $result = mysqli_query($con, $sql);
                     while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
                     <?php } ?>
                </select>


                <br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="update" value="Update">Patvirtinti</button>


            </form> 
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
<?php } ?>