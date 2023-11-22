<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petPrice = $_POST['petPrice'];

// Insert data into the database
$sql = "INSERT INTO pets (name, type, price) VALUES ('$petName', '$petType', $petPrice)";

if ($conn->query($sql) === TRUE) {
    echo "Pet added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
