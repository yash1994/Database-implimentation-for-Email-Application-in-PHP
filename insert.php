<html>
<body>
<?php
$con=mysqli_connect("localhost","root","12345","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO USER(USERID,PASSWORD)
VALUES
('$_POST[USERID]','$_POST[PASSWORD]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";

$sql="INSERT INTO NAME(USERID,FIRSTNAME,LASTNAME)
VALUES
('$_POST[USERID]','$_POST[FIRSTNAME]','$_POST[LASTNAME]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";

$sql="INSERT INTO CONTACT(USERID,MOBILENO,LANDLINE)
VALUES
('$_POST[USERID]','$_POST[MOBILENO]','$_POST[LANDLINE]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";
  
$sql="INSERT INTO PERSONAL(USERID,BDATE,AGE,GENDER)
VALUES
('$_POST[USERID]','$_POST[BDATE]','$_POST[AGE]','$_POST[GENDER]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";

$sql="INSERT INTO ADDRESS(USERID,CITY,STATE,COUNTRY,PINCODE)
VALUES
('$_POST[USERID]','$_POST[CITY]','$_POST[STATE]','$_POST[COUNTRY]','$_POST[PINCODE]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";

$sql="INSERT INTO SERVICES(USERID,GOOGLEPLUS,DRIVE)
VALUES
('$_POST[USERID]','$_POST[GOOGLEPLUS]','$_POST[DRIVE]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added \n";





?>

<P><a href="confirm.html">CLICK HERE TO CONFIRM</a></P>


<P><a href="form.html">CLICK HERE TO MAKE A NEW FORM AGAIN OR SIMPLY PRESS BACK ON YOUR BROWSER TO GO TO EXISTING FORM</a></P>


</body>
</html> 