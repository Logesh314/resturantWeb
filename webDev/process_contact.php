<?php
// Include database connection if you're saving the contact form to the database
include 'db_connection.php'; 

// Email settings
$to = "info@burgerhut.com";  // The email where you want to receive the contact form submissions
$subject = "New Contact Form Submission";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Clean the input to avoid any malicious code
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    // Insert data into the database (optional)
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Prepare email message
        $email_message = "You have received a new message from your website contact form.\n\n";
        $email_message .= "Name: " . $name . "\n";
        $email_message .= "Email: " . $email . "\n\n";
        $email_message .= "Message:\n" . $message . "\n";

        // Send the email
        $headers = "From: " . $email;
        if (mail($to, $subject, $email_message, $headers)) {
            // Redirect back to the form with success message
            header("Location: index.php?contact_success=true");
            exit();
        } else {
            // Redirect back to the form with error message
            header("Location: index.php?contact_error=true");
            exit();
        }
    } else {
        // Redirect back to the form with error message
        header("Location: index.php?contact_error=true");
        exit();
    }

    // Close the database connection
    $conn->close();
}
?>
