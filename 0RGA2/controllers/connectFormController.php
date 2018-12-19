<?php
//Déclaration regex nom
$regexPseudo = '/^[0-9A-zà-Ÿ\-\']+$/';
//Déclaration regex password
$regexPassword = '/^[0-9A-zà-Ÿ]{8,12}+$/';
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