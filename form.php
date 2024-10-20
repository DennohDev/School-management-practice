<!DOCTYPE html>
<html>
<head>
    <title>Add a user</title>
</head>
<body>
<h2>Add a user</h2>
<form method="POST" action="create.php">
    FirstName<input type="text" name="FirstName" required>
    LastName<input type="text" name="LastName" required><br><br>
    DateOfBirth<input type="date" name="DateOfBirth" required><br><br>
    Gender:<br>
    Male<input type="radio" name="Gender" value="Male">
    Female<input type="radio" name="Gender" value="Female"><br><br>
    <button type="submit">Add User</button>
    </form>
</body>

</html>