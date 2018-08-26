<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nekconsortium";
$date = date("d-m-Y H:m:s");
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}

echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE admin (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
pic VARCHAR(60) NOT NULL,
pass VARCHAR(60) NOT NULL,
cpass VARCHAR(60) NOT NULL,
tym TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
