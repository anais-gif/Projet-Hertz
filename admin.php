<?php 

include ('fonction.php');

?>

<?php if(isset($_GET['action']) && !empty($_GET['modele'])  && !empty($_GET['prix'])  && !empty($_GET['annee'])){
      
      ajouter();
}
    
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
                    Location d'utilitaires
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Offres
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Ma réservation
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="afficherlouer.php">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Fidélité
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.html">Espace pro</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <hr>

    <?php

$pdoStat =bdd()->prepare('SELECT * FROM client');
$executeIsOk=$pdoStat->execute();
$client=$pdoStat->fetchAll();

?>


    <section class="tableau">

        <table class="table col-5 ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">ADRRESSE </th>
                    <th scope="col">NOM </th>
                    <th scope="col">PRENOM </th>
                    <th scope="col"> VILLE</th>
                    <th scope="col"> CODE POSTAL</th>
                </tr>
            </thead>
            <?php foreach($client as $client): ?>
            <tbody class='table'>
                <tr class="thead-light">
                    <th scope="col"><?= $client['id_cliens']?></th>
                    <th scope="col"><?= $client['adresse_clients']?></th>
                    <th scope="col"><?= $client['nom_clients']?></th>
                    <th scope="col"><?= $client['prenom_clients']?></th>
                    <th scope="col"><?= $client['ville_clients']?></th>
                    <th scope="col"><?= $client['cp_cliens']?></th>
                </tr>
            </tbody>
            <?php endforeach; ?>
           </table> 
           
    </section>

    <hr class='zouper'>



    <?php 

$pdoStat =bdd()->prepare('SELECT * FROM vehicule');
$executeIsOk=$pdoStat->execute();
$vehicule=$pdoStat->fetchAll();

?>

    <section class="disponibilite">
        <p class=" d-flex justify-content-center  ">Voitures disponibles</p>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form method='GET'>
                        <input type="text" name="id" placeholder="Id du vehicule à modifier">
                        <input type="text" name="modele" placeholder="Modele du vehicule">
                        <input type="text" name="prix" placeholder="Prix du vehicule">
                        <input type="text" name="annee" placeholder="Annee du vehicule">
                        <button type="submit" value="modifier" name="action">Modifier</button>
                    </form>
                </div>

                <div class="col-4">
                    <form method='GET'>
                        <input type="text" name="id" placeholder="Id voiture à supprimer">
                        <button type="submit" value="supprimer" name="action">Supprimer</button>
                    </form>
                </div>
                <div class="col-4">
                    <form method='GET'>
                        <input type="text" name="modele" placeholder='modele'>
                        <input type="text" name="prix" placeholder='prix'>
                        <input type="text" name="annee" placeholder='annee'>
                        <button type="submit" value="ajouter" name="action">Ajouter</button>
                    </form>
                </div>
            </div>

            <?php 
    if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
        
        supprimer();
    }
    ?>
        </div>
        </div>
        </div>
        <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['modele']) && !empty($_GET['prix'])  && !empty($_GET['annee'])){
       
       modifier();
        }
    
?>

        <table class=' table '>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">MODELE </th>
                    <th scope="col">PRIX </th>
                    <th scope="col">ANNEE </th>
                </tr>
            </thead>
            <?php foreach($vehicule as $vehicule): ?>
            <tbody class='table'>
                <tr class="thead-light">
                    <th scope="col"><?= $vehicule['id_voiture']?></th>
                    <th scope="col"><?= $vehicule['modele_voiture']?></th>
                    <th scope="col"><?= $vehicule['prix_voiture']?></th>
                    <th scope="col"><?= $vehicule['annee_voiture']?></th>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </section>
    <?php 
     $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

$pdoStat = $db->prepare('SELECT * FROM louer
INNER JOIN client ON client.id_cliens = louer.id_cliens
     INNER JOIN vehicule ON vehicule.id_voiture = louer.id_voiture ');
$executeIsOk=$pdoStat->execute();
$louers=$pdoStat->fetchAll();

?>

<p> Vous avez louer <p>
    
    <table class="table col-5">
    <thead class="thead-dark">
          <tr>
            <th scope="col" > nom client</th>
            <th scope="col" >modèle de la voiture</th>
            <th scope="col" > DATE DE LOCATION </th>
            <th scope="col" > DATE FIN DE LOCATION </th>
          </tr>
    </thead>
    <?php foreach($louers as $louer): ?>
    <tbody class='table'>
  <tr class="thead-light">
  <th scope="col-4" ><?= $louer['nom_clients'].' '.$louer['adresse_clients']?></th>
  <th scope="col-4"><?= $louer['modele_voiture']?></th>
  <th scope="col-2" ><?= $louer['date_de_location']?></th>
  <th scope="col-2" ><?= $louer['date_fin_de_location']?></th>

</tr>
    </tbody>
    <?php endforeach; ?>

    
</body>