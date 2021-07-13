<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Présentation des articles</title>
        <meta nama="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme2.css">
        <script src="https://code.jquerry.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>

        <nav class="sidebar">
            <ul>
                <li><a href="index.php">Présentation</a></li>
                <li><a href="cours.php">Liste cours</a></li>
                <li><a  class="active" href="articles.php">Articles écrits</a></li>
                <li><a href="cv.php">CV sommaire</a></li>
            </ul>
        </nav>
        
        <center>
        <div class="midlebody">
            <h1>Liste d'articles/Recherches</h1>
            <?php
                require ("connexion.php");

                $reponse = mysqli_query($db, "SELECT Art_intitule, Art_lien FROM article");

                while ($data = mysqli_fetch_assoc($reponse)){
                    echo "<p>".$data['Art_intitule']." : <a style='background-color : black; color : white' href='".$data['Art_lien']."'>Cliquez ici pour acceder a l'article</a></p>";
                }
            ?>

        </div>
        </center>
    </body>
</html>