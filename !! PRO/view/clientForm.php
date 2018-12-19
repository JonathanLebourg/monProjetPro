<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "UTF-8" />
        <title>test form materialize 1</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/css/generalStyle.css" /> 
    </head>
    <body>
        <!--**----------NavBar----------**-->
        <div class="container-fluid">
            <?php
            include '../controller/clientFormController.php';
            include 'navbar.php';
            ?>
        </div>

        <div class="container">            
            <form class="col s12" method="POST" action="clientProfile.php" >
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
                    <button class="btn waves-effect waves-light" type="submit" name="submit" onclick="window.location.href = 'index.php?page=myprofileClient'">Envoyer
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>


        <!--**-----------FOOTER------------**-->

        <div class="container-fluid">
            <?php
            include 'footer.php';
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="../assets/script/navbar.js"></script>
    </body>
</html>
