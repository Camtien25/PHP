<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_FILES= $_FILES ["fflile"];
    echo $_file["name"]."<br>";
    echo $_file["type"]."<br>";
    echo $_file["size"]."<br>";
    echo $_file["tmp_name"];
    echo"<hr>";
    if($file["size"]>1*1024*1024){
        echo" dung lương quá ớn";
        $des = "abc/".$file["name"];
        move_uploaded_file($file["tmp_name"],$des);
    }
    ?>
</body>
</html>