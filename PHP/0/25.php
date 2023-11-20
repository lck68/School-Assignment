<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$s=1;
    for ($i = 1; $i <= 10; $i++) {
        for ($a=0; $a<= (10-$s); $a++){
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $s; $j++) {
            echo "*&nbsp;&nbsp;&nbsp;";  
        }$s++;
        echo "<br>";
    }
$ss=1;
    for ($ii = 10; $ii >= 1; $ii--) {
        for ($aa=1; $aa <= $ss; $aa++){
            echo "&nbsp;&nbsp;";
        }
        for ($jj = 10; $jj >= $ss; $jj--) {
            echo "*&nbsp;&nbsp;&nbsp;";  
        }$ss++;
        echo "<br>";
    }
?>
<body>
</body>
</html>