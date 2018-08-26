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
$sql = "CREATE TABLE the_team (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
unique_id VARCHAR(60) NOT NULL,
cv VARCHAR(255) NOT NULL,
pic VARCHAR(60) NOT NULL,
post_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table The_team created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>