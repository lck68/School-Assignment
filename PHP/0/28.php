<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$num = 100;
    for ($i = 2; $i <= $num; $i++) {
        $a = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $a = false;
                break;
            }
        }

        if ($a) {
            echo $i . "&nbsp;";
        }
    }
?>
<body>
</body>
</html>