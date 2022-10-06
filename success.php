<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<h3> Merci <?= $_POST["user_name"]?> de nous avoir contacté à propos de <?= $_POST["user_topic"]?>.

Un de nos conseillers vous contactera soit à l’adresse <?= $_POST["user_email"]?> ou par téléphone au <?= $_POST["user_phone"]?> dans les plus brefs délais pour traiter votre demande : 

<?= $_POST["user_message"]?></h3>
    
</body>
</html>