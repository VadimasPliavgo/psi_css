<?php
session_start();
if ($_SESSION['valid'] != true)
    header("Location: login.php");

if ($_SESSION['admin'] == false)
    header("Location: meniu.php");
else {
    ?>
    <html>
    <head>
        <meta charset="utf-8">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Vartotojai</title>

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
        *{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        body{
            font-family: Helvetica;
            -webkit-font-smoothing: antialiased;
            background: rgba( 71, 147, 227, 1);
        }
        h2{
            text-align: center;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: white;
            padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper{
            margin: 10px 70px 70px;
            box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
        }

        .fl-table {
            border-radius: 5px;
            font-size: 12px;
            font-weight: normal;
            border: none;
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            background-color: white;
        }

        .fl-table td, .fl-table th {
            text-align: center;
            padding: 8px;
        }

        .fl-table td {
            border-right: 1px solid #f8f8f8;
            font-size: 12px;
        }

        .fl-table thead th {
            color: #ffffff;
            background: #007bff;
        }


        .fl-table thead th:nth-child(odd) {
            color: #ffffff;
            background: black;
        }

        .fl-table tr:nth-child(even) {
            background: #F8F8F8;
        }

        /* Responsive */

        @media (max-width: 767px) {
            .fl-table {
                display: block;
                width: 100%;
            }
            .table-wrapper:before{
                content: "Daugiau infomacijos >";
                display: block;
                text-align: right;
                font-size: 11px;
                color: black;
                padding: 0 0 10px;
            }
            .fl-table thead, .fl-table tbody, .fl-table thead th {
                display: block;
            }
            .fl-table thead th:last-child{
                border-bottom: none;
            }
            .fl-table thead {
                float: left;
            }
            .fl-table tbody {
                width: auto;
                position: relative;
                overflow-x: auto;
            }
            .fl-table td, .fl-table th {
                padding: 20px .625em .625em .625em;
                height: 60px;
                vertical-align: middle;
                box-sizing: border-box;
                overflow-x: hidden;
                overflow-y: auto;
                width: 120px;
                font-size: 13px;
                text-overflow: ellipsis;
            }
            .fl-table thead th {
                text-align: left;
                border-bottom: 1px solid #f7f7f9;
            }
            .fl-table tbody tr {
                display: table-cell;
            }
            .fl-table tbody tr:nth-child(odd) {
                background: none;
            }
            .fl-table tr:nth-child(even) {
                background: transparent;
            }
            .fl-table tr td:nth-child(odd) {
                background: #F8F8F8;
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tr td:nth-child(even) {
                border-right: 1px solid #E6E4E4;
            }
            .fl-table tbody td {
                display: block;
                text-align: center;
            }
        }


    </style>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">

            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="a_users.php" onclick="w3_close()" class="w3-bar-item w3-button">VARTOTOJAI</a>
                <a href="a_orders.php" class="w3-bar-item w3-button">UŽSAKYMAI</a>
                <a href="auth.php" onclick="w3_close()" class="w3-bar-item w3-button">ATSIJUNGTI</a>
            </div>
            <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Uždaryti ×</a>
                <a href="a_users.php" onclick="w3_close()" class="w3-bar-item w3-button">VARTOTOJAI</a>
                <a href="a_orders.php" class="w3-bar-item w3-button">UŽSAKYMAI</a>
                <a href="auth.php" onclick="w3_close()" class="w3-bar-item w3-button">ATSIJUNGTI</a>
            </nav>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
            <br><br>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Vartotoja Vardas</th>
                    <th>Įmonės Pavadinimas</th>
                    <th>Admin</th>
                    <th>Varuotojas</th>
                    <th>Aktyvus</th>
                    <th>Veiksmas</th>
                </tr>
            </thead>
            <tbody
                <?php
                    require ('db.php');
                $query = "SELECT id, username, email, admin, company_name, active, driver  FROM `users`";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['company_name'] . "</td>";
                    if($row['admin']==true)
                        echo "<td><input type='checkbox' disabled checked></td>";
                    else
                        echo "<td><input type='checkbox' disabled></td>";
                    
                    if($row['driver']==true)
                        echo "<td><input type='checkbox' disabled checked></td>";
                    else
                        echo "<td><input type='checkbox' disabled></td>";
                    if($row['active']==true)
                        echo "<td><input type='checkbox' disabled checked></td>";
                    else
                        echo "<td><input type='checkbox' disabled></td>";
                    echo "<td><a href='a_edit_user.php?id=".$row['id']."'>Redaguoti</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
    </div>
        </tbody>
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