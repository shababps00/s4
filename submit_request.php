<?php
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $blood_type = $_POST['blood_type'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $request_date = date("Y-m-d H:i:s");

    // Insert request into the `requests` table
    $sql = "INSERT INTO requests (name, email, blood_type, phone, quantity, request_date) VALUES ('$name', '$email', '$blood_type', '$phone', '$quantity', '$request_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

