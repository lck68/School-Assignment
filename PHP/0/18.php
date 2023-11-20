<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
请输入一个整数：<input name="txt" type="text"/><br>
<input name="btn_jisuan" type="submit" value="计算"/><br>
</form>
<?php
    if(isset($_POST["btn_jisuan"]))
    {
        $txt = $_POST['txt'];
        $result=1;
        if($txt >= 0)
        {
            for($i=1;$i<=$txt;$i++)
        {
            $result=$result*$i;
        }
        echo $txt."的阶乘为".$result;
        }
        else{
            echo "负数没有阶乘";
        }
    }
?>
</body>
</html>