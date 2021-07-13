<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Présentation des cours</title>
        <meta nama="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme2.css">
        <script src="https://code.jquerry.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>

        <nav class="sidebar">
            <ul>
                <li><a href="index.php">Présentation</a></li>
                <li><a  class="active" href="cours.php">Liste cours</a></li>
                <li><a href="articles.php">Articles écrits</a></li>
                <li><a href="cv.php">CV sommaire</a></li>
            </ul>
        </nav>

        <div class="midlebody">
            <h1 style="text-align: center;">Liste des cours</h1> <br> <br>
            <?php
                require("connexion.php");

                $resultat = mysqli_query($db, "SELECT Cintitule, Cdescription, Crepertoire FROM cours");

                while($data = mysqli_fetch_assoc($resultat)){
                    echo "<h3>".$data['Cintitule']."</h3> <br>";
                    echo "<p>".$data['Cdescription']."</p>";
                    echo "<a href='".$data['Crepertoire']."'>Lien pour accéder au cours</a> <br> <br>";
                }
            ?>
        </div>
    </body>
</html>