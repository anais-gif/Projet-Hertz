<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

    }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage(). "<br/>";
    die();
}
  
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

        <p>Modifier un vehicule<p>

        <form method='GET'>
        <input type="text" name="id" placeholder="Id du vehicule à modifier">
        <input type="text" name="modele" placeholder="Modele du vehicule">
        <input type="text" name="prix" placeholder="Prix du vehicule">
        <input type="text" name="annee" placeholder="Annee du vehicule">
        <button type="submit" value="modifier" name="action">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['modele']) && !empty($_GET['prix'])  && !empty($_GET['annee'])){
       
        $modifier = $db->prepare('UPDATE vehicule SET modele_voiture = :modele,prix_voiture=:prix,annee_voiture=:annee WHERE id_voiture =:id');
        $modifier->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifier->bindParam(':modele', $_GET['modele'], PDO::PARAM_STR);
        $modifier->bindParam(':prix', $_GET['prix'], PDO::PARAM_STR);        
        $modifier->bindParam(':annee', $_GET['annee'], PDO::PARAM_STR);      


        
        $modifier = $modifier->execute();
      
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    
?>