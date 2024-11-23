<?php
include 'db.php';

$id = $_GET['id'];

// Prepare and bind
$stmt = $conn->prepare("DELETE FROM php_crud WHERE id = ?");
$stmt->bind_param("i", $id);

// Execute the statement
if ($stmt->execute()) {
    header("Location: index.php"); // Redirect to index after successful deletion
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
