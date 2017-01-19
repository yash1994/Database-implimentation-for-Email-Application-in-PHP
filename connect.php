<?php
$con=mysqli_connect("localhost","root","12345","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE USER(USERID VARCHAR(30) PRIMARY KEY,PASSWORD VARCHAR(30) NOT NULL)";

if (mysqli_query($con,$sql))
  {
  echo "Table  created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

$sql = "CREATE TABLE NAME(USERID VARCHAR(30),FIRSTNAME VARCHAR(30),LASTNAME VARCHAR(30) NOT NULL,PRIMARY KEY(USERID,FIRSTNAME),FOREIGN KEY (USERID) REFERENCES USER(USERID))";

if (mysqli_query($con,$sql))
  {
  echo "Table created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

$sql = "CREATE TABLE CONTACT(USERID VARCHAR(30),MOBILENO INT(20) NOT NULL,LANDLINE INT(20) NOT NULL,PRIMARY KEY(USERID,MOBILENO),FOREIGN KEY (USERID) REFERENCES USER(USERID))";


if (mysqli_query($con,$sql))
  {
  echo "Table created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

$sql = "CREATE TABLE PERSONAL(USERID VARCHAR(30),BDATE DATE NOT NULL,AGE INT(4) NOT NULL,GENDER VARCHAR(3) NOT NULL,FOREIGN KEY (USERID) REFERENCES USER(USERID))";

if (mysqli_query($con,$sql))
  {
  echo "Table created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

$sql = "CREATE TABLE ADDRESS(USERID VARCHAR(30),CITY VARCHAR(30) NOT NULL,STATE VARCHAR(30) NOT NULL,COUNTRY VARCHAR(30) NOT NULL,PINCODE VARCHAR(30) NOT NULL,FOREIGN KEY (USERID) REFERENCES USER(USERID))";

if (mysqli_query($con,$sql))
  {
  echo "Table created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }

$sql = "CREATE TABLE SERVICES(USERID VARCHAR(30),GOOGLEPLUS VARCHAR(2) CHECK( GOOGLEPLUS IN('Y','N')),DRIVE VARCHAR(2) CHECK( DRIVE IN('Y','N')),FOREIGN KEY (USERID) REFERENCES USER(USERID))";

if (mysqli_query($con,$sql))
  {
  echo "Table created successfully<br>";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }


?> 