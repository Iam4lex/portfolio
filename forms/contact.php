<?php

// Replace these values with your actual database credentials
$servername = "localhost";
$username = "username";
$password = "";
$database = "FirstDataBase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare SQL query
$sql = "INSERT INTO form_submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

// Execute query
if ($conn->query($sql) === TRUE) {
    // Email sending code here (you can use mail() function as shown in the previous example)
    // Replace 'alexmwaangimungai254@gmail.com' with your actual receiving email address
    $receiving_email_address = 'alexmwaangimungai254@gmail.com';
    $mail_sent = mail($receiving_email_address, $subject, $message);
    
    if ($mail_sent) {
        echo "1"; // Success
    } else {
        echo "0"; // Error
    }
} else {
    echo "0"; // Error
}

// Close connection
$conn->close();

?>
