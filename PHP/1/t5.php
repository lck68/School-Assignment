<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>百十个</title>
</head>

<body>
	<form action="" method="post">
    请输入一个三位数：<input name="txt_canshu1" type="text" /><br>
    <input name="btn_jisuan" type="submit" value="计算" />
    </form>
	<?php
	if(isset($_POST["btn_jisuan"]))
	{
	$num=$_POST["txt_canshu1"];	
	$ge=$num%10;
	$bai=(int)($num/100);
	$shi=(int)($num%100/10);
	// 输出每一位上的数字
	echo "百位上的数字是：".$bai."<br>";
	echo "十位上的数字是：".$shi."<br>";
	echo "个位上的数字是：".$ge."<br>";
	}
	?>
</body>
</html>
