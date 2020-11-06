<!DOCTYPE html>
<html lang="en">

<head>

    <?php 

include ('fonction.php');

?>





    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <link rel="icon" type="image/png" href="images/1200px-Hertz-Logo.svg.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hertz - Lons-le-saunier</title>
    </head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
     $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

$pdoStat = $db->prepare('SELECT * FROM louer
INNER JOIN client ON client.id_cliens = louer.id_cliens
     INNER JOIN vehicule ON vehicule.id_voiture = louer.id_voiture ');
$executeIsOk=$pdoStat->execute();
$louers=$pdoStat->fetchAll();


?>
<body>
    <header>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-4 ">
                    <p class="ale">Hertz</p>
                </div>



                <!--Fin PopUp-->

            </div>
        </div>
    </header>

    <nav class="nav navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    location de voitures
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Réservez une voiture </a>
                    <a class="dropdown-item" href="#">Nos destinations les plus populaires</a>
                    <a class="dropdown-item" href="pagetest.html">Nos voitures de location</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Administration
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="admin.php">Clients</a>
                    <a class="dropdown-item" href="vehicules.php">Vehicules</a>
                    <a class="dropdown-item" href="historique.php">Historique</a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <hr>
    <div class="container">
        <div class='col-8'>
                <form method='GET'>
                <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Id</span>
  </div>
                    <input class="form-control" type="text" name="id" placeholder='id'>
                    <input class="form-control" ' type="text" name="id_cliens" placeholder='id_cliens'>
                    <input class="form-control"  type="text" name="id_voiture" placeholder='id-voiture'></div>
                    <div class="input-group-prepend">
   <div class='col-8'> <span class="input-group-text" id="">Date</span>
                    <input class="form-control" type="date" name="date_de_location">
                    <input class="form-control"  type="date" name="date_fin_de_location">
                    <input class="form-control"  type="number" name="disponible">
                    <button  type="submit" value="modifier_louer" name="action_louer">Modifier</button>
                </form></div>
            </div>
    <div class="container overflow-auto">

        <table class="table col-12 ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> nom client</th>
                    <th scope="col">modèle de la voiture</th>
                    <th scope="col"> DATE DE LOCATION </th>
                    <th scope="col"> DATE FIN DE LOCATION </th>
                    <th scope="col">Disponible</th>
                </tr>
            </thead>
            <?php foreach($louers as $louer): ?>
            <tbody class='table'>
                <tr class="thead-light">
                    <th scope="col"><?= $louer['nom_clients'].' '?></th>
                    <th scope="col"><?= $louer['modele_voiture']?></th>
                    <th scope="col"><?= $louer['date_de_location']?></th>
                    <th scope="col"><?= $louer['date_fin_de_location']?></th>
                    <th scope="col"><?= $louer['disponible']?></th>

                </tr>
            </tbody>
            <?php endforeach; ?>
            
         

<?php
if(isset($_GET['action_ajout']) && !empty($_GET['cliens'])  && !empty($_GET['modele'])  && !empty($_GET['date_de_location'])&& !empty($_GET['date_fin_de_location']) && !empty($_GET['disponible'])){
      
    ajouter_louer_voiture();
      } 
?>
            </table>
            
            <form method='GET'>
        <input type="text" name="cliens" placeholder='cliens'>
        <input type="text" name="modele" placeholder='modele'>
        <input type="date" name="date_de_location">
        <input type="date" name="date_fin_de_location">
        <input type="text" name="disponible"placeholder='disponible'>
       <button type="submit" value="ajouter" name="action_ajout">Ajouter</button>
    </form>
    </div>
    </div>
    <?php 
    if(isset($_GET['action_louer']) && $_GET['action_louer']=="modifier_louer" && !empty($_GET['id'])  && !empty($_GET['id_cliens']) 
     && !empty($_GET['id_voiture'])  && !empty($_GET['disponible'])&& !empty($_GET['date_de_location'])  && !empty($_GET['date_fin_de_location'])){
       modifier_louer();
        
        }
      
    
?>


    <hr class="her" />

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2 class="uppercase">Hertz.com</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
                <div class="col-4">
                    <h2>A propos de Hertz</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
                <div class="col-4">
                    <h2>Assistance</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>