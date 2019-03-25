

<!DOCTYPE html>
<html>
    <head>
        <title>Menu Produits</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
       

        <header id="header">
            <?php
            include 'partials/header.php';
            ?>
        </header>

        <nav id="nav">
            <?php
            include 'partials/nav.php';
            ?>
        </nav>

        <div id="centre">
            <h1 id="titre"> Menu Produits</h1>

            <ul id="sous_menu">
                <li>
                    <a href="../boundaries/AfficherProduitsIHM.php"> Afficher Tous</a>
                </li>
                <li>
<!--                    &nbsp;|&nbsp;-->
               
                </li>
                <li>
                    <a href="../boundaries/ProduitsInsertIHM.php">Ajout</a>
                </li>
                <li>
<!--                    &nbsp;|&nbsp;-->
                </li>

                <li>
                    <a href="../boundaries/ProduitsDeleteIHM.php">Suppression</a>
                </li>
                <li>
<!--                    &nbsp;|&nbsp;-->
                </li>

                <li>
                    <a href="../boundaries/ProduitsUpdateIHM.php">Modification</a>
                </li>
                <li>
<!--                    &nbsp;|&nbsp;-->
                </li>
            </ul>

<!--            <table>
                <thead>
                    <tr>
                        <th>ID produit</th>
                        <th>Produit</th>
                        <th>ID Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
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
        </div>-->

        <footer id="footer">
            <?php
            include 'partials/footer.php';
            ?>
        </footer>

<!--        <script src="../js/authentification.js"></script>-->

    </body>
</html>

