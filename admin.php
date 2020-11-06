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
                    <a class="dropdown-item" href="index.php">Réservez une voiture </a>
              
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Administration
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="admin.php">Clients</a>
                    <a class="dropdown-item" href="vehicules.php">vehicule</a>
                    <a class="dropdown-item" href="historique.php">Historique</a>
                </div>
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
        <div class="container overflow-auto">
            <div class="row">
                <table id="Tatable" class="table col-12 ">
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
            </div>
            <div class="row">
                <form method="GET">
                    <input name='prenom_clients'>
                    <input name='nom_clients'>
                    <input name='id_cliens'>
                    <button type='submit' name='historique' value='historique'>Historique</button>
                </form>
                </table>
            </div>

            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"> Historique</th>
                        </tr>
                    </thead
                    <tbody class='table'>
                        <tr class="thead-light">
                            <td> <?php  

if(isset($_GET['historique']) && $_GET['historique']=="historique"){
    historique();
}
?>
</table>
    </section>
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