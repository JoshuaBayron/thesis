<!DOCTYPE html>
<html>
<head>
    <title>Staff Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form action="petownerregistration.php" method="post">

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br>
        
        <label for="middleinitial">Middle Initial:</label>
        <input type="text" id="middleinitial" name="middleinitial" required><br>       

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="contactno">Contact No:</label>
        <input type="text" id="contactno" name="contactno" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>