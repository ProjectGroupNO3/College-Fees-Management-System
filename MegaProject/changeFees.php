<?php
// Establish a secure database connection (replace placeholders with your credentials)
include 'establishDb.php';

// Access form data using $_POST
$newAmount = $_POST["newAmount"];

// Prepare a SQL statement with placeholders to prevent SQL injection
$sql = "INSERT INTO fees_table(Exam_Fees) VALUES (?)";
$stmt = $conn->prepare($sql);

// Bind the value to the prepared statement for secure data insertion
$stmt->bind_param("s", $newAmount);

if ($stmt->execute()) {
    echo "Fees updated successfully!";
} else {
    echo "Error updating fees: " . $conn->error;
}

$stmt->close();
$conn->close();
?>