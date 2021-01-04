<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "rmuse1@student.gsu.edu";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.html?mailsend");
}
?>
