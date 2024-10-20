<?php
include 'config.php';

$id = $_GET['id'];

// Delete data
$sql = "DELETE FROM users WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
