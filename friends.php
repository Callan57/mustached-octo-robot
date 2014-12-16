<?php
session_start();
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$_SESSION['mail'] = $mail;

$co = new PDO('mysql:host=127.0.0.1;port=3306;dbname=YoYoXxHack', 'root', '', array( PDO::ATTR_PERSISTENT => false));
$insert = $co->query("INSERT INTO Compte(email,pass) VALUES ('$mail','$pass')");

header('location:./jeuConcour.php');

?>
