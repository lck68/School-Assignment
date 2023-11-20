<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
第一个参数：<input name="txt_canshu1" type="text"/><br>
第二个参数：<input name="txt_canshu2" type="text"/><br>
<input name="btn_jisuan" type="submit" value="计算"/>
<?php
$max=0;
$min=0;
if(isset($_POST["btn_jisuan"]))
{
    $canshu1=$_POST["txt_canshu1"];
    $canshu2=$_POST["txt_canshu2"];
    if($canshu1>=$canshu2)
    {
        $max=$canshu1;
        $min=$canshu2;
    }
    if($canshu1<$canshu2)
    {
        $max=$canshu2;
        $min=$canshu1;
    }
    echo "<br>两个数中最大的数是：".$max."<br>两个数中最小的数是：".$min;
}
?>
</body>
</html>
