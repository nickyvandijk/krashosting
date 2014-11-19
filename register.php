<?php

var_dump($_POST['username']);
var_dump($_POST['geslacht']);
var_dump($_POST['pakket']);

$username = $_POST['username'];
$password = $_POST['password'];
$geslacht = $_POST['geslacht'];
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$volnaam = $voornaam + " " + $achternaam;
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$telefoonnummer = $_POST['telefoonnummer'];
$pakket = $_POST['pakket'];
$email = $_POST['email'];




mysqli_query($con,"INSERT INTO klant_persoonlijk (naam_klant, telefoon_klant, email_klant, geslacht_klant, postcode) 
VALUES ("+$volnaam+","+$telefoonnummer+","+$email+", "+$geslacht+", "+$postcode+",)");

mysqli_close($con);

?>