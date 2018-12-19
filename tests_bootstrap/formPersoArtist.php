<?php
//Déclaration des regex
//Déclaration regex nom
$regexName = '/^[a-zA-Zà-Ÿ\-]+$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zà-Ÿ\-\ \.\,\?\:\!\']+$/';
//déclaration d'un tableau d'érreur
$formError = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['lastName'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $lastName = htmlspecialchars($_POST['lastName']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    //le filtre permet de verifier l'email
    if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
        $formError['mail'] = 'Saisie invalide.';
    }
    if (empty($mail)) {
        $formError['mail'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['hacks'])) {
    $hacks = htmlspecialchars($_POST['hacks']);
    if (!preg_match($regexText, $hacks)) {
        $formError['hacks'] = 'Saisie invalide.';
    }
    if (empty($hacks)) {
        $formError['hacks'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['exp'])) {
    $exp = htmlspecialchars($_POST['exp']);
    if (!preg_match($regexText, $exp)) {
        $formError['exp'] = 'Saisie invalide.';
    }
    if (empty($exp)) {
        $formError['exp'] = 'Champ obligatoire.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>TP1 - Partie10</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" /> 
        <link href="stylePersoArtist.css" rel="stylesheet"/>  
    </head>
    <body>
        <div class="container">
            <h1>Formulaire artiste</h1>
        </div>    
        <div class="container">
            <!--Affiche les résultats si aucune erreur est comptée dans le tableau-->
            <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
                <p class="result">Nom : <?= $lastName ?></p>
                <p class="result">Mail : <?= $mail ?></p>
                <p class="result">Hack : <?= $hacks ?></p>
                <p class="result">Expérience : <?= $exp ?></p>
                <!--Sinon affiche le formulaire-->
            <?php } else { ?>
                <form action="formPersoArtist.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="exp">Nom</label>
                                <input class="form-control"  id="lastName" type="text" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>" />
                                <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                            </div>
                            <div class="col">
                                <label for="exampleInputFile">fichier image</label>
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Uniquement .jpg, .jpeg ou .png. Taille maximale : 2Mo</small>
                            </div>
                        </div>
                        <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                        <textarea id="hacks" name="hacks"  rows="5" cols="38"><?= isset($hacks) ? $hacks : '' ?></textarea>
                        <p class="text-danger"><?= isset($formError['hacks']) ? $formError['hacks'] : ''; ?></p>
                        <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <textarea id="exp" name="exp"  rows="5" cols="38"><?= isset($exp) ? $exp : '' ?></textarea>
                        <p class="text-danger"><?= isset($formError['exp']) ? $formError['exp'] : ''; ?></p>
                        <div class="form-group">
                            <label for="mail">Email</label>
                            <input class="form-control" id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                        </div>
                        <input class="form-control" type="submit" value="Envoyer" name="submit"/>

                    </div>
                </form>
            <?php } ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>