<?php
include 'db_connection.php';  // Include the database connection

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Prepare the SQL query to insert the reservation into the database
    $sql = "INSERT INTO reservations (name, email, phone, date, time, message) 
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the form with a success flag
        header("Location: index.php?success=true");
        exit();
    } else {
        // Redirect back with an error flag
        header("Location: index.php?error=true");
        exit();
    }

    // Close the database connection
    $conn->close();
}
?>
