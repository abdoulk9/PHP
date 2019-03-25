<!DOCTYPE html>
<html>
    <head>
        <title>UtilisateursInsertMonoPage.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>

    <body>
        <?php
        //Declaration de la variable 
        $lsMessage = "";
        //Récuperation de la valeur pseudo
        $pseudo = filter_input(INPUT_GET, "pseudo");
        //Récuperation de la valeur mdp
        $mdp = filter_input(INPUT_GET, "mdp");
        //test  le contenu des  variables 
        if ($pseudo != null && $mdp != null) {
            $lsMessage = "Jusque là ...";
            //essai
            try {
                //Connection à la BD
                $pdo = new PDO("mysql:host=localhost;port=3306;dbname=blogentraide;", "root", "");
                //??
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //codage en caractere utf8
                $pdo->exec("SET NAMES 'UTF8'");
                //Preparation de l'ordre SQL
                $sql = "INSERT INTO utilisateurs(pseudo, mdp) VALUES(?,?)";
                //Compilation
                $lcmd = $pdo->prepare($sql);
                //Valorisation
                $lcmd->bindParam(1, $pseudo);
                $lcmd->bindParam(2, $mdp);
                //Execution de l'ordre 
                $lcmd->execute();
                /*Affecttation du nombre de ligne de ligne affecté par la odification grace à la
                 * rowCount()
                 */
                $liAffecte = $lcmd->rowCount();
                /*Concatenation da la valeur contenu dans $liAffecte avec 
                 * une chaine et l'affecte à la  variable $lsMessage 
                 */
                
                $lsMessage = $liAffecte . " ut ajouté";
                $pdo = null;
            } catch (PDOException $ex) {
                $lsMessage = $ex->getMessage();
            }
        } else {
            $lsMessage = "Jusque là ... KO ";
        }
        ?>

         <!--affichage du titre du site-->
        <header id="header">
            Site d'entraide
        </header>
        
        <nav id="nav">
            <!--Liste de puce du menu -->
            <ul id="menu_principal">
                <li>
                    <a href="../boundaries/authentification.php">S'authentifier</a>
                </li>
                <li>
                    &nbsp;|&nbsp;
                </li>
                <li>
                    <a href="../boundaries/inscription.php">S'inscrire</a>
                </li>
                <li>
                    &nbsp;|&nbsp;
                </li>
                <li>
                    <a href="../boundaries/gerer_son_compte.php">Gérer son compte</a>
                </li>
                <li>
                    &nbsp;|&nbsp;
                </li>
                <li>
                    <a href="../boundaries/accueil_general.php">Accueil général</a>
                </li>
            </ul>
        </nav>
        <!-- -->
        <div id="centre">
            <h1>Inscription</h1>
            <!-- -->
            <form action="" method="GET">
                <!-- -->
                <label>Pseudo : </label>
                <!-- -->
                <p>
                    <input type="text" name="pseudo" id="pseudo" value="z" />
                </p>
                <!-- -->
                <label>Mot de passe : </label>
                <p>
                    <input type="password" name="mdp" id="mdp" value="x" />
                </p>
               <!-- -->
                <p>
                    <input type="submit" value="Valider" id="btValider" />
                </p>
            </form>

            <label id="lblMessage">
                <?php
                echo $lsMessage;
                ?>
            </label>
        </div>
<!-- -->
        <footer id="footer">
            &copy; pb & co
        </footer>
    </body>
</html>
