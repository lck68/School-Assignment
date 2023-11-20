<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$n=0;
for($num = 100 ;$num<1000; $num++)
{
    $ge=$num%10;
    $shi=(($num%100)-$ge) /10;
    $bai=floor($num/100);  // floor取整
    $sum1=$ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai;
    if($sum1==$num)
    {
        $n++;
        echo $num."<br>";
    }
}
echo "共".$n."个";
?>
</body>
</html>