<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

    }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage(). "<br/>";
    die();
}


if(isset($_GET['action']) && !empty($_GET['modele'])  && !empty($_GET['prix'])  && !empty($_GET['annee'])){
      
    $ajouter = $db->prepare('INSERT INTO vehicule (modele_voiture,prix_voiture,annee_voiture) VALUES (:modele, :prix, :annee)');
    $ajouter->bindParam(':modele', $_GET['modele'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':prix', $_GET['prix'], 
    PDO::PARAM_INT);
    $ajouter->bindParam(':annee', $_GET['annee'], 
    PDO::PARAM_INT);
    $plus= $ajouter->execute();

        if($plus){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
    }
  
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
    <p> Ajouter un nouveau vehicule <p>
    
    <form method='GET'>
        <input type="text" name="modele" placeholder='modele'>
        <input type="text" name="prix" placeholder='prix'>
        <input type="text" name="annee" placeholder='annee'>
        <button type="submit" value="ajouter" name="action">Ajouter</button>
    </form>



    </body>
</html>
