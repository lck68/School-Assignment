<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title</title>
</head> 
<body>
 <?php
   $a=300; 
   echo "能被5整除有:<br>";
   for($a=100;$a<=300;$a++)
   {
     if($a%5==0)
     {
         echo $a.",";
     }
   }
 ?>
</body>
</html> 
