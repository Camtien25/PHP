<?php
    if(isset($_SESSION['message'])){
        echo"<script>alert('".$_SESSION['message']."')</script>";
        unset($_SESSION['message']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="Stype/style.css">
</head>
<body>
    <div class="container">
        <div class="container-left">
            <div class="container-left-top">
                <h2>Doanh mục Thương hiệu</h2>
            </div>
            <ul>
                <li><a href="#">Apple</a></li>
                <li><a href="#">SamSung</a></li>
                <li><a href="#">Sony</a></li>
                <li><a href="#">Xiaomi</a></li>
            </ul>
        </div>
    </div>
    <div class="container-right">
        <form action="index.php?page=register" method="post">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" id="username" required><br>
            <label for="password-dk">Mật khẩu:</label>
            <input type="password" name="password" id="password" required><br>
            <label for="repassword">Nhập lại mật khẩu:</label>
            <input type="password" name="repassword" id="repassword" required><br>
            <button type="submit" name="register">Đăng ký</button>
        </form>
    </div>
    <div class="footer">
        <p>Nguyễn Ngọc Cẩm Tiên - 22634831</p>
    </div>
</body>
</html>