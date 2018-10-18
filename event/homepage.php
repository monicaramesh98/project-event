<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>homepage</title>
<link rel="icon" href="../img/pic13.png" />
</head>
<body bgcolor="#80FFFF">
<table width="100%" height="200" border="1" style="text-align:center" bgcolor="#00CCFF">
  <tr>
  	<td width="19%"><img src="../img/pic13.png" width="100%" height="200" /></td>
    <td width="81%" height="200"><h2>BLUE ROSES DECORATIONS</h2></td>
  </tr>
</table>
<table width="100%" height="500" border="1" align="center">
  <tr>
    <td width="386"><img src="../img/pic14.jpg" width="100%" height="500" /></td>
    <td width="1008" height="500">
    <div align="center">
<form action="homepage.php" method="post" align="center" font-size="30">
<br/><br/><br/>
<input type="submit" name="USER" value="USER"/><br/><br/><br/>
<input type="submit" name="ADMIN" value="ADMIN"/><br/><br/><br/>
</form>
</div>
    </td>
    <td width="325"><img src="../img/pic12.jpg" width="325" height="500" /></td>
  </tr>
</table>


<?php
if(isset($_POST['USER']))
	{
	   header('location:hpg.php');
    }   
?>
<?php
if(isset($_POST['ADMIN']))
	{
	   header('location:alogin.php');
    }   
?>

</body>
</html>