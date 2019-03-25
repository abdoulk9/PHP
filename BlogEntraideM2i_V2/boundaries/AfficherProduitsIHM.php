<!DOCTYPE html>
<?php
require_once '../daos/GestionProduitsDAO.php';
require_once '../daos/Connexion.php';

$lcnx = new PDO("mysql:host=localhost;port=3306;dbname=blogentraide;", "root", "");
            $lcnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $lcnx->exec("SET NAMES 'UTF8'");

?>
<html>
    <head>
        <title> AfficherPoduitIHM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
 
    <body>
        <table>
                <thead>
                    <tr>
                        <th>ID produit</th>
                        <th>Produit</th>
                        <th>ID Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     
                     $lsContenu = selectAll($lcnx);
                     echo $lsContenu;
                    ?>
                </tbody>
            </table>

            <p>
                <label id="lblMessage">
                    <?php
                    if (isSet($liAffecte)) {
                        echo $liAffecte;
                    }
                    ?>
                </label>
            </p>
        </div>

        <footer id="footer">
            <?php
            include 'partials/footer.php';
            ?>
        </footer>

    </body>
</html>

