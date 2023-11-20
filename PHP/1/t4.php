<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>三数比大小</title>
</head>

<body>
	<form action="" method="post">
第一个参数: <input name="txt_canshu1" type="text" /><br>
第二个参数: <input name="txt_canshu2" type="text" /><br>
第三个参数: <input name="txt_canshu3" type="text" /><br>
	<input name="btn_jisuan" type="submit" value="计算" />
	</form>
	<?php
	//定义两个全局变量分别存储最大值与最小值
	$max=0;
	$min=0;
	if(isset($_POST["btn_jisuan"]))      //判断是否单机了按钮
	{
		$a=$_POST["txt_canshu1"];
		$b=$_POST["txt_canshu2"];
		$c=$_POST["txt_canshu3"];

		if($a>$b){
			$max=$a;$min=$b;
		}
		else{
			$max=$b;$min=$a;
		}
		if($c>$max) $max=$c;
		if($c<$min) $min=$c;
		}
	echo "三个数中最大的数是".$max."<br>最小数是".$min;
	?>
</body>
</html>
