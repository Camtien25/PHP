<?php
include_once("model/mNguoiDung.php");
$p = new User();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$repassword = $_REQUEST['repassword'];
$p->Register($email, $password, $repassword);
?>