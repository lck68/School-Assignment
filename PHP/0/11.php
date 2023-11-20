<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
输入分数：<input name="txt_1" type="text"/><br>
<input name="btn_jisuan" type="submit" value="让我看看你考得咋样"/><br>
<?php
if(isset($_POST["btn_jisuan"]))
{
    $chengji=$_POST["txt_1"];
    if($chengji >=0 && $chengji <= 100)
    {
        switch($chengji)
        {
            case $chengji >= 90 : 
                echo "你真优秀！"; 
                break;
            case $chengji >= 80 : 
                echo "成绩良好！";
                 break;
            case $chengji >= 60 : 
                echo "一般般啦！"; 
                break;
            default :
                echo "不及格欸！"; 
                break;
        }
    }

}
?>
</body>
</html>