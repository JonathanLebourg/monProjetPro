<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="userChoiceStyle.css" /> 
        <title>Accueil</title>
    </head>
    <body>
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
        <div class="container">
            <h1>Vous êtes ?</h1>
            <hr>
        </div>
        <div class="row">
            <div class="col s4 offset-s1 choice">
                <div class="row p_choice"> 
                    <div class="row">
                        <h2>ARTISTE</h2>
                        <p>Vous êtes artiste amateur ou confirmé et n'avez aucun réseau de distribution et vente de vos oeuvres.
                            <br />Créez votre page de profil et envoyer ensuite vos visuels de vos oeuvres afin de les mettre en vente ou à estimer par les autres internautes.</p>
                    </div>
                </div>
                <div class="row">
                    <button class="choicebutton waves-effect waves-light btn" type="button" name="button" onclick="window.location.href = 'inscriptionArtist.php'" >S'inscrire en tant qu'artiste</button>
                </div>
            </div>
            <div class="col s4 offset-s1 choice">
                <div class="row p_choice"> 
                    <div class="row">
                        <h2>CLIENT</h2>
                        <p>Amateur d'art, vous souhaitez acquérir des oeuvres d'artistes locaux méconnus ou bien les aider à estimer la valeur de leurs travaux.
                            <br />Inscrivez-vous et découvrez les artistes !</p>
                    </div>
                    <div class="row">
                        <button class="choicebutton waves-effect waves-light btn" type="button" name="button" onclick="window.location.href = 'inscriptionClient.php'" >S'inscrire en tant que client-estimateur</button>
                    </div>
                </div>
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
    </body>
</html>
