<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
for($x=0;$x<=20;$x++)          
{
	for($y=0;$y<=33;$y++)
	{
		$z=100-$x-$y;
		if(($z%3==0) && (5*$x+3*$y+$z/3==100))
		{
		echo "公鸡有{$x}只，母鸡有{$y}只，小鸡有{$z}只<br>";
	    }
	}
}
?>
</body>
</html> 
