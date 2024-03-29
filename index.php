<!DOCTYPE html>
<html>
<title>Pagrindinis Puslapis</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">

        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="register.php" class="w3-bar-item w3-button">REGISTRACIJA</a>
            <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PRISIJUNGIMAS</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Uždaryti ×</a>
    <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">REGISTRACIJA</a>
    <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">PRISIJUNGIMAS</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <span class="w3-jumbo w3-hide-small" style="color: #03fcf4">Drive & Go</span><br>
        <span class="w3-xxlarge w3-hide-large w3-hide-medium" style="color: #03fcf4">Drive & Go</span><br>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">

    </div>
</header>




<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
    <iframe  class="overlay" width="280" height="158" src="https://www.youtube.com/embed/z885iHVJfBY?autoplay=1&mute=1" ></iframe>


    <p>Digital Enterprise</a></p>
</footer>

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

</body>
</html>
