<?php
include 'db_connect.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM doctors WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
