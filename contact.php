<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the form data (for example, you could send an email with the form data)
    mail('your@email.com', 'New Contact Form Submission', "Name: $name\nEmail: $email\nMessage: $message");

    // Redirect the user after form submission (optional)
    header('Location: thank-you.html');
    exit();
}
?>
