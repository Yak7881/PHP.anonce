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




<?php
$pdo = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_Islem" , 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

$resultat = $pdo -> query("SELECT * FROM advert WHERE id <=15 ORDER BY title ASC");
$adverts = $resultat -> fetchAll(PDO::FETCH_ASSOC);
echo'<div>';
echo'<table border="5">';

echo"</tr>";

foreach($adverts as $cle => $advert) 
{ 
    foreach($advert as $cle2 => $donnee) 
    {
        echo"<th>$cle2</th>";
    }
    echo"<th>Action</th>";
    break;
}
echo"</tr>";
echo"<tbody>";
foreach($adverts as $advert)
{
    echo"<tr>";

    foreach($advert as $donnee)
    {
        echo"<td>$donnee</td>";
    }
        echo "<td><a href='?action=voir&id=$advert[title]'>Voir</a></td>"; //j'ai ajouté l'option supp+montre id de ce que je veux supprimer sur l'URL
        echo"</td>";
    }
    echo "</tbody>";

    echo"</table>";

    echo'</div>';
    ?>
    


