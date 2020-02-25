
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
