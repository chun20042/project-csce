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

$_SESSION['us']=$row['us'];
$_SESSION['studying']=$row['studying'];
$_SESSION['story']=$row['story'];
$_SESSION['joinme']=$row['joinme'];
/*if(isset($_SESSION['username'])){
	echo "<script>hide(3000);</script>";
	echo "<script>$('#clickLogin').fadeTo(1000,0);</script>";
	}*/
	
 if($_POST['username']==NULL||$_POST['password']==NULL){
		 echo "請輸入帳號或密碼";
		   }
  else if( $pw==$upw&&$pw!=NULL){
	   echo "<script>$('#succes').show(2000);</script>"; sleep(2);
		 echo "<script>$('#succes').hide(2000);</script>";
	   sleep(2);
	     echo "<script>hide();</script>";
		echo"<script>$('#clickLogin').hide(3000);</script>";
	    $_SESSION['username']=$_POST['username'];
			echo"<script>call_information();</script>";
	   }
	   else if($pw!=$upw){
		    sleep(2);
		 echo "<script>$('#fail').show(1000);</script>";
		 sleep(2);
		 echo "<script>$('#fail').hide(2000);</script>";
		   }

	//}
	
		   


?>
</body>
</html>