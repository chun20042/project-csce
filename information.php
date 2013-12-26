<!doctype html>
<html>

<head>
<?PHP
ob_start();
@session_start();
 include("mysql.inc.php");
 $sql="Select * from member where username='{$_SESSION['username']}'";
   $result=mysql_query($sql);
    $row = mysql_fetch_array($result);
?>
<meta charset="utf-8">
<title>無標題文件</title>
<style type="text/css">
table {
	background-repeat: no-repeat;
}
</style>

<script>
$(function(){
	$('#in').hover(function(){
		$(this).stop(true,false).animate({top:'0px'});
		},function(){$(this).stop(true,false).animate({top:'+252px'});
	});
});
</script>
</head>

<body>
<div id="in">
<table width="369"  height="299" border="0" cellspacing="3" cellpadding="3" background="pic/information.png"  >
  <tr>
    <td width="212" height="68">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="47">&nbsp;</td>
    <td colspan="2" id="u_name"><br><?php
    echo $row['name'];
	?></td>
  </tr>
  <tr>
    <td height="174" rowspan="2" id="u_ch">&nbsp;</td>
    <td width="24" height="79">&nbsp;</td>
    <td width="103"><?php
    echo 100-($row['ch1']+$row['ch2']+$row['studying']+$row['us']+$row['story']+$_SESSION['joinme'])*2;?>%</td>
  </tr>
  <tr>
    <td height="90" colspan="2">&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>