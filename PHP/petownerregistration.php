<?php


// Rest of your code
?>
<?php

include('db.php'); // Include the database connection file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middleinitial = $_POST['middleinitial'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];
    

    // Database connection parameters
    $host = 'localhost';
    $user = 'root';
    $passwordDb = '';
    $database = 'pawpointment';

    // Create a database connection
    $conn = new mysqli($host, $user, $passwordDb, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the 'users' table
    $sql = "INSERT INTO customertbl (FirstName,LastName,MiddleInitial,Username,Password,ContactNumber,Address) VALUES ('$firstname','$lastname','$middleinitial','$username', '$password','$contactno','$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>