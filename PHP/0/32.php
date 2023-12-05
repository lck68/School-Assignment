<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<!-- <?php
    $arr5=array(2,3,"number"=>"01","color"=>"red");
    var_dump($arr5);
    echo $arr5[1];
    echo $arr5["color"];
?> -->

<!-- <?php
    $arr1=range(1,5);
    $arr2=range(1,10,2);
    $arr3=range("a","f");
    var_dump($arr1);
    var_dump($arr2);
    var_dump($arr3);
?> -->

<!-- <?php
    $arr=array(1,2,3,4,5,6);
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i]."&emsp;";
    }
?> -->

<?php
    $color=array("a"=>"red","blue","white");
    foreach($color as $value){
        echo $value."&emsp;";
    }
?>
</body>
</html>