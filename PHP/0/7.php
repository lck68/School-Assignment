<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>求和</title>
</head>

<body>
    <form action="" method="post">
    请输入两个数：<br>
        <input name="txt_1" type="text"/><br>
        <input name="txt_2" type="text"/><br>
        <input name="btn_tj" type="submit" value="计算"/>
    </form>
    <?php
    if(isset($_POST["btn_tj"]))
    {
        $a=$_POST["txt_1"];
        $b=$_POST["txt_2"];
        $c=$a+$b;
        echo "第一个数是：" .$a. "，第二个数是：" .$b. "，他们的和是：" .$c. "。";
    }
    ?>
</body>
</html>