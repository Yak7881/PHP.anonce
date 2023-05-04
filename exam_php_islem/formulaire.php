<?php
$pdo = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_Islem" , 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

if($_POST)
{
    $pdo->exec("INSERT INTO advert (title, desciption, postal_code, city, type, price) VALUES ('$_POST[titre]','$_POST[desciption]','$_POST[cp]','$_POST[Ville]', '$_POST[type]', '$_POST[prix]'  ) ");

    echo"<div style = 'background:green' ><p>Votre message à bien été enregistré</div></p>";
    header('location', 'accueil.php');

}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Examen</title>
</head>
<body>
<header>
      <nav>
        <ul>
          <li><a href="accueil.php">Accueil</a></li>
          <li><a href="formulaire.php">Formulaire</a></li>
          <li><a href="#">Toutes les offres</a></li>

        </ul>
      </nav>
    </header>

    <main>
    <hr>
        <h1>Ajouter une annonce</h1>
        <br><hr><hr>
        <form action="" method ="post">
            <label for="titre">Titre de l'annonce</label>
            <input type="text" name="titre">
            <br>
            <label for="desciption">Description de l’annonce</label>
            <input type="text" name="desciption">
            <br>
            <label for="cp">Code postal</label>
            <input type="number" name="cp">
            <br>
            <label for="Ville">Ville</label>
            <input type="text" name="Ville">
            <br>
            <label for="type">Type d'annonce</label>
            <select name="type" id="type">
                <option value="l">Location</option>
                <option value="v">Vente</option>
            </select>
            <br>
            <label for="prix">Prix</label>
            <input type="text" name="prix">
            <br>
            <input type="submit" value="envoyer">
        </form>
    </hr>
</body>
</html>