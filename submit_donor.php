<?php
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $blood_type = $_POST['blood_type'];
    $phone = $_POST['phone'];
    $donation_date = date("Y-m-d H:i:s"); // Current date and time

    // Insert donor into the `donors` table
    $sql = "INSERT INTO donors (name, email, blood_type, phone, donation_date) VALUES ('$name', '$email', '$blood_type', '$phone', '$donation_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Donation submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

