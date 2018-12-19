<?php
if(isset($_POST['submit'])) {
    echo "Inscription envoyée";
}
//Déclaration regex pseudo
$regexPseudo = '/^[a-zA-Zà-Ÿ0-9\-\_]+$/';
if (isset($_POST['pseudo'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $pseudo = htmlspecialchars($_POST['pseudo']);
    //test de la regex si elle est invalide
    if (!preg_match($regexPseudo, $pseudo)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['pseudo'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($pseudo)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['pseudo'] = 'Champ obligatoire.';
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
        <link rel="stylesheet" href="formStyle.css" /> 
        <title>Forms php</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!">peinture</a></li>
                        <li><a href="#!">dessin</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">sculpture</a></li>
                    </ul>
                    <!--navbar-->
                    <nav>
                        <div class="nav-wrapper">
                            <ul class="left hide-on-med-and-down">
                                <li><a href="#">Quisommes-nous ?</a></li>
                                <!-- Dropdown Trigger -->
                                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Disciplines<i class="material-icons right">arrow_drop_down</i></a></li>
                                <li><a href="#">Nous contacter</a></li>
                            </ul>
                        </div>
                        <div class="conection">
                            <div class="buttons row">
                                <a  class="inscription" href="#">S'inscrire</a>
                                <button class="connect waves-effect waves-light btn" type="button" name="button">Se connecter</button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <h1>FORMULAIRE D'INSCRIPTION</h1>
                <hr>
            </div>
            <div class="row">  
                <form class="col s12" method="post" action="forms.php">  
                    <fieldset>
                        <legend>Création de votre compte</legend>                            
                        <div class="row">  
                            <div class="input-field col s6">  
                                <i class="material-icons prefix">account_circle</i>  
                                <input placeholder="Picasso" id="pseudo" type="text" required value="<?= isset($pseudo) ? $pseudo : '' ?>"/>  
                                <label class="label" for="pseudo" data-error=$formError['pseudo'] data-success="right">Pseudo</label>  
                                <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                            </div>  

                            <div class = "input-field col s6">        
                                <label class="label" for = "password">Mot de passe</label>  
                                <input id = "password" type = "password" placeholder = "mot_de_passe" class = "validate" required />            
                            </div>  
                        </div>  

                        <div class = "row">  
                            <div class = "input-field col s6">  
                                <input placeholder = "picasso@cub.ist" id = "email" type = "email" class = "validate" />  
                                <label  class="label" for = "email">Email</label>  
                            </div> 
                            <div class = "input-field col s6">
                                <button class="connect waves-effect waves-light btn" type="submit" name="submit">S'inscrire</button>
                            </div>
                        </div>
                    </fieldset>    
                </form>    
            </div>

            <div class="container-fluid">
                <div class="container-fluid">
                    <h1>FORMULAIRE DE DESCRIPTION POUR ARTISTE</h1>
                    <hr>
                </div>
                <div class="row">  
                    <form class="col s12" method="post" action="forms.php">  
                        <fieldset>
                            <legend>Personnalisation de votre fiche descriptive</legend>                            
                            <div class="row">  
                                <div class="input-field col s6">  
                                    <i class="material-icons prefix">account_circle</i>  
                                    <input placeholder="Picasso" id="artistName" type="text" required />  
                                    <label class="label" for="artistName">Nom d'artiste</label>  
                                </div>
                                <div class = "input-field col s6">        
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <label class="label" for="artistPhoto">Photo de profil</label>
                                            <input class="file-path validate" type="text" id="artistPhoto">
                                        </div>
                                    </div>  
                                </div>  

                                <div class = "row">  
                                    <div class = "input-field col s6">  
                                        <input placeholder = "picasso@cub.ist" id = "email" type = "email" class = "validate" />  
                                        <label  class="label" for = "email">Email</label>  
                                    </div> 
                                    <div class = "input-field col s6">
                                        <button class="connect waves-effect waves-light btn" type="submit" name="submit">S'inscrire</button>
                                    </div>
                                </div>
                        </fieldset>    
                    </form>    
                </div>

                <footer class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="black-text">Footer Content</h5>
                                <p class="black-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="black-text">Links</h5>
                                <ul>
                                    <li><a class="black-text text-lighten-3" href="#!">Link 1</a></li>
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
                <script src="formMain.js"></script>
                </body>
                </html>
