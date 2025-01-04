<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyThuyet3_01</title>
</head>
<body>
    <?php
    $student= array("Nam"=> array("ly"=>4, "toán"=>5, "hoa"=>6),
                    "Huy"=> array("ly"=>7, "toán"=>8, "hoa"=>9),
                    "Tam"=> array("ly"=>9, "toán"=>8, "hoa"=>9),
);
//echo $student['Nam']['hoa'];
?>
<br>
<?php
$cars = array("Volvo","BMW", "Toyota");
$arrl = count( $cars );
foreach( $cars as $x ) {
    //echo $x; 

}
?>
<br>
<?php
$a = "TRUONG DHCN TP.HOCHIMINH";
//echo strlen($a);
// echo substr(string: $a,offset: 3, length: 8); 
//echo substr(string: $a,offset: 3,length: -8);
//echo substr(string: $a,offset: -13,length: 8);
//echo substr(string: $a,offset: -13,length: -8);
// ?>


//<?php 
// tách một chuỗi bắt đầu từ $needle đến hết
$website = 'huuquang.com';
$domain = strstr( $website,'.');
//echo$domain;
?>



<?php
function dounlevual($var = 5)
{
    //global $temp ;
    $temp = $var *2;
}
$temp = 5;
dounlevual();
echo "\$remp is: $temp";

?>


</body>
</html>