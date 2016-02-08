<?php

require 'connection_parameters.php';
// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO ngo (name, description, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $description, $email);

// set parameters and execute

/*
$name = "John";
$description = "Doe";
$email = "john@example.com";
$stmt->execute();

$name = "Mary";
$description = "Moe";
$email = "mary@example.com";
$stmt->execute();

$name = "Julie";
$description = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";
*/

$stmt->close();
$conn->close();
?>