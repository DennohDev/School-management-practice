<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $dob = $_POST["DateOfBirth"];
    $Gender = $_POST["Gender"];
}
$sql = "INSERT INTO students(FirstName,LastName,DateOfBirth,Gender)VALUES('$FirstName','$LastName','$dob','$Gender')";
if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

