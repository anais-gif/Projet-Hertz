<?php 
 $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');
 $article = $db->query('SELECT client FROM nom_client ORDER BY id DESC');
 $article = $db->query('SELECT client FROM nom_client WHERE client LIKE "" ORDER BY id DESC');

?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<table class=' table '>
    <thead class="thead-dark">
          <tr>
            <th scope="col" >ID </th>
            <th scope="col" >MODELE </th>
            <th scope="col" >PRIX </th>
            <th scope="col" >ANNEE </th>
          </tr>
    </thead>
    <?php while ($a =$client->fetch()) ?>