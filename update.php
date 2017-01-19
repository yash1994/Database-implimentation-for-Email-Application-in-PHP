<html>
<body>

<?php
$con=mysqli_connect("localhost","root","12345","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$a = $_POST[USERID];
$sql = "UPDATE USER SET PASSWORD='$_POST[PASSWORD]' WHERE USERID = '$a'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "PASSWORD CHANGED";
mysqli_close($con);
?> 

<p><a href="reg.html">GO TO HOME PAGE</a></p>
</body>
</html> 