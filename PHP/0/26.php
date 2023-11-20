<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        $m1 = 1;
        for ($j = 1; $j <= $i; $j++) {
            $m1 *= $j;
        }$sum += $m1;
    }echo "1-10的阶乘之和是$sum";
?>
<body>
</body>
</html>