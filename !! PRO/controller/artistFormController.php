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
if (isset($_POST['present'])) {
    //déclarion de la variable town avec le htmlspecialchar 
    $present = htmlspecialchars($_POST['present']);
    //test de la regex si elle est invalide
    if (strlen($present) > 2000) {
        //stocker dans le tableau le rapport d'erreur
        $formError['town'] = '2 000 caractères maximum';
    }
}
?>
