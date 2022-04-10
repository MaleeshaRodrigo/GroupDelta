<?php 
    require_once ("config/constants.php");
  function CurrentSite()
    {
        $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
        return $curPageName;
    } 
    ?>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon.png">
  <title>
    <?php 
        switch(CurrentSite()){
            case "about.php":
                echo("About-Us");
                break;
            case "index.php":
                echo("Sri Lanka Train System | Group Delta");
                break;
        }  
    ?>
  </title>
  <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <nav class="navbar">
        <div class="nav-links">
        <ul>
            <li><img src="images/favicon.png" alt="Logo">
            <a href="index.php">Group Delta</a></li>
            <li><a href="booking-form.php">Tickets</a></li>
            <li><a href="time-table.php">Time Table</a></li>
            <li><a href="about.php">About us</a></li>
            <a href="sign-up.php" id="login-btn">
            Sign Up
            <img src="images\person2.png">
            </a>
        </ul>
        </div>
    </nav>