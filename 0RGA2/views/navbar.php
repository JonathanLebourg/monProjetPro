<!--**----------NavBar----------**-->
<div class="row">
    <div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Tous</a></li>
            <li class="divider"></li>
            <li><a href="#!">peintres</a></li>
            <li><a href="#!">dessinateurs</a></li>
            <li><a href="#!">sculpteurs</a></li>
            <li><a href="#!">photographes</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Tous</a></li>
            <li class="divider"></li>
            <li><a href="#!">peintres</a></li>
            <li><a href="#!">dessinateurs</a></li>
            <li><a href="#!">sculpteurs</a></li>
            <li><a href="#!">photographes</a></li>
        </ul>
        <!--navbar-->
        <nav>
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    <!--            
            -----------
            PROVISOIRE
            ------------->
            <li><a href="index.php?page=myprofileAdmin"><i>ADMIN</i></a></li>
            <li><a href="index.php?page=myprofileArtist"><i>ARTIST</i></a></li>
            <li><a href="index.php?page=myprofileClient"><i>CLIENT</i></a></li>
            <li><a href="index.php?page=accueil2">Accueil2</a></li>            
<!--        -----------
            PROVISOIRE
            ------------->
            
                    <li><a href="index.php?page=accueil">Accueil</a></li>
                    <li><a href="index.php?page=whoIam">Qui sommes-nous ?</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Artistes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="index.php?page=estimate">Estimer une oeuvre</a></li>
                    <li><a href="index.php?page=contact">Nous contacter</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a  class="inscription nohover" href="index.php?page=inscription">S'inscrire</a></li>
                    <li><button data-target="modal1" class="btn modal-trigger connect waves-effect waves-light btn" type="button" name="button">Se connecter</button></li>
                </ul>
                <ul id="responsive" class="right center-align">
                    <li><a id="sidenav" href="#" data-target="slide-out" class="right sidenav-trigger"><i class="material-icons">menu</i></a></li>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="sidenav">           
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=whoIam">Qui sommes-nous ?</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Artistes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="index.php?page=estimate">Estimer une oeuvre</a></li>
            <li><a href="index.php?page=contact">Nous contacter</a></li> 
            <li class="divider"></li>
            <li><a href="index.php?page=inscription">S'inscrire</a></li>
            <li><button data-target="modal1" class="btn modal-trigger connect waves-effect waves-light btn" type="button" name="button">Se connecter</button></li>
        </ul>
    </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="container">
            <h1>CONNEXION</h1>
            <div class="divider"></div>
        </div>
        <div class="container">
            <form method="POST" action="index.php?page=welcome">
                <div class="row">  
                    <div class="input-field col s12 m6">  
                        <i class="material-icons prefix">account_circle</i>  
                        <input id="pseudo" name="pseudo" type="text" required value="<?= isset($pseudo) ? $pseudo : '' ?>" />  
                        <label class="label" for="pseudo">Pseudo de connexion</label> 
                        <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
                    </div>
                    <div class="input-field col s12 m6">  
                        <i class="material-icons prefix">https</i>  
                        <input id="password" name="password" type="text" required value="<?= isset($password) ? $password : '' ?>"/>  
                        <label class="label" for="password">Mot de passe</label>  
                        <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                    </div>
                </div>
                <div class="row">
                    <button class="userchoicebutton waves-effect waves-light btn" type="submit" >Se connecter</button>
                </div>
                <div class="row">
                    <a class="modal-close waves-effect waves-light" href = 'http://monprojetpro/0RGA2/index.php?page=inscription'>S'inscrire pour la première fois</a>
                </div>
            </form>
        </div>
    </div>
</div>

