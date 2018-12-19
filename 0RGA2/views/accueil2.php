<?php
//On indique le dossier images
$chem_img = "./img";
//On ouvre le dossier images
$handle = opendir($chem_img);

//On parcoure chaque élément du dossier
while ($file = readdir($handle)) {
    //Si les fichiers sont des images
    if (preg_match("!(\.jpg|\.jpeg|\.gif|\.bmp|\.png)$!i", $file)) {
        $listef[] = $file;
    }
}
$random_img = rand(0, count($listef) - 1); //permet de prendre une image totalement au hasard (RANDom) parmi toutes les images trouvées.
//On calcule la largeur et la hauteur de l'image aléatoire
$size = getimagesize($chem_img . "/" . $listef[$random_img]);

//Largeur maximale de l'image pour la création des miniatures
$largeur_maxi = 350;
//Si la largeur dépasse la limite autorisée...
if ($size[0] > $largeur_maxi) {
    //...la nouvelle largeur est égale à la limite à ne pas dépasser
    $width = $largeur_maxi/6.25;
    //La largeur d'origine divisée par la largeur limitée (on obtient un chiffre qui sert à faire la même proportion pour la hauteur)
    $theight = ($size[0] / $largeur_maxi)/6.25;
    //La hauteur originale est divisée par le chiffre obtenu précédemment afin que l'image conserve les mêmes proportions que l'originale (mais en mode vignette)
    $height = ($size[1] / $theight)/6.25;
} else {
    //Sinon on garde la taille originale
    $width = $size[0]/6.25;
    $height = $size[1]/6.25;
}
//On ferme le dossier
closedir($handle);
?>

<div class="container presentation">
    <div class="row">
        <div class="presentation-text col s12">
            <h1>Le bon coin des artistes</h1>
            <div class="divider"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m4">
        <div class="card white darken-1 hoverable picturecard2">
            <div class="card-content black-text">
                <div class="row"><a href="<?= $chem_img; ?>/<?= $listef[$random_img]; ?>" onclick="window.open(this.href, '_blank');return false;"><img style="border:none; width: <?= $width; ?> vh; height: <?= $height; ?> vh" src="<?= $chem_img; ?>/<?= $listef[$random_img]; ?>" alt="<?= $listef[$random_img]; ?>" /></a></div>                   
            </div>
        </div>
    </div>
    <div class="col s12 m8">
        <div class="card white darken-1 hoverable picturecard">
            <div class="card-content black-text">
                <span class="card-title"><b></b></span>
                <span class="card-title">(nom restant à déterminer)</span>
                <p class="left-align">Plateforme gratuite d’estimation et de vente d’œuvres d’art pour artistes amateurs et confirmés.
                    (un bon coin pour artistes, d’abord à échelle locale)<br />
                    Les buts de ce site sont multiples. Tout d’abord, il veut donner de la visibilité aux artistes de tous types d’un côté  et de permettre aux visiteurs intéressés de s’offrir des œuvres uniques. Ensuite, afin d’aider les artistes dans l’étape difficile d’évaluation du prix de vente de chaque pièce, le site propose un système d’estimation participatif. Pas de règlement en ligne, ce site ne permet que la mise en relation des artistes et potentiels clients qui se débrouilleront ensuite eux-même pour les modalités de payement et de livraison.<br />
                    Chaque artiste pourra personnaliser son espace personnel qui présente son univers, son parcours ainsi que ses actualités (expos, salons, etc) et ajouter les visuels de ces œuvres ainsi qu’un descriptif (titre, technique, format, poids éventuellement). Il pourra ensuite fixer un prix fixe ou bien soumettre son œuvre aux estimation des utilisateurs.<br />
                </p><p><b>Fondamentaux :</b> <br />- Artistes :</p>
                <ul class="center-align">                              
                    <li>+ faire découvrir son travail, sa démarche, ses œuvres sur une page de présentation dédiée.</li>
                    <li>+ demander une estimation aux membres du site pour fixer le bon prix.</li>
                    <li>+ mettre en vente ses œuvres.</li>
                    <li>+ renseigner sur son actualité (expos, salons, ...)</li>
                </ul>                
                <p>- Membres :</p>      
                <ul>
                    <li>+ découvrir les artistes</li>
                    <li>+ estimer les œuvres</li>
                    <li>+ acheter</li>
                </ul>
            </div>
        </div>
    </div>
</div>