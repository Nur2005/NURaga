 

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
        <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
       <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
<style type="text/css">
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);


.darken-grey-text {
    color: #2E2E2E;
}

.navbar .dropdown-menu a:hover {
    color: #29a3a3 !important;
}
.darken-grey-text {
    color: #29a3a3;
}

</style>

<body class="hm-gradient">
    
    
        
        <!--MDB Navbars-->
        
            <!--Navbar blue-->
            <ul  id="dc_mega-menu-orange" class="dc_mm-orange">
            <nav  class="navbar navbar-expand-lg navbar-dark teal mb-4">

               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
    <li ><a href="index.php">Home</a></li>
    
   


    <?php
    $chkCart = $ct->checkCartTable();
    if ($chkCart) { ?>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="payment.php">Payment</a></li>
    <?php  }  ?>

    <?php
    $cmrId =  Session::get("cmrId");
    $chkOrder = $ct->checkOrder($cmrId);
    if ($chkOrder) { ?>
        <li><a href="order.php">Order</a></li>

    <?php  }  ?>

    <?php
    $login =  Session::get("cuslogin");
    if ($login == true) { ?>
        <li><a href="profile.php">Profile</a></li>
    <?php }     ?>
    

<?php  
        $getPd = $pd->getCompareProduct($cmrId);
        if ($getPd) {  ?>                    
    <li><a href="compare.php">Compare</a> </li>   

 <?php }     ?>



 <?php
      
        $checKwlist = $pd->checkWlistData($cmrId);
        if ($checKwlist) {  ?>
                        
    <li><a href="wishlist.php">Wish List</a> </li>
 <?php }     ?>




    <li><a href="contact.php">Contact</a> </li>
    <div class="clear"></div>

</div>





    </div>

    <div class="clear"></div>

                    
 <div style="" class="shopping_cart">
        <div class="cart">
            <a href="#" title="View my shopping cart" rel="nofollow">
                <span class="cart_title">Cart</span>
                <span class="no_product">
                    <?php

                    $getData = $ct->checkCartTable();
                    if ($getData) {
                        $sum = Session::get("sum");
                        $qty = Session::get("qty");
                        echo " $ " . $sum . " Qty " . $qty;
                    } else {
                        echo "(Empty)";
                    }

                    ?>

                </span>
            </a>
        </div>
    </div>



                    <form style="width: 120px;margin-right: 20px;" action="search.php" method="get"class="form-inline">
                        <input style="font-size: 12px;" type="text" name="search" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}" class="form-control mr-sm-2" >
</form>
                
            </nav>
          </ul>