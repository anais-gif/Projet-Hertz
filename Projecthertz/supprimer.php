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
</body>
</html>


<p>Supprimer un Vehicule<p>
    <form method='GET'>
        <input type="text" name="id" placeholder="Id du vehicule à supprimer">
        <button type="submit" value="supprimer" name="action">Supprimer</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
        
        $supprimer = $db->prepare('DELETE FROM vehicule WHERE id_voiture = :id');
        $supprimer->bindParam(':id', $_GET['id'],PDO::PARAM_STR);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    ?>