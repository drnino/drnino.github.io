<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $message = $_POST['message'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['dx'];
  $cx = $_POST['cx'];

  $mailTo = "dianacarolina28@icloud.com";
  $headers = array("From: ".$mailFrom, "Reply-To: dianacarolina28@icloud.com", "X-Mailer: PHP/" . PHP_VERSION);
  $headers = implode("\r\n", $headers);
  $txt = "Has recibido un email de ".$name." .\n\n".$message;

  mail($mailTo, $subject, $message, $headers);
  header("Location: index.php?mailsend");
}

?>
