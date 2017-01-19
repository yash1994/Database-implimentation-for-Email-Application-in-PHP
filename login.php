<html>
<body>
<?php
$con=mysqli_connect("localhost","root","12345","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result = mysqli_query($con,"SELECT DISTINCT * FROM USER NATURAL JOIN NAME NATURAL JOIN CONTACT NATURAL JOIN PERSONAL NATURAL JOIN ADDRESS NATURAL JOIN SERVICES WHERE USERID='$_POST[USERID]'");

while($row = mysqli_fetch_array($result))
  {
  echo  "USERID:-". $row['USERID'] . "<br> PASSWORD :-" . $row['PASSWORD'] . "<br> FIRSTNAME:- " . $row['FIRSTNAME'] . "<br> LASTNAME" . $row['LASTNAME'] . "<br> MOBILENO:-" . $row['MOBILENO']. "<br>LANDLINENO:- " . $row['LANDLINE']. "<br> BDATE :-" . $row['BDATE']. "<br>AGE :- " . $row['AGE']. "<br>GENDER:- " . $row['GENDER']. "<br>CITY:-  " . $row['CITY']. "<br>STATE:- " . $row['STATE']. "<br>COUNTR:- " . $row['COUNTRY']. "<br>PINCODE:- " . $row['PINCODE']. "<br>GOOGLEPLUS:- " . $row['GOOGLEPLUS']. "<br>DRIVE:- " . $row['DRIVE'] ;

  }

?>

<p><a href="reg.html">GO TO HOME PAGE</a></p>
</body>
</html> 