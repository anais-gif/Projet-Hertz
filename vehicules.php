<?php include 'fonction.php'
?>

<!DOCTYPE html>
<html lang="fr">
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

<?php 

$pdoStat =bdd()->prepare('SELECT * FROM vehicule  ');
$executeIsOk=$pdoStat->execute();
$vehicules=$pdoStat->fetchAll();


    

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

<section class="disponibilite">

<div class="container overflow-auto">
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

        <!-- <div class="col-4">
            <form method='GET'>
                <input type="text" name="id" placeholder="Id voiture à supprimer">
                <button type="submit" value="supprimer" name="action">Supprimer</button>
            </form>
        </div>  -->

        <div class="col-4">
            <form method='GET'>
                <input type="text" name="modele" placeholder='modele'>
                <input type="text" name="prix" placeholder='prix'>
                <input type="text" name="annee" placeholder='annee'>
                <button type="submit" value="ajouter" name="action">Ajouter</button>
            </form>
        </div>
    </div>
</div>
<?php 
if(isset($_GET['action']) && $_GET['action']=="supprimer" && isset($_GET['idasupr'])){

supprimer($_GET['idasupr']);
}
?>

<?php 
if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['modele']) && !empty($_GET['prix'])  && !empty($_GET['annee'])){

modifier();
}

?>
<div class="container overflow-auto ">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID </th>
                <th scope="col">MODELE </th>
                <th scope="col">PRIX </th>
                <th scope="col">ANNEE </th>
                <th scope="col">DISPONIBLE</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php foreach($vehicules as $vehicule):
        if ($vehicule['Disponible'] =='1'){$dispo='Disponible';} else{$dispo='indisponible';} ?>
        <tbody class='table'>
            <tr class="thead-light">
                <th scope="col"><?= $vehicule['id_voiture']?></th>
                <th scope="col"><?= $vehicule['modele_voiture']?></th>
                <th scope="col"><?= $vehicule['prix_voiture']?></th>
                <th scope="col"><?= $vehicule['annee_voiture']?></th>
                <th scope="col"><?= $dispo ?></th>
                <th scope="col" class="scoou">
                    <form method='GET'>
                        <input type="hidden" name="idasupr" value="<?= $vehicule['id_voiture']?>">
                        <button type="submit" value="supprimer" name="action">Supprimer</button>
                    </form>
                </th>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</section>
</div>

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