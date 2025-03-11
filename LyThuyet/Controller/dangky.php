<?php
    include_once("Modal/mNguoiDung.php");
    $x = new User();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $repassword =$_REQUEST['repassửod'];
    $x->Register($email,$password,$repassword);
?>