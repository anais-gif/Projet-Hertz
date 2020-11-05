<?php 

include('fonction.php');


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


        <p>Modifier une location <p>

        <form method='GET'>
        <input type="text" name="id" placeholder='id'>
        <input type="text" name="id_cliens" placeholder='id_cliens'>
        <input type="text" name="id_voiture" placeholder='id-voiture'>
        <input type="date" name="date_de_location">
        <input type="date" name="date_fin_de_location">
        <input type="number" name="disponible">
        <button type="submit" value="modifier_louer" name="action_louer">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action_louer']) && $_GET['action_louer']=="modifier_louer" && !empty($_GET['id'])  && !empty($_GET['id_cliens']) 
     && !empty($_GET['id_voiture'])  && !empty($_GET['disponible'])&& !empty($_GET['date_de_location'])  && !empty($_GET['date_fin_de_location'])){
       modifier_louer();
        
        }
      
    
?>