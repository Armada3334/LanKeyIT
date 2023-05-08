<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "service@lankeyit.com";
  $headers = "From: $name <$email>";
  $body = "From: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Email sending failed.";
  }
}
?>