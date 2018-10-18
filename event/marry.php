<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>birth</title>
<link rel="icon" href="../img/pic13.png" />

</head>

<body bgcolor="#CCCCCC">
<table width="100%" height="50px" style="text-align:center" border="1">
  <tr>
    <td><h3>PLEASE ENTER THE DETAILS TO BOOK FOR AN EVENT</h3></td>
  </tr>
</table>
<table width="650px" height="456" border="1" background="../img/pic18.jpg" align="center">
  <tr>
    <td height="450"><div align="center">
<form action="marry.php" method="POST" align=" center">
NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
<br/>
<br/>
PHONE NO:&nbsp; <input type="text" name="phno">
<br/>
<br/>
ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address">
<br/>
<br/>
EMAIL ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
<br/>
<br/>
DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" name="date">
<br/>
<br/>
NO OF DAYS: <input type="number" name="nod">
<br/>
<br/>
<br/>
<input type="submit" name="submit" value="BOOK">
<br/>
<br/>

<input type="submit" name="menu" value="MENU"/>
</form>
</div></td>
  </tr>
</table>


<table width="100%" height="100px"  border="1" style="text-align:center">
  <tr>
    <td>PER DAY: 50000
    <br/>
    ***************
    </td>
    <td>CONTACT INFO:
    			 <br/>
                 ****************
                 <br/>
                 SINDHU GAYATHRI,
                 <br/>
                 PH-NO:8374938532
                 <br/>
                 EMAIL:sidhugayathri@gmail.com
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
if(isset($_POST['submit']))
{
$nod=$_POST['nod'];
$totamt=$nod*50000;
echo"Total amount : ";
echo $totamt;
echo "<br>";
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$Name=$_POST['name'];
$Phoneno=$_POST['phno'];
$Emailid=$_POST['email'];
$Address=$_POST['address'];
$Dte=$_POST['date'];
$Nodays=$_POST['nod'];
$sql = "INSERT INTO cdetails (name, phno, email, address, date, nod) VALUES ('$Name', '$Phoneno', '$Emailid', '$Address', '$Dte', '$Nodays')";

if (mysqli_query($conn, $sql)) {
    echo "Event booked successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
</body>
</html>