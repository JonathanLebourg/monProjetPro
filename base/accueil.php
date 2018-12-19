<?php
//Déclaration regex nom
$regexPseudo = '/^[0-9a-zA-Zà-Ÿ\-\']+$/';
//Déclaration regex password
$regexPassword = '/^[0-9a-zA-Z]{8,12}+$/';
//déclaration d'un tableau d'érreur
$formError = [];
if (isset($_POST['pseudo'])) {
    //déclarion de la variable pseudo avec le htmlspecialchar 
    $pseudo = htmlspecialchars($_POST['pseudo']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPseudo, $_POST['pseudo'])) {
        //stocker dans le tableau le rapport d'erreur
        $formError['pseudo'] = 'Saisie invalide';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['pseudo'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['pseudo'] = 'Champ obligatoire';
    }
}
if (isset($_POST['password'])) {
    //déclarion de la variable password avec le htmlspecialchar 
    $password = htmlspecialchars($_POST['password']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPassword, $password)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['password'] = 'Mot de passe incorrect, votre mot de passe doit comporter 8 à 10 caractères (minuscules, MAJUSCULES, chiffres)';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['password'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['password'] = 'Champ obligatoire';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="accueilStyle.css" /> 
        <title>Accueil</title>
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
                                <button data-target="modal1" class="btn modal-trigger connect waves-effect waves-light btn" type="button" name="button">Se connecter</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="container">
                    <h1>CONNEXION</h1>
                    <hr>
                </div>
                <div class="container">
                    <form method="POST" action="welcome.php">
                        <div class="row">  
                            <div class="input-field col s6">  
                                <i class="material-icons prefix">account_circle</i>  
                                <input id="pseudo" name="pseudo" type="text" required value="<?= isset($pseudo) ? $pseudo : '' ?>" />  
                                <label class="label" for="pseudo">Pseudo de connexion</label> 
                                <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                            </div>
                            <div class="input-field col s6">  
                                <i class="material-icons prefix">https</i>  
                                <input id="password" name="password" type="password" required value="<?= isset($password) ? $password : '' ?>"/>  
                                <label class="label" for="password">Mot de passe</label>  
                                <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <button class="choicebutton modal-close waves-effect waves-light btn" type="submit" onclick="window.location.href = 'welcome.php'">Se connecter</button>
                        </div>
                        <div class="row">
                            <button class="choicebutton modal-close waves-effect waves-light btn" onclick="window.location.href = 'userchoice.php'">S'inscrire pour la première fois</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="presentation container-fluid">
            <div class="row">
                <div class="presentation-image col s3">
                    <img class=" responsive-img" width="250" src="img/4.jpg" alt="IMG">
                </div>
                <div class="presentation-text col s6">
                    <h1>Présentation</h1>
                    <hr>
                    <p>Ce site se propose comme une plateforme libre et gratuite de vitrine, vente et estimation pour artistes amateurs et confirmés</p>
                </div>
                <div class="presentation-image col s3">
                    <img class=" responsive-img" width="250" src="img/5.jpg" alt="IMG">
                </div>
            </div>
        </div>

        <!--**-----------FOOTER------------**-->
        <footer class="page-footer">
            <div class="container">
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
                <div class="container-fluid">
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