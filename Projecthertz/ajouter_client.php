<?php 

try {
    $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

    }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage(). "<br/>";
    die();
}


if(isset($_GET['action']) && !empty($_GET['adresse'])  && !empty($_GET['nom'])  && !empty($_GET['prenom'])&& !empty($_GET['ville']) && !empty($_GET['cp'])   ){
      
    $ajouter = $db->prepare('INSERT INTO client (adresse_clients,nom_clients,prenom_clients,ville_clients,cp_cliens) VALUES (:adresse, :nom, :prenom, :ville, :cp)');
    $ajouter->bindParam(':adresse', $_GET['adresse'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':nom', $_GET['nom'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':prenom', $_GET['prenom'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':ville', $_GET['ville'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':cp', $_GET['cp'], 
    PDO::PARAM_INT);
    $plus= $ajouter->execute();

        if($plus){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
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
    <p> Ajouter-vous s'il vous plaît <p>
    
    <form method='GET'>
        <input type="text" name="nom" placeholder='nom'>
        <input type="text" name="prenom" placeholder='prenom'>
        <input type="text" name="adresse" placeholder='adresse'>
        <input type="text" name="ville" placeholder='ville'>
        <input type="text" name="cp" placeholder='cp'>
        <button type="submit" value="ajouter" name="action">Ajouter</button>
    </form>



    </body>
</html>
