<?php
include "lib/Session.php";
Session::init();
include "lib/Database.php";
include "helpers/Format.php";

spl_autoload_register(function ($class) {
include_once "classes/" . $class . ".php";
});

$db = new Database();
$fm = new Format();
$pd = new Product();
$cat = new Category();
$ct = new Cart();
$cmr = new User();
$sl = new Slider();
$con = new Contact();
?>


    <!--Navbar -->
           <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
       <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Nurin</title>
    <script type="text/javascript">
$(document).ready(function($) {
$('#dc_mega-menu-orange').dcMegaMenu({
    rowItems: '4',
    speed: 'fast',
    effect: 'fade'
});
});
</script>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
  <script type="text/javascript" src="js/swiper.min.js">
      
    </script>
    <script type="text/javascript" src="js/pay.js">
      
    </script>
    <!--NAV NAVBAR STARTS HERE -->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">
            <a href="index.html" class="navbar-brand">
            <img src="img/nur.png" alt=" New way">Nurin</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#explore-head-section" class="nav-link">Tamplate</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#create-head-section" class="nav-link">Explore</a>
                    </li>
                     <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#main-footer" class="nav-link">Contact Us</a>

                    </li>

                </ul>
              
            </div>
        </div>
    </nav>