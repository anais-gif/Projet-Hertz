<?php 
include('fonction.php');

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
    <p> louer vôtre voiture, s'il vous plaît <p>
    
    <form method='GET'>
                            <input class="form-control" type="text" name="modele" placeholder='modele'>
                            <input class="form-control" type="text" name="prix" placeholder='prix'>
                            <input class="form-control" type="text" name="annee" placeholder='annee'>
                            <button type="submit" value="ajouter" name="action">Ajouter</button>
                        </form>

                        <form method='GET'>
                            <input class="form-control" type="text" name="id" placeholder="Id du vehicule à modifier">
                            <input class="form-control" type="text" name="modele" placeholder="Modele du vehicule">
                            <input class="form-control" type="text" name="prix" placeholder="Prix du vehicule">
                            <input class="form-control" type="text" name="annee" placeholder="Annee du vehicule">
                            <button type="submit" value="modifier" name="action">Modifier</button>
                        </form>

    </body>
</html>