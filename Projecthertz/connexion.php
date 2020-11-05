 <?php 
   $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

   if(isset($_GET['actionconnect'])&& !empty($_GET['mdpconnect'])&& !empty($_GET['pseudoconnect'])) 
   {
    
    $req = $bdd->prepare('SELECT id_cliens, mdp FROM membres WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    $resultat = $req->fetch();
    
    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);
    
    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
   }
   else
   {
echo "Tous les champs doivent être complétés !";
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
    <div align="center">
    <p> Connexion  <p>
    
    <form method='get'>
        <table >
            <tr>
                <td align="right">
                    <label for="pseudo">Pseudo : </label>
                </td>
                <td>
                    <input type="text" name="pseudoconnect" id="pseudo"placeholder='Vôtre Pseudo' required><br>
                </td>
            </tr>
            <tr>
                <td align="right" >
                    <label for="mdp">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="mdpconnect" id="mdp" placeholder='Vôtre Mode De Passe'required><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center"><br>
                <input type="submit" value="Me connecter" name="actionconnect"required>
            </td>
            </tr>
        </table>

        
    </form>
    
</div>


 

    </body>
</html>
