<?php
include_once 'Model/mNguoiDung.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["Upload"])) {
    $p = new User();
    $file = $_FILES['Upload'];
    $p->Upload($file);
} else {
    $_SESSION['message'] = "Upload thất bại";
    header('Location: index.php?page=uploadview');
}
?>