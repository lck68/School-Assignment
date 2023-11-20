<meta charset='utf-8'>
<title>输出九九乘法表 </title></head>
<body>
<style type="text/css">
td{
    width:200px;
    border:1px solid #F00;
    text-align:center;
    color:blue;
}
</style>
<?php
$i=1;
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        echo "<td>"."$i*$j=".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</htm1>