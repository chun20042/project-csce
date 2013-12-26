<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>

<?PHP
ob_start();
session_start();
 include("mysql.inc.php");
  
   $sql="Select * from member where username='{$_POST['username']}'";
   $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
$pw=$row['password'];
$upw=$_POST['password'];
   if( strcmp($pw,$upw)){
	   echo "<script>alert('密碼錯誤');</script>";
	   }
	   else{
		    //所以紀錄 Session 起始時間
if (!isset($_SESSION['username'])){
  $_SESSION['username']=$_POST['username'];
}
		   }


?>
</body>
</html>