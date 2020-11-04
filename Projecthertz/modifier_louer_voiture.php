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
        <input type="text" name="cliens" placeholder='cliens'>
        <input type="text" name="modele" placeholder='modele'>
        <input type="date" name="date_de_location">
        <input type="date" name="date_fin_de_location">
        <button type="submit" value="modifier" name="action">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['cliens'])  && !empty($_GET['modele']) && !empty($_GET['date_de_location'])  && !empty($_GET['date_fin_de_location'])){
       modifier();
        
        }
    
?>