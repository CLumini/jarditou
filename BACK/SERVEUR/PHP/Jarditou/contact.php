<?php include'header.php';?>

        <form action="bienvenue.php" method="POST">

            <fieldset>

                <legend>Vos coordonnées</legend>

                <div class="form-group row">

                    <label for="nom">Votre nom* : </label>
                    <input class="form-control" type="text" name="nom" id="nom" title="nom">			
					<span id="erreurNom"></span><!--span utilisé pour les messages d'erreurs en javascript-->
					
                </div>

                <div class="form-group row">
                    <label for="prenom">Votre prénom* : </label>
                    <input class="form-control" type="text" name="prenom" id="prénom" required title="prenom">
                    <span id="erreurPrenom"></span>
                </div>

                <div class="form-group">

                    <p>Sexe* : <p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="Féminin" value="Féminin">
                                <label class="form-check-label" for="Féminin">Féminin</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="Masculin" value="Masculin">
                                <label class="form-check-label" for="Masculin">Masculin</label>
                            </div>
                            <span id="erreurOption"></span>
                </div>

                <div class="form-group row">
                    <label for="date_naissance">Date de naissance* : </label>
                    <input class="form-control" type="date" name="date_naissance" id="naissance" required
                        title="Date de naissance">
                    <span id="var erreurNaissance"></span>
                </div>

                <div class="form-group row">
                    <label for="code_postal">Code postal* : </label>
                    <input class="form-control" type="text" name="code_postal" id="codePostal" required
                        title="code postal" max="5">
                    <span id="erreurCP"></span>
                </div>

                <div class="form-group row">
                    <label for="adresse">Adresse : </label>
                    <input class="form-control" type="text" name="adresse" id="adresse">
                </div>

                <div class="form-group row">
                    <label for="ville">Ville : </label>
                    <input class="form-control" type="text" name="ville" id="ville">
                </div>

                <div class="form-group row">
                    <label for="eMail">Email* : </label>
                    <input class="form-control" type="text" name="eMail" id="eMail" required title="Email">
                    <span id="erreurEMail"></span>
                </div>

            </fieldset>

            <fieldset>

                <legend>Votre demande</legend>

                <div class="form-group row">
                    <label for="Sujet">Sujet* : </label>
                    <select class="form-control" id="Sujet" name="choix">
                        <option value="">Veuillez sectionner un sujet</option>
                        <option value="commandes">Mes commandes</option>
                        <option value="Question produit">Question sur un produit</option>
                        <option value=" Réclamation">Réclamation</option>
                        <option value="Autres">Autres</option>
                    </select>
                    <span id="erreurSujet"></span>
                </div>

                <div class="form group row">
                    <label for="question">Votre question* : </label>
                    <textarea class="form-control" name="question" id="question" required></textarea>
                    <span id="erreurQuestion"></span>
                </div>

                <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="formulaire" value="consent_OK"
                        id="check_box" required>*J'accepte le
                    traitement informatique de ce formulaire
                    <span id="erreurCheck"></span>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Envoyer" id="bouton_envoi" name ="envoyer">
                    <input type="reset" class="btn btn-dark" value="Annuler">
                </div>

            </fieldset>

        </form>
<script src="/public/js/contact.js"></script>
<?php include 'footer.php';?>