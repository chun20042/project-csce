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
	if($_POST['username']==NULL||$_POST['password']==NULL||$_POST['re_password']==NULL||$_POST['email']==NULL||$_POST['name']==NULL){
	echo "請把資料輸入完整";echo "<script>$('#register').fadeTo(2000,1);</script>";}
	else if($_POST['password']!=$_POST['re_password']){
		echo "密碼輸入不一致";
		echo "<script>$('#register').fadeTo(2000,1);</script>";
		}
	else{
if($row==NULL){
	$sql2="INSERT INTO member (username,password,email,name,joinme) VALUES('{$_POST["username"]}','{$_POST["password"]}','{$_POST["email"]}','{$_POST["name"]}',10)";
mysql_query($sql2);
sleep(3);
	echo "<script>
	$('#register_succes').show(2000);
			  $('#register').hide(2000);
	hide();
	$('#register_succes').hide(2500);
	$('#clickLogin').hide(2500);
		</script>";
		echo"<script>call_information();</script>";
	$_SESSION['username']=$_POST['username'];
	}
	else{
		echo "<script>$('#register').fadeTo(2000,1);</script>";
echo "已有相同用戶登記";

	}
	
	}	   


?>
</body>
</html>