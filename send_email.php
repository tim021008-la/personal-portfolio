<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "lauterbachtim1008@gmail.com";
    $subject = "New Message from $fullname";
    $body = "From: $fullname\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully.";
    } else {
        echo "Error: Unable to send message.";
    }
}
?>
