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
    <td><h2>ADMIN LOGIN</h2></td>
  </tr>
</table>

<div align="center">
<form action="alogin.php" method="post">
<br/>
username:<input type="text" name="username" size="30" /><br /><br/>
password:<input type="password" name="password" size="30"/><br/><br/>
<input type="submit" name="login" value="LOGIN" size="20" /><br/><br/>
<input type="submit" name="menu" value="MENU" />
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
if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "select * from alogin where username='$username' and password='$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
	print "<script>alert('valid')</script>";
	header('location:aview.php');
} else {
    echo "Invalid username or password";
}
	}
mysqli_close($conn);
?>

</body>
</html>