<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td><h2>OUR FEW BIRTHDAY DECORATIONS..</h2></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="32%" height="263"><img src="../img/IMG-20180626-WA0019.jpg" width="100%" height="259" /></td>
    <td width="32%"><img src="../img/IMG-20180626-WA0024.jpg" width="100%" height="259" /></td>
    <td width="32%"><img src="../img/IMG-20180626-WA0023.jpg" width="100%" height="259" /></td>
  </tr>
  <tr>
    <td height="259"><img src="../img/IMG-20180626-WA0025.jpg" width="100%" height="259" /></td>
    <td><img src="../img/IMG-20180626-WA0027.jpg" width="100%" height="259" /></td>
    <td><img src="../img/IMG-20180626-WA0029.jpg" width="100%" height="259" /></td>
  </tr>
  <tr>
    <td height="259"><img src="../img/pic19.jpg" width="100%" height="259" /></td>
    <td><img src="../img/IMG-20180626-WA0020.jpg" width="100%" height="259" /></td>
    <td><img src="../img/IMG-20180626-WA0026.jpg" width="100%" height="259" /></td>
  </tr>
</table>
<div align="center">
<form action="bgallery.php" method="post" >
<br/><br/><input type="submit" name="back" value="BACK"/>
</form>
</div>
<?php
       if(isset($_POST['back']))
	{
	   header('location:hpg.php');
    }   
?>
</body>
</html>