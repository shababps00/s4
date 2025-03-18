<?php
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Fetch user details
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Correct password, proceed with login
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email!";
    }

    // Close connection
    $conn->close();
}
?>

