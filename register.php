<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert="INSERT INTO users('username', 'email', 'password')VALUES('$username', '$email', '$password')";

    // Insert the user data into the database
    $sql = "INSERT INTO users ('username', 'email', 'password') VALUES";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    $result = $stmt->execute();

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
