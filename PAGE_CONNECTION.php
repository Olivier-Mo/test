<?php session_start(); ?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <title>The Bet-ter - PAGE_CONNECTION</title>
        <link rel="stylesheet" href="PAGE_CONNECTION.css" />
    </head>


    <body>

        <header>
            <h1>The Bet-ter</h1>
        </header>

        <div id = "Formulaires">
            <!-- Formulaire de connection -->
            <section class = "form">
                <form method="POST" action="connexion.php">
                    <fieldset>
                        <legend> <h3>Se connecter</h3> </legend>
                        <p> <label>Pseudo <input type="text" name="pseudo" required/></label> </p>
                        <p> <label>Mot de passe <input type="password" name="mdp" required/></label> </p>
                        <p> <input type="submit" value="Connection" class = "bouton"/> </p> <!-- Doit également envoyer vers PAGE_ACCUEIL -->
                    </fieldset>
                </form>
            </section>

            <!-- Formulaire de création de compte -->
            <section class = "form">
                <form method="POST" action="creation_compte.php">
                    <fieldset>
                        <legend> <h3>Créer un compte</h3> </legend>
                        <p> <label>Nom <input type="text" name="nom" required/></label> </p>
                        <p> <label>Prenom <input type="text" name="prenom" required/></label> </p>
                        <p> <label>@ <input type="email" name="mail"/></label> </p>
                        <p> <label>Pseudo <input type="text" name="pseudo" required/></label> </p>
                        <p> <label>Mot de passe <input type="password" name="mdp" required/></label> </p>
                        <p> <input type="submit" value="Créer" class = "bouton"/> </p> <!-- Doit également envoyer vers PAGE_ACCUEIL -->
                    </fieldset>
                </form>
            </section>
        </div>
    </body>

</html>









