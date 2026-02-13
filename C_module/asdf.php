<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];

$salt = uniqid();
$enc_pw = hash('SHA256', $pw . $salt); 