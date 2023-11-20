<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>计算bmi</title>
</head>

<body>
<form action="" method="post">
请输入身高：<input name="txt_shengao" type="text"/>m<br>
请输入体重：<input name="txt_tizhong" type="text"/>kg<br>
<input name="btn_jisuan" type="submit" value="让我看看你胖不胖"/><br>
<?php
if(isset($_POST["btn_jisuan"]))
{
    $shengao=$_POST['txt_shengao'];
    $tizhong=$_POST['txt_tizhong'];
    $bmi=$tizhong/($shengao*$shengao);
    switch($bmi){
        case $bmi<18.5;
        echo"偏瘦"; break;
        case $bmi>=18.5 && $bmi<24.0;
        echo"正常"; break;
        case $bmi>=24.0 && $bmi<27.0;
        echo"偏胖"; break;
        case $bmi>=27.0;
        echo"加油！运动"; break;  
        }
    }
?>
</body>
</html>