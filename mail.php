<?php

$recepient = "reznickov@gmail.com";
$sitename = "Podlahy-caesar.cz";


$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "E-mail: $email\nPhone: $phone";
$pagetitle = "New request\"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");