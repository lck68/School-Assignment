<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>求圆的周长和面积</title>
</head>

<body>
    <form action="" method="post">
    请输入圆的半径：
        <input name="txt_r" type="text"/><br>
        <input name="btn_tj" type="submit" value="计算"/>
    </form>
    <?php
    define("pi",3.14);
    if(isset($_POST["btn_tj"]))
    {
        $r=$_POST["txt_r"];
        $c=2*pi*$r;
        $s=$r*$r*pi;
        echo "圆的半径是：" .$r. "，圆的周长为：" .$c. "，圆的面积为：" .$s. "。";
    }
    ?>
</body>
</html>