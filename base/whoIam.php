<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Who I am</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="whoIamStyle.css" /> 
    </head>
    <body>
<!--**----------NavBar----------**-->
        <div class="container-fluid">
            <div class="row">
                <div>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!">Tous</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">peintres</a></li>
                        <li><a href="#!">dessinateurs</a></li>
                        <li><a href="#!">sculpteurs</a></li>
                        <li><a href="#!">photographes</a></li>
                    </ul>
                    <!--navbar-->
                    <nav>
                        <div class="nav-wrapper">
                            <ul class="left hide-on-med-and-down">
                                <li><a href="accueil.php">Accueil</a></li>
                                <li><a href="whoIam.php">Qui sommes-nous ?</a></li>
                                <!-- Dropdown Trigger -->
                                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Artistes<i class="material-icons right">arrow_drop_down</i></a></li>
                                <li><a href="#">Estimer une oeuvre</a></li>
                                <li><a href="#">Nous contacter</a></li>
                            </ul>
                        </div>
                        <div class="connection">
                            <div class="buttons row">
                                <a  class="inscription" href="userchoice.php">S'inscrire</a>
                                <button class="connect waves-effect waves-light btn" type="button" name="button">Se connecter</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
<!--**----------NavBar----------**-->
<!--**-----------QUI SUIS JE ? ---------------**-->
        <div class="container">
            <div class="row">
                <h1>Ou plutôt qui suis-je... ?</h1>
            <hr>
            </div>
            <div class="row">
                <p>Car oui, même si l'équipe est amené à s'agrandir, pour l'instant 
                    je suis le seul instigateur de cette plateforme de promotion des artistes.</p>
                <img class="portrait responsive-img" src="img/portrait" alt="portrait" width="350">
                <p>Artiste et développeur web en formation au sein de La Manu au Havre, 
                    je réalise pour mon titre pro un site qui je l'espère grandira par la suite </p>
            </div>
        </div>
        
<!--**----------FOOTER-----------**-->
        <footer class="page-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="black-text">ça c'est le footer</h5>
                        <p class="black-text text-lighten-4">Je peux écrire ce que je veux ici</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="black-text">des liens ou ce que je veux</h5>
                        <ul>
                            <li><a class="black-text text-lighten-3" href="accueil.php">Accueil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 JON
                    <a class="black-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="navBar.js"></script>
    <?php
    // put your code here
    ?>
</body>
</html>
