<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<style type="text/css">
table,td{
    width:200px;
    border:1px solid #F00;
    text-align: center;
    color: blue;
}
</style>
<?php 
echo "<table>"; 
    for ($i = 1; $i <= 100; $i++){
        if($i%10==0){       
        echo "<td>".$i."</td></tr>";
        } else{
        echo "<td>".$i."</td>"; 
        } 
    }
echo "</table>";
?>
</body>
</html>