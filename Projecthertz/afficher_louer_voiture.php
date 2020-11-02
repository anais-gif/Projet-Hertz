<?php 
     $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

$pdoStat = $db->prepare('SELECT * FROM louer ');
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
            <th scope="col" > ID CLIENT</th>
            <th scope="col" >ID VOITURE</th>
            <th scope="col" > DATE DE LOCATION </th>
            <th scope="col" > DATE FIN DE LOCATION </th>
          </tr>
    </thead>
    <?php foreach($louers as $louer): ?>
    <tbody class='table'>
  <tr class="thead-light">
  <th scope="col" ><?= $louer['id_cliens']?></th>
  <th scope="col"><?= $louer['id_voiture']?></th>
  <th scope="col" ><?= $louer['date_de_location']?></th>
  <th scope="col" ><?= $louer['date_fin_de_location']?></th>

</tr>
    </tbody>
    <?php endforeach; ?>


    </body>
</html>
