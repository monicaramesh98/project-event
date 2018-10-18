<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="icon" href="../img/pic13.png" />

</head>

<body background="../img/pic16.jpg">
<table width="100%" border="1" style="text-align:center">
  <tr>
    <td><h2>view details for a date</h2></td>
  </tr>
</table>

<div align="center">
<form action="aview.php" method="post">
<br/>
ENTER THE DATE:<input type="date" name="date" /><br/><br/>
<input type="submit" name="view" value="VIEW" /><br/><br/>
<input type="submit" name="menu" value="MENU" /><br/>
</form>
</div>
<?php
       if(isset($_POST['menu']))
	{
	   header('location:homepage.php');
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
if(isset($_POST['view']))
{
$tdate=$_POST['date'];
$sql = "SELECT  * FROM cdetails where date='$tdate'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "NAME: " . $row["name"]."<br>". "PHONE NUMBER: " . $row["phno"]."<br>"."EMAIL: ".$row["email"]."<br>"."ADDRESS: ".$row["address"]."<br>"."NO OF DAYS: ".$row["nod"]. "<br>"."<br>";
    }
} else {
    echo "no orders in this date";
}
}

mysqli_close($conn);
?>
</body>
</html>