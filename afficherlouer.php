<?php include ('fonction.php') ?>
<?php 
     $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

$pdoStat = $db->prepare('SELECT * FROM louer
INNER JOIN client ON client.id_cliens = louer.id_cliens
     INNER JOIN vehicule ON vehicule.id_voiture = louer.id_voiture ');
$executeIsOk=$pdoStat->execute();
$louers=$pdoStat->fetchAll();

foreach($louers as $info){
    echo "<br/>".$info['nom_clients']." a loué ".$info['modele_voiture']." du ".$info['date_de_location']." au ".$info['date_fin_de_location'];
}
?>

<head>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <link rel="icon" type="image/png" href="images/1200px-Hertz-Logo.svg.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hertz - Lons-le-saunier</title>
    </head>

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
    <p> Vous avez loué <p>
    
    <table class=' table '>
    <thead class="thead-dark">
          <tr>
            <th scope="col" > nom client</th>
            <th scope="col" >modèle de la voiture</th>
            <th scope="col" > DATE DE LOCATION </th>
            <th scope="col" > DATE FIN DE LOCATION </th>
          </tr>
    </thead>
    <?php foreach($louers as $louer): ?>
    <tbody class='table'>
  <tr class="thead-light">
  <th scope="col-4" ><?= $louer['nom_clients'].' '.$louer['adresse_clients']?></th>
  <th scope="col-4"><?= $louer['modele_voiture']?></th>
  <th scope="col-2" ><?= $louer['date_de_location']?></th>
  <th scope="col-2" ><?= $louer['date_fin_de_location']?></th>

</tr>
    </tbody>

    <section id="vehiculesList container-fluid">
<div class="titretables">
<center><h2>Liste véhicule</h2></center>
</div>

<div class="liste">
<table class="table">
<thead class="thead">
<tr class="headtables">
<th>Marque</th>
<th>Modèle</th>
<th>Année</th>
<th>Disponible</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $produits){
?>
<tr>
<td><?= $produits['modele_voiture'] ?></td>
<td><?= $produits['prix_voiture'] ?></td>
<td><?= $produits['annee_voiture'] ?></td>
<?php
// echo $idCar[0]['id_car_vehicules'];
$idCarlouer = $db->query('SELECT id_voiture FROM louer');
$idCarlouer = $idCarlouer->fetchALL();

for($i=0;$i<count($idCarlouer);$i++){
$vehiculesRechercher[]=$idCarlouer[$i]['id_voiture'];
}

if (in_array($produits['id_voiture'],$vehiculesRechercher)){
echo "<td> <img class='dispo' src='images/close.png'> </td>";

}else {
echo "<td> <img class='dispo' src='images/check.png'> </td>";
}

?>
</tr>
<?php
}
?>

</tbody>
</table>

</div>
</section>





    <?php endforeach; ?>
    


    </body>
</html>