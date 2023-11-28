<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose the email
    $to = "shivayvimal@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    // Redirect to the form if accessed directly without submission.
    header("Location: index.html");
    exit();
}
?>
