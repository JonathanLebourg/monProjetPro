<?php
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
?>
        <div class="container">
            <div class="row">
                <h1>WELCOME</h1>
                <hr>
            </div>
            <div class="row">
                <?= 'Bienvenue à toi ' . $pseudo . ' et bonne balade sur le site.'; ?>
            </div>
            <div class="row">
                <hr>
                <p><a href="http://monprojetpro/0RGA1/index.php?page=accueil">Retour à l'accueil</a>
            </div>
        </div>
