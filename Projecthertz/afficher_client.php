
<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

  }
catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage(). "<br/>";
  die();
}


$pdoStat =$db->prepare('SELECT * FROM client');
$executeIsOk=$pdoStat->execute();
$client=$pdoStat->fetchAll();

?>
 <!-- COTE ADMIN -->
 
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
            <th scope="col" >ADRRESSE </th>
            <th scope="col" >NOM </th>
            <th scope="col" >PRENOM </th>
            <th scope="col" > VILLE</th>
            <th scope="col" > CODE POSTAL</th>
          </tr>
    </thead>
    <?php foreach($client as $client): ?>
    <tbody class='table'>
  <tr class="thead-light">
  <th scope="col"><?= $client['id_cliens']?></th>
  <th scope="col" ><?= $client['adresse_clients']?></th>
  <th scope="col"><?= $client['nom_clients']?></th>
  <th scope="col" ><?= $client['prenom_clients']?></th>
  <th scope="col" ><?= $client['ville_clients']?></th>
  <th scope="col" ><?= $client['cp_cliens']?></th>
</tr>
    </tbody>
    <?php endforeach; ?>
</body>
</html>
