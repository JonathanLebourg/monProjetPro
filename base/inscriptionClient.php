<?php
//Déclaration des regex
//Déclaration regex nom
$regexName = '/^[a-zA-Zà-Ÿ\-\']+$/';
//Déclaration regex nom
$regexPseudo = '/^[0-9a-zA-Zà-Ÿ\-\']+$/';
//Déclaration regex password
$regexPassword = '/^[0-9a-zA-Z]{8,12}+$/';
//Déclaration regex mail
$regexMail = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
//déclaration d'un tableau d'érreur
$formError = [];
//Si LastName existe , la passer au test regex , sinon c'est vide donc rien
if (isset($_POST['lastName'])) {
    //déclarion de la variable pseudo avec le htmlspecialchar 
    $lastName = htmlspecialchars($_POST['lastName']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $_POST['lastName'])) {
        //stocker dans le tableau le rapport d'erreur
        $formError['lastName'] = 'Saisie invalide';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['lastName'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Champ obligatoire';
    }
}

if (isset($_POST['firstName'])) {
    //déclarion de la variable password avec le htmlspecialchar 
    $firstName = htmlspecialchars($_POST['firstName']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $firstName)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['firstName'] = 'Saisie invalide';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['firstName'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['mail'] = 'Champ obligatoire';
    }
}
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

if (isset($_POST['mail'])) {
    //déclarion de la variable password avec le htmlspecialchar 
    $mail = htmlspecialchars($_POST['mail']);
    //test de la regex si elle est invalide
    if (!preg_match($regexMail, $mail)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['mail'] = 'Mail incorrect';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['mail'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['mail'] = 'Champ obligatoire';
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
if (isset($_POST['passwordCheck'])) {
    //déclarion de la variable pseudo avec le htmlspecialchar 
    $passwordCheck = htmlspecialchars($_POST['passwordCheck']);
    //test de la regex si elle est invalide
    if ($passwordCheck != $password) {
        //stocker dans le tableau le rapport d'erreur
        $formError['passwordCheck'] = 'retapez votre mot de passe';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['passwordCheck'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['passwordCheck'] = 'Champ obligatoire';
    }
}
?>
<!DOCTYPE html>

<html lang = "fr">
    <head>
        <meta charset = "UTF-8" />
        <title>test form materialize 1</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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



        <!--Affiche les résultats si aucune erreur est comptée dans le tableau-->

            <div class="container">            
                <form class="col s12" method="POST" action="myprofileClient.php" >
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="lastName" id="lastName" type="text" class="validate" value="<?= isset($lastName) ? $lastName : '' ?>" />
                            <label for="lastName">Nom</label>
                            <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                        </div>
                        <div class="input-field col s6">
                            <input name="firstName"id="firstName" type="text" class="validate" value="<?= isset($firstName) ? $firstName : '' ?>" />
                            <label for="firstName">Prénom</label>
                            <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="pseudo" id="pseudo" type="text" class="validate" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
                            <label for="pseudo">Pseudo de connexion</label>
                            <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                        </div>
                        <div class="input-field col s6">
                            <input name="mail"id="password" type="text" class="validate" value="<?= isset($mail) ? $mail : '' ?>" />
                            <label for="mail">Mail</label>
                            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="password" id="password" type="password" class="validate" value="<?= isset($password) ? $password : '' ?>" />
                            <label for="password">Mot de passe</label><span>votre mot de passe doit comporter 8 à 10 caractères (minuscules, MAJUSCULES, chiffres)</span>
                            <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                        </div>
                        <div class="input-field col s6">
                            <input name="passwordCheck" id="passwordCheck" type="password" class="validate" value="<?= isset($passwordCheck) ? $passwordCheck : '' ?>" />
                            <label for="passwordCheck">Vérification du mot de passe</label>
                            <p class="text-danger"><?= isset($formError['passwordCheck']) ? $formError['passwordCheck'] : ''; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
     

        <!--**-----------FOOTER------------**-->
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
