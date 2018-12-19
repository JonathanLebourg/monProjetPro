<div class="container">           
    <form class="col s12" method="POST" action="index.php?page=myprofileArtist" >
        <div class="row">
            <div class="input-field col s6">
                <input name="lastName" id="lastName" type="text" class="validate" value="<?= isset($lastName) ? $lastName : '' ?>" />
                <label for="lastName">Nom<?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></label>
                <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
            </div>
            <div class="input-field col s6">
                <input name="firstName" id="firstName" type="text" class="validate" value="<?= isset($firstName) ? $firstName : '' ?>" />
                <label for="firstName">Prénom</label>
                <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <span></span>
                <input name="pseudo" id="pseudo" type="text" class="validate" value="<?= isset($pseudo) ? $pseudo : '' ?>" />
                <label for="pseudo">Nom d'artiste | sera aussi votre pseudo de connexion </label>
                <p class="text-danger"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
            </div>
            <div class="input-field col s6">
                <input name="mail" id="mail" type="text" class="validate" value="<?= isset($mail) ? $mail : '' ?>" />
                <label for="mail">Mail</label>
                <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="password" id="password" type="password" class="validate" value="<?= isset($password) ? $password : '' ?>" />
                <label for="password">Mot de passe | 8 à 10 caractères (minuscules, MAJUSCULES, chiffres UNIQUEMENT)</label>
                <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
            </div>
            <div class="input-field col s6">
                <input name="passwordCheck" id="passwordCheck" type="password" class="validate" value="<?= isset($passwordCheck) ? $passwordCheck : '' ?>" />
                <label for="passwordCheck">Vérification du mot de passe</label>
                <p class="text-danger"><?= isset($formError['passwordCheck']) ? $formError['passwordCheck'] : ''; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="present" class="materialize-textarea" name="present" placeholder="renseignez sur votre parcours, votre travail (2000 caractères MAX.)" maxlength="2000"></textarea>
                <label for="present">Présentation</label>
                <p class="text-danger"><?= isset($formError['present']) ? $formError['present'] : ''; ?></p>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="submit">S'inscrire
                    <i class="material-icons right">send</i>
                </button>
        </div>
    </form>
</div>