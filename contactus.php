<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "monisoladab@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.html?mailsend");
}
?>
