<?php
include_once("Model/mNguoiDung.php");
$p = new User();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$p->Login($email, $password);
?>
