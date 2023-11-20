<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="" method="post">
请输入从几开始：<input name="start" type="text"/><br>
请输入到几终止：<input name="end" type="text"/><br>
<input name="btn_jisuan" type="submit" value="计算"/><br>
</form>
<?php
    if(isset($_POST["btn_jisuan"]))
    {
        $start = $_POST['start'];
        $end = $_POST['end'];
        $a = 0;
        if($start > $end)
        {
            $aa = $start;$start= $end;$end= $aa;
        }
        for ($i = $start; $i <= $end; $i=$i+2) {
            $a = $a + $i;
        }
        echo "从 $start 加到 $end 的和为".$a;
    }
?>
</body>
</html>