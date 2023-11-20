<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <form action="" method="POST">
        请输入一个月份：<input name="txt_1" type="text"/><br>
        <input name="btn_tj" type="submit" value="季节"/><br>
    </form>
    <?php
        if(isset($_POST["btn_tj"])){
            $m=$_POST["txt_1"];
            switch($m){
                case $m >= 3 && $m <= 5 : echo "春天" ; break;
                case $m >= 6 && $m <= 8 : echo "夏天" ; break;
                case $m >= 9 && $m <= 11 : echo "秋天" ; break;
                case $m == 12 or $m >=1 && $m <= 2 : echo "冬天" ; break;
                default : echo "请输入1-12月" ; break;
            }
        }
    ?>
</body>
</html>