<?php 
include('fonction.php');

if(isset($_GET['action']) &&!empty($_GET['nom']) && !empty($_GET['prenom'])&& !empty($_GET['adresse']) && !empty($_GET['ville'])&& !empty($_GET['cp']) && !empty($_GET['pseudo']) &&!empty($_GET['mdp']))
    {ajouter_client();
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
    <div align="center">
    <p> Inscription  <p>
    
    <form method='get'>
        <table >
            <tr>
                <td align="right">
                    <label for="nom">Nom : </label>
                </td>
                <td>
                    <input type="text" name="nom" id="nom" placeholder='Vôtre Nom'required><br>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="prenom">Prenom : </label>
                </td>
                <td>
                    <input type="text" name="prenom"id="prenom"  placeholder='Vôtre Prenom'required><br>
                </td>
            </tr>
            <tr>
                <td align="right" >
                    <label for="adresse">Adresse : </label>
                </td>
                <td>
                    <input type="text" name="adresse" id="adresse" placeholder='Vôtre Adresse'required><br>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="ville">Ville: </label>
                </td>
                <td>
                    <input type="text" name="ville"id="ville"  placeholder='Vôtre Ville'required><br>
                </td>
            </tr>
            <tr>
                <td align="right" >
                    <label for="cp">Code Postal : </label>
                </td>
                <td>
                    <input type="text" name="cp"id="cp"  placeholder='Vôtre Code Postal'required><br>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="pseudo">Pseudo : </label>
                </td>
                <td>
                    <input type="text" name="pseudo" id="pseudo"placeholder='Vôtre Pseudo' required><br>
                </td>
            </tr>
            <tr>
                <td align="right" >
                    <label for="mdp">Mot de passe : </label>
                </td>
                <td>
                    <input type="password" name="mdp" id="mdp" placeholder='Vôtre Mode De Passe'required><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center"><br><input type="submit" value="Je m'inscris" name="action"required></td>
            </tr>
        </table>

        
    </form>
    
</div>


 

    </body>
</html>
