<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $dob = $_POST["DateOfBirth"];
    $Gender = $_POST["Gender"];

    // Update data
    $sql = "UPDATE users SET FirstName = '$FirstName', LastName = '$LastName', DateOfBirth = '$dob', Gender = '$Gender' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        FirstName: <input type="text" name="FirstName" value="<?php echo htmlspecialchars($user['FirstName']); ?>" required><br><br>
        LastName: <input type="text" name="LastName" value="<?php echo htmlspecialchars($user['LastName']); ?>" required><br><br>
        DateOfBirth: <input type="date" name="DateOfBirth" value="<?php echo htmlspecialchars($user['DateOfBirth']); ?>" required><br><br>
        Gender:<br>
        <input type="radio" name="Gender" value="Male" <?php if ($user['Gender'] == 'Male') echo 'checked'; ?>> Male<br>
        <input type="radio" name="Gender" value="Female" <?php if ($user['Gender'] == 'Female') echo 'checked'; ?>> Female<br><br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>
