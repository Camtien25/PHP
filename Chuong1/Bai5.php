<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_5</title>
</head>
<body>
    <?php
    $values = [0,1,2,3,4,5,6,7,8,9,10];
    echo "table";
    echo"<tr><th>i</th><th>Kết quả</th></tr>";
    foreach ($values as $i) {
        $result = $i **2;
        $ketqua  = number_format($result);
        echo "<tr><td>$i</td><td>$ketqua</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>