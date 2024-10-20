<?php
include "config.php";
//fetch all students
$result = $conn->query("SELECT * FROM students");

?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD application</title>
</head>

<body>
    <h2>User list</h2>
    <a href="form.php">Add New User</a>
    <br><br>
    <table border="1">
        <tr>
            <th>StudentID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Enrollment</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["StudentID"]; ?></td>
                <td><?php echo $row["FirstName"]; ?></td>
                <td><?php echo $row["LastName"]; ?></td>
                <td><?php echo $row["DateOfBirth"]; ?></td>
                <td><?php echo $row["Gender"]; ?></td>
                <td><?php echo $row["EnrollmentDate"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row["StudentID"];?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row["StudentID"];?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>