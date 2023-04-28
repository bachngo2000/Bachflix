<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/VideoProvider.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Bachflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/562239666d.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <div class='wrapper'>

        <div class="topBar">
            <div class="logoContainer">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>
            </div>

            <ul class="navLinks">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>

                <li>
                    <a href="shows.php">
                        TV Shows
                    </a>
                </li>

                <li>
                    <a href="movies.php">
                        Movies
                    </a>
                </li>
            </ul>

            <div class="rightItems">
                <a href="search.php">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

                <a href="profile.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>

        </div>
