<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['Email']; // Email address provided in the request
    $message = $_POST['Poruka'];

    // You can customize the email subject and body as per your requirements
    $subject = "Hello from PHP Backend!";

    // Set the headers
    $headers = "From: aleksanrandjelovic@gmail.com\r\n";
    $headers .= "Reply-To: aleksanrandjelovic@gmail.com\r\n";
    $headers .= "Content-Type: text/html\r\n";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>