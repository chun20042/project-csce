<!doctype html>
<html>
<head>
<?php 
include("mysql.inc.php");

?>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?php
$sql="Select * from question";
   $result=mysql_query($sql);
    $row1 = mysql_fetch_array($result);
$row2= mysql_fetch_array($result);
$row3 = mysql_fetch_array($result);
echo "<script> console.log(".$row1.");</script>";
?>
<body>
</body>
</html>