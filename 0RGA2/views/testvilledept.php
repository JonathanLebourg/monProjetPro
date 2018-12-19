<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
         <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--        <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">        
                <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">-->

        <link rel="stylesheet" href="assets/css/generalStyle.css" /> 
        <title>index</title>
    </head>

    <body>

        <input id="ville" placeholder="Entrez un code postal ou une ville">
        <ul>
            <li data-vicopo="#ville">
                <a href="" onclick="townChoice()"><strong data-vicopo-code-postal></strong>
                <span data-vicopo-ville></span></a>
            </li>
        </ul>
        
   <form>

    <input type="text" id="recherche" />

</form>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://vicopo.selfbuild.fr/api.js"></script>

    <!--<script src="owlcarousel/owl.carousel.min.js"></script>-->

        <script src="assets/js/navbar.js"></script>

    </body>
</html>