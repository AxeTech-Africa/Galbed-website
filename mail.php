<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = "axetecha@gmail.com"; // Recipient's email address (your email)
    $from = $_POST['email']; // Sender's email address
    $sender_name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];

    // Email subject
    $subject = "New Contact Form Submission from $sender_name";

    // Construct the email message
    $message = "
    Name: $sender_name
    Email: $from
    Phone: $phone
    Address: $address
    Message: $note
    ";

    // Set headers for the email
    $headers = "From: $from\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // Ensure proper encoding

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
