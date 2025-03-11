<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    session_start();
    error_reporting(0);
    if (isset($_SESSION['message'])){
        echo"<script>alert('".$_SESSION['message']."')</script>";
        unset($_SESSION['message']);
    }
    ?>
<body>
    <img src="Stype/img/list1.png" alt="" Stype="width:120px">
    <div class="nav">
        <ul>
            <?php
            echo"<li><a href='index.php'>Trang chủ</a></li>";
            if(isset($_SESSION['login'])){
                echo"<li><a href='index.php?page=uploadview'>Upload</a></li>";
                if($_SESSION['Upload']){
                    echo"<li><a href='index.php?page=uploadview'>View</a></li>";
                }
                echo"<li><a href='index.php?page=logout'>Đăng xuất</a></li>";
            } elseif  ($_SESSION['register']){
                echo"<li><a href='index.php?page=loginview'>Đăng nhập</a></li>";
            } else {
                echo '<li><a href="index.php?page=registerview">Đăng ký</a></li>';
            }
            ?>
        </ul>
        <input type="text" name="search" id="search" placeholder="Tìm kiếm sản phẩm">
    </div>
    <?php
    $p = $_REQUEST['page'];
    switch ($p) {
        case 'registerview':
            include("View/dangky.php");
            break;
            case "register":
                include("Controller/dangky.php");
                break;   
    }
    ?>
</body>
</html>