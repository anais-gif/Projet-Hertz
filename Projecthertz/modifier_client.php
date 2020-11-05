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


        <p>Modifier espace client <p>

        <form method='GET'>
        <input type="text" name="id" placeholder=' Id'>
        <input type="text" name="nom" placeholder=' Nom'>
        <input type="text" name="prenom" placeholder=' Prenom'>
        <input type="text" name="adresse"placeholder=' Adresse'>
        <input type="text" name="ville" placeholder=' Ville'>
        <input type="text" name="cp"  placeholder='Code Postal'>
        <input type="text" name="pseudo" placeholder=' Pseudo' >
        <input type="password" name="mdp"  placeholder=' Mode De Passe'>
        
        <button type="submit" value="modifier_client" name="action_client">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action_client']) && $_GET['action_client']=="modifier_client" && !empty($_GET['id']) && !empty($_GET['nom'])  && !empty($_GET['prenom']) && !empty($_GET['adresse'])  && !empty($_GET['ville'])&& !empty($_GET['cp'])&& !empty($_GET['pseudo'])&& !empty($_GET['mdp']) ){
       modifier_client();
        
        }
    
?>