<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
请输入身份证号：<input name="txt_1" type="text"/><br>
<input name="btn_jisuan" type="submit" value="让我看看你男的女的"/><br>
<?php
if(isset($_POST["btn_jisuan"]))
{
    $id_num=$_POST["txt_1"];
    $check_num=substr($id_num,16,1);
    if($check_num%2==1){
        echo $id_num."，你是男的！";
    }else{
        echo $id_num."，你是女的！";
    }

}
?>
</body>
</html>