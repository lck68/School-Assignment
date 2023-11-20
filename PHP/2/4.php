<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<form action="" method="post">
请输入一个值：<input name="txt_canshu1" type="text" /><br>
<input name="btn_jisuan" type="submit" value="计算" />
<?php
if(isset($_POST["btn_jisuan"]))
{
	$x=$_POST["txt_canshu1"];
	$len = strlen($x);
	$aaa = 0;
	$bbb = 0;
	$ccc = 0;
	$ddd = 0;
	for($i=0;$i<$len;$i++){
		$char = $x[$i];
		if(($char >= 'a' && $char <='z') || ($char >= 'A' && $char <= 'Z')) {
$aaa++;
		}elseif ($char >= '0' && $char <= '9') {
			$bbb++;
		}elseif($char == ' ') {
			$ccc++;
		}else{
			$ddd++;
		}
	}
	echo "<br>英文:{$aaa}<br>数字:{$bbb}<br>空格:{$ccc}<br>其他:{$ddd}";
}
?>
</body>
</html>
