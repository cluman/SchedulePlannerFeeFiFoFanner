
<?php

$DBserver = 'localhost';
$DBdatabase      = 'FFFFdb';
$DBusername  = 'root';
$DBpassword    = '';

// Create connection
$conn = mysqli_connect($DBserver, $DBusername, $DBpassword);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS FFFFdb";
if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

$conn = mysqli_connect($DBserver, $DBusername, $DBpassword, "FFFFdb");

//Registration
$sql = "
CREATE TABLE IF NOT EXISTS registration (
  email varchar(80) NOT NULL PRIMARY KEY,
  password varchar(50) NOT NULL,
  salt int(11) NOT NULL,
  code varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
if (mysqli_query($conn, $sql)) {
    //echo "Table 'Registration' created successfully";
} else {
    die ("Error creating table 'Registration': " . mysqli_error($conn));
}


//User
$sql = "
CREATE TABLE IF NOT EXISTS user (
  email varchar(80) NOT NULL PRIMARY KEY,
  password varchar(50) NOT NULL,
  salt varchar(10) NOT NULL,
  temp_password varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
if (mysqli_query($conn, $sql)) {
    //echo "Table 'User' created successfully";
} else {
    die ("Error creating table 'User': " . mysqli_error($conn));
}


$DBlink     = mysql_connect($DBserver, $DBusername, $DBpassword);
$db          = mysql_select_db($DBdatabase,$DBlink);


if(!$DBlink)
{
	echo "Error connecting database!";
	exit();
}

// Create connection
$conn = new mysqli($DBserver, $DBusername, $DBpassword, $DBdatabase);

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 


?>