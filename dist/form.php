<?php

$msgErr = null;
$msgSuccess = null;
$msgClass = null;
$depart = $arrivee = $passagers = $date = $heure = $nom = $telephone = $email = $demande = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $depart = test_input($_POST["depart"]);
  $arrivee = test_input($_POST["arrivee"]);
  $passagers = test_input($_POST["passagers"]);
  $date = test_input($_POST["date"]);
  $heure = test_input($_POST["heure"]);
  $nom = test_input($_POST["nom"]);
  $telephone = test_input($_POST["telephone"]);
  $email = test_input($_POST["email"]);
  $demande = test_input($_POST["demande"]);

  $toEmail = "etreailleurs@hotmail.fr";
  $headers = "De : " . $email;
  $subject = "Demande de devis " . $nom;
  $body = "DEMANDE DE DEVIS :
              Nom : $nom
              Depart : $depart
              Arrivée : $arrivee
              Nombre de passagers : $passagers
              Date : $date
              Heure : $heure
              Téléphone : $telephone
              Email : $email
              Demande : $demande";

  mail($toEmail, $subject, $body, $headers);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// $msgErr = null;
// $msgSuccess = null;
// $msgClass = null;
// $depart = $arrivee = $passagers = $date = $heure = $nom = $telephone = $email = $demande = null;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   $depart = test_input($_POST["depart"]);
//   $arrivee = test_input($_POST["arrivee"]);
//   $passagers = test_input($_POST["passagers"]);
//   $date = test_input($_POST["date"]);
//   $heure = test_input($_POST["heure"]);
//   $nom = test_input($_POST["nom"]);
//   $telephone = test_input($_POST["telephone"]);
//   $email = test_input($_POST["email"]);
//   $demande = test_input($_POST["demande"]);

//   if (empty($depart) || empty($arrivee) || empty($passagers) || empty($date) || empty($heure) || empty($nom) || empty($telephone) || empty($email)) {
//     $msgErr = "Veuillez remplir tous les champs.";
//   } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//     $msgErr = "Veuillez entrer un email valide.";
//   } else {
//     $toEmail = "etreailleurs@hotmail.fr";
//     $headers = "De : " . $email;
//     $subject = "Demande de devis " . $nom;
//     $body = "DEMANDE DE DEVIS :
//               Nom : $nom
//               Depart : $depart
//               Arrivée : $arrivee
//               Nombre de passagers : $passagers
//               Date : $date
//               Heure : $heure
//               Téléphone : $telephone
//               Email : $email
//               Demande : $demande";

//     if (mail($toEmail, $subject, $body, $headers)) {
//       $msgSuccess = "Votre devis a bien été envoyé.";
//       $msgClass = "alert-success";
//     } else {
//       $msgErr = "Votre devis n'a pas été envoyé.";
//       $msgClass = "home-devis__error";
//     }
//   }
// }

// function test_input($data)
// {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }