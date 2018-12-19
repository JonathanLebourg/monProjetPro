<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/generalStyle.css" /> 
        <title>index</title>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            include 'controller/connectFormController.php';
            include 'view/navbar.php';
            ?>
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

        <div class="container-fluid">
            <?php
            include 'view/footer.php';
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="assets/script/navbar.js"></script>
    </body>
</html>
