<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page</title>
<link rel="icon" href="../img/pic13.png" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body background="../img/pic16.jpg" onload="MM_preloadImages('../img/pic8.jpeg','../img/pic11.jpg')">
<table width="100%" border="1"  style="text-align:
center" >
  <tr>
    <td><h2>BOOK AN EVENT</h2></td>
  </tr>
</table>
<table width="600px" border="1" height="228"  align="center">
  <tr>
    <td height="222"><div align="center">
		<form action="hpg.php" method="POST" align="center" font-size="50">
        <br/>
		<input type="submit" value="MARRIAGE" name="MARRIAGE" size="50"/>
		<br /><br/>
        <input type="submit" value="BIRTHDAY" name="BIRTHDAY" size="50"/>
        <br/>
        <br/>
        <br/>
        <input type="submit" name="menu" value="MENU"/>
        <br/>
        <br/>
        <input type="submit" name="cancel" value="CANCEL A BOOKED EVENT"/>
		</form>
       </div></td>
  </tr>
</table>
<table width="100%" height="554" border="1" align="center">
  <tr>
    <td height="548"><br/>A GRANT BEGINNING OF YOUR MARRIED LIFE..<a href="mgallery.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','../img/pic8.jpeg',1)"><img src="../img/pic5.jpg" width="500px" height="500px" id="Image1" /></a></td>
    <td><br/>MAKE YOUR DAY A GREAT MEMORY..<a href="bgallery.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../img/pic11.jpg',1)"><img src="../img/pic10.jpg" width="500px" height="500px" id="Image2" /></a></td>
  </tr>
</table>
<?php
       if(isset($_POST['cancel']))
	{
	   header('location:eventcancel.php');
    }   
?>


<?php
       if(isset($_POST['menu']))
	{
	   header('location:homepage.php');
    }   
?>


        <?php
       if(isset($_POST['MARRIAGE']))
	{
	   header('location:marry.php');
    }   
?>
<?php
	if(isset($_POST['BIRTHDAY']))
	{
	   header('location:birth.php');
    }   
?>
	
</body>
</html>