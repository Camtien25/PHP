<?php
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "')</script>";
    unset($_SESSION['message']);
}           
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="Style/style.css">
</head>

<body>
    <div class="container">
        <div class="container-left">
            <div class="container-left-top">
                <h2>Danh mục Thương hiệu</h2>
            </div>
            <div class="container-left-bottom">
                <ul>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Sony</a></li>
                    <li><a href="#">Xiaomi</a></li>
                </ul>
            </div>
        </div>
        <div class="container-right">
            <form action="index.php?page=login" method="post">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" name="username" id="username" required><br>
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" id="password" required><br>
                <button type="submit" name="login">Đăng nhập</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>Trần Lê Kiệt - 22694611</p>
    </div>

</body>

</html>