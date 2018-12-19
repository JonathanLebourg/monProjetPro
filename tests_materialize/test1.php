<?php
//Déclaration des regex
//Déclaration regex nom
$regexName = '/^[a-zA-Zà-Ÿ\-]+$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zà-Ÿ\-\ \.\,\?\:\!\']+$/';
//déclaration d'un tableau d'érreur
$formError = array();
//Si LastName existe , la passer au test regex , sinon c'est vide donc rien
if (isset($_POST['pseudo'])) {
    //déclarion de la variable pseudo avec le htmlspecialchar 
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $_POST['pseudo'])) {
        //stocker dans le tableau le rapport d'erreur
         $formError['pseudo'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($_POST['pseudo'])) {
        //stocker dans le tableau le rapport d'érreur
        $formError['pseudo'] = 'Champ obligatoire.';
    }
    $pseudo = htmlspecialchars($_POST['pseudo']);
}
if (isset($_POST['town'])) {
    //déclarion de la variable town avec le htmlspecialchar 
    $town = htmlspecialchars($_POST['town']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $town)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['town'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($town)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['town'] = 'Champ obligatoire.';
    }
}
?>
<!DOCTYPE html>

<html lang = "fr">
    <head>
        <meta charset = "UTF-8" />
        <title>test form materialize 1</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="formStyle.css" /> 
    </head>
    <body>
        <!--Affiche les résultats si aucune erreur est comptée dans le tableau-->
        <?php if (isset($_POST['submit'])) {
            ?>
            <p class="result">Nom : <?= $pseudo ?></p>
            <p class="result">Ville : <?= $town ?></p>
            <!--Sinon affiche le formulaire-->
        <?php } else { ?>
            <div class="row">            <!--Sinon affiche le formulaire-->
                <form class="col s12" method="POST" action="test1.php" >
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="pseudo" placeholder="Jonjon76" id="pseudo" type="text" class="validate" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
                            <label for="pseudo">Nom d'artiste<?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></label>
                            <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                        </div>
                        <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                        <div class="input-field col s6">
                            <input name="town" placeholder="Triquerville" id="pseudo" type="text" class="validate" value="<?= isset($town) ? $town : '' ?>" />
                            <label for="town">Ville</label>
                            <p class="text-danger"><?= isset($formError['town']) ? $formError['town'] : ''; ?></p>
                            <span class="helper-text" data-error="<?= isset($formError['town']) ?>" data-success="validé"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" placeholder="renseignez sur votre parcours, votre travail"></textarea>
                            <label for="textarea1">Présentation</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        <?php } ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="mainPersoArtist.js"></script>
    </body>
</html>
