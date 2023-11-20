<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
请输入小狗的年龄：<input name="txt_1" type="text"/><br>
<input name="btn_jisuan" type="submit" value="让我看看它几岁"/><br>
<?php
if(isset($_POST["btn_jisuan"]))
{
    $dog=$_POST["txt_1"];
    
    if($dog > 0){
        switch($dog){
            case $dog <=2 : 
                $year = $dog*10.5;
                echo "相当于人的".$year."岁！";
            default:
                $year = ($dog-2)*4+21;
                echo "相当于人的".$year."岁！";
        }
    }

}
?>
</body>
</html>