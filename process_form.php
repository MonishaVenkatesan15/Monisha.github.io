<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send the message to your email
    $to = "monishavenkat1512@gmail.com";
    $subject = "Message from your website";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    // Redirect the user back to your website after the form is submitted
    header("Location: index.html"); // Replace with the name of your HTML file
    exit;
}
?>
