<?php
require "RegisterController.php";

if( isset($_POST["fname"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["confirm_pwd"];

$controller = new Controller($fname, $lname, $email, $pwd, $confirm_pwd);
$controller->verifyControl();
}else {
    // echo "medenou";
    // // header("Location:../../public/sign_up.php?msg=error");
    // exit();
}
