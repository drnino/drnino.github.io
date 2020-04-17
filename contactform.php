<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $message = $_POST['message'];
  $mailFrom = $_POST['mail'];
  $dx = $_POST['dx'];
  $cx = $_POST['cx'];


  $mailTo = "dianacarolina28@icloud.com";
  $headers = "From: ".$mailFrom;
  $txt = "Has recibido un email de ".$name." .\n\n".$message;



  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>
