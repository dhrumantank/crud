<?php

// SQL statement as a string
$sql = "
CREATE TABLE personal (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    birth_date DATE NOT NULL,
    phone VARCHAR(15),
    gender VARCHAR(10)
);
";

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'php';
 
$conn = new mysqli($host, $user, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 
if (mysqli_query($conn,$sql) === TRUE) {
    echo "Table 'personal' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();

?>
