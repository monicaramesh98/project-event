<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<table width="100%" border="1" align="center" style="text-align:center">
  <tr>
    <td><h3>CANCEL A BOOKED EVENT</h3></td>
  </tr>
</table>

<table width="100%" border="1" background="../img/pic15.jpg" height="500px">
  <tr>
    <td>
    <div align="center">
    <form action="eventcancel.php" method="post">
    <br/><br/>
    ENTER YOUR EMAILID:<input type="text" name="email" size="50" /><br/><br/>
    <input type="submit" name="cancel" value="CANCEL"/><br/> <br/>
    <input type="submit" name="menu" value="MENU"/>
    
    </form>
    </div>
    </td>
  </tr>
</table>
<?php
       if(isset($_POST['menu']))
	{
	   header('location:hpg.php');
    }   
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['cancel']))
{
$temail=$_POST['email'];
// sql to delete a record
$sql = "DELETE FROM cdetails WHERE email='$temail'";

if (mysqli_query($conn, $sql)) {
    echo "Booked event canceled successfully";
} 
else 
{
    echo "Error cancelling event: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

</body>
</html>