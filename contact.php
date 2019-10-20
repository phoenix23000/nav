<?php
if (isset($_POST['submit'])){

$name = $_POST['name'];
$sujet = $_POST['sujet'];
$mailForm = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "assed2369@gmail.com";
$headers = "From: ".$mailForm;
$txt = "tu as reçu un message de ".$name.".\n\n".$message;



mail($mailTo, $sujet, $txt, $headers);
header("Location: index.php?mailsend")}
?>