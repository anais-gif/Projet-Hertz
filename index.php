<!DOCTYPE html>
<html lang="en">

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
                <div class="col-12 col-md-3">
                    <p class="fr"><img src="images/Sans titre-1.jpg"> FR/fr</p>
                </div>
                <div class="col-12 col-md-3">
                    <a href=""class="btnPopup" id="btnPopup">Se connecter/S'inscrire</a>
                    <div id="overlay" class="overlay">
                    <div id="popup" class="popup">
                       <h2>simple popup</h2> <span id="btnclose" class="btnclose">&times;</span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav><ul class="nav navbar-expand justify-content-start">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                location de voitures
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Réservez une voiture </a>
                <a class="dropdown-item" href="#">Nos destinations les plus populaires</a>
                <a class="dropdown-item" href="#">Nos voitures de location</a>
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
            <div class="dropdown-menu" >
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
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Fidélité
            </a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Espace pro</a>
            </li>
    </ul>
    </div></nav>

    <hr>

    <section class="beau">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-xl-12" >
                    <p><img class="img-fluid position-relative"  src="images/2017-Citroen-C4-Cactus-petrol-auto-vs-Renault-Captur-Intens-133.jpg"/></p>
                </div>
                <div class="col-sm-12 col-lg-4 col-xl-3 colori position-absolute">
                    <p>Evadez vous avec Lons-le-saunier Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, aliquam. Illo est provident modi eligendi, dolorem neque tempore voluptatum commodi tempora fugiat soluta quam id officiis odio excepturi, molestiae ipsa.</p>
                </div>
            </div>
        </div>   
        <div class="locationvoiture position-absolute ">
            <a class="btn b1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               Voitures
              </a>
              <a class="btn b2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Véhicules utilitaires
               </a>
        <div class="collapse" id="collapseExample">
            <hr class="hlel position-relative">
            <div class="container magic position-relative">
                <div class="row">
                    <hr>
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Example multiple select</label>
                      <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </form>
               </div></div></div></div></div>
            
        
        
    </section>

    <hr class="her"/>

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
            </div>
            <div class="col-4">
                <h2>Assistance</h2>
            </div>
        </div>
    </div>
    </footer>

    <!--<script>

onclick="chacgementCouleur()"

function chacgementCouleur() {
  var element = document.getElementById("voitures");
  element.classList.toggle("ita");
}

        </script>

    -->
 

    <script src="script.js"></script> 
</body>

</html>