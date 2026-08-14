<?php
$servername = "sql109.infinityfree.com";
$username   = "if0_42414840";
$password   = "N1mUmJNOPI";
$dbname     = "if0_42414840_infobase";

$Name = $_GET['Name'];
$Age  = $_GET['Age'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepared statement: keeps user input out of the SQL query itself
$stmt = $conn->prepare("INSERT INTO users (Name, Age) VALUES (?, ?)");
$stmt->bind_param("ss", $Name, $Age);

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
