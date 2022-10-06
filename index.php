<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$error= [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
      $errors[] = "Ton nom et pronom est obligatoire";
  if(!isset($_POST['user_email']) || trim($_POST['user_email'] && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) === '')) 
      $errors[] = "Ton e-mail est obligatoire";
  if(!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '') 
      $errors[] = "Ton numéro de téléphone est obligatoire";
  if(!isset($_POST['user_topic']))
      $errors[] = "Selectionne un sujet";
  if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
      $errors[] = "Ecris-nous un message";

  if(empty($errors)) {
      header('Location: success.php');
  }
}

?>

<form action="/success.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="courriel">Téléphone :</label>
        <input  type="tel"  id="phone"  name="user_phone" required>
    </div>

<label for="sujet">Choisi un sujet</label>
<SELECT name="user_topic" id="sujet" required> 
<OPTION disabled>Selectionne un sujet parmis les choix ci-dessous
<OPTION>Sujet 1
<OPTION>Sujet 2
<OPTION>Sujet 3
<OPTION>Sujet 4
<OPTION>Sujet 5
</SELECT>




    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" cols="50" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</body>
</html>