<?php
$pages = [
    'accueil' => 'views/accueil.php',
    'whoIam' => 'views/whoIam.php',
    'estimate' => 'views/estimate.php',
    'contact' => 'views/contact.php',
    'welcome' => 'views/welcome.php',
    'inscription' => 'views/userChoice.php',
    'artistForm' => 'views/artistForm.php',
    'clientForm' => 'views/clientForm.php',
    'myprofileAdmin' => 'views/myprofileAdmin.php',
    'myprofileArtist' => 'views/myprofileArtist.php',
    'myprofileClient' => 'views/myprofileClient.php',
    'mentions' => 'views/mentions.php'
];

require 'controllers/connectFormController.php';

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/generalStyle.css" /> 
        <title>index</title>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            include 'views/navbar.php';
            ?>
        </div>
        <div class="container-fluid">
            <?php
            if (!isset($_GET['page'])) {
                $page = 'accueil.php';
            } else {
                switch ($_GET['page']) {
                    case 'accueil':
                        include('views/accueil.php');
                        break;
                    case 'whoIam':
                        include('views/whoIam.php');
                        break;
                    case 'estimate':
                        include('views/estimate.php');
                        break;
                    case 'inscription':
                        include('views/userChoice.php');
                        break;
                    case 'welcome':
                        include('views/welcome.php');
                        break;
                    case 'artistForm':
                        include('views/artistForm.php');
                        break;
                    case 'clientForm':
                        include('views/clientForm.php');
                        break;
                    case 'myprofileAdmin':
                        include('views/myprofileAdmin.php');
                        break;
                    case 'myprofileArtist':
                        include('views/myprofileArtist.php');
                        break;
                    case 'myprofileClient':
                        include('views/myprofileClient.php');
                        break;
                    case 'mentions':
                        include('views/mentions.php');
                        break;
                    default :
                        include('views/accueil.php');
                        break;
                }
            }
            ?>
        </div>

        <div class="container-fluid">
            <?php
            include 'views/footer.php';
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        
        <script src="assets/js/navbar.js"></script>
    </body>
</html>