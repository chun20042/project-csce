<!DOCTYPE html>
<html lang="en">

<?php
   header('Content-Type: text/html; charset=utf-8');
   include("mysql.inc.php");
   $sql="Select * from news order by update_time DESC";
   $result=mysql_query($sql);

     echo "<table border='0'> ";

      for($i=0;$i<5;$i++){
         $row = mysql_fetch_array($result);
         echo "<tr><td>".$row['title']."</td><td>".$row['update_time']."</td></tr>";
     }
     echo"</table>";
?>

</html>