
<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

    }
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage(). "<br/>";
    die();
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
    <p> incription <p>
    <form method='post'>
        <table>
            <tr>
                <td align='right'>
                    <label for='mail'>  Votre Email:</label>
                </td>
                <td>
                    <input type='text' name='mail' id='mail' placeholder ='Votre Email'required><br>
                </td > 
            </tr>
            <tr>
                <td align='right'>
                    <label for='password'>  Mot de Passe:</label>
                </td>
                <td>
                    <input type='passeword' name='password' id='password' placeholder='Votre Mot De Passe' required><br>
                </td>
            </tr>
            <tr>
                <td align='right'>
                    <label for='empasseword'> Confirmer Mot De Passe:</label>
                </td>
                <td>
                    <input type='passeword' name='cpasseword' id='cpasseword' placeholder='Confirmer Mot De Passe' required><br>
                </td>
            </tr>
           
        </table>
                <button  type='submit' value='ok' name='formsend'> Connection</button>
    </form>
</body>
</html>
  <?php 
if (isset($_POST['formsend'])){
    extact($_POST);

    if($password==$cpassword){
        
    }
}
//   if(isset($_GET['action']) && !empty($_GET['adresse']) && !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['ville']) && !empty($_GET['cp'])){
//  $ajouter = $bdd->prepare ('INSERT INTO client (adresse_clients,nom_clients,prenom_clients,ville_clients,cp_cliens) VALUES (:adresse,:nom,:prenom,:ville,:cp)');
//  $ajouter->bindParam(':prenom', $_GET['prenom'],
//  PDO::PARAM_STR);
//  $ajouter->bindParam(':nom', $_GET['nom'],
//  PDO::PARAM_STR);
//  $ajouter->bindParam(':adresse', $_GET['adresse'],
//  PDO::PARAM_STR);
//  $ajouter->bindParam(':ville', $_GET['ville'],
//  PDO::PARAM_STR);
//  $ajouter->bindParam(':cp', $_GET['cp'],
//  PDO::PARAM_INT);
//  $plus = $ajouter->execute();

//  if($plus){
//     echo 'donnée ajouté';
// }else{
//     echo 'donnée non prise en compte';
// }
// }
  ?>
  

