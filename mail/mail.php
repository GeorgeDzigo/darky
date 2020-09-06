<?php
$to = "mr.herolion@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message);