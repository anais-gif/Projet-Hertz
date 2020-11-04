<?php 
     $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

$pdoStat = $db->prepare('SELECT * FROM louer 
INNER JOIN client ON client.id_cliens = louer.id_cliens
INNER JOIN vehicule ON vehicule.id_voiture = louer.id_voiture');
$executeIsOk=$pdoStat->execute();
$louers=$pdoStat->fetchAll();

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
    <p> Vous avez louer <p>
    
    <table class=' table '>
    <thead class="thead-dark">
          <tr>
            <th scope="col" >  NOM</th>
            <th scope="col" > MODELE</th>
            <th scope="col" > DATE DE LOCATION </th>
            <th scope="col" > DATE FIN DE LOCATION </th>
          </tr>
    </thead>
    <?php foreach($louers as $info): ?>
    <tbody class='table'>
  <tr class="thead-light">
  <th scope="col" ><?= $info['nom_clients']?></th>
  <th scope="col"><?= $info['modele_voiture']?></th>
  <th scope="col" ><?= $info['date_de_location']?></th>
  <th scope="col" ><?= $info['date_fin_de_location']?></th>

</tr>
    </tbody>
    <?php endforeach; ?>


    </body>
</html>
