<?php 

// Check if the user is not a bot
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send email to me with the form data
  mail('romain.ducouret.pro@gmail.com', 'Portfolio - Demande de contact', $message, 'From: ' . $email);
}
?>