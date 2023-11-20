<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
请输入X：<input name="txt" type="text"/><br>
<input name="btn_jisuan" type="submit" value="求y"/><br>
<?php
if(isset($_POST["btn_jisuan"]))
{
    $x=$_POST['txt'];
    switch($x){
        case $x<0:
        echo "y为".(2*$x+1); break;
        case $x>=0 && $x<10:
        echo "y为".(-2*$x-1); break;
        case $x==10 :
        echo "y为".(100); break;
        case $x>10:
        echo "y为".(3*$x+2); break;  
        }
    }
?>
</body>
</html>