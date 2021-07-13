<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Accueil | Présentation</title>
        <meta nama="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme2.css">
        <script src="https://code.jquerry.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>

        <nav class="sidebar">
            <ul>
                <li><a class="active" href="index.php">Présentation</a></li>
                <li><a href="cours.php">Listes cours</a></li>
                <li><a href="articles.php">Articles écrits</a></li>
                <li><a href="cv.php">CV sommaire</a></li>
            </ul>
        </nav>
        
        <center>
            <div class="midlebody">
                <?php
                    require("connexion.php");

                    $requete1 = "SELECT Nom, Prenom, Email, Description FROM utilisateur";
                    $reponse1 = mysqli_query($db, $requete1);
                    if($reponse1){
                        $donnee1 = mysqli_fetch_assoc($reponse1);

                        $nom            = $donnee1['Nom'];
                        $prenom         = $donnee1['Prenom'];
                        $email          = $donnee1['Email'];
                        $description    = $donnee1['Description'];
                    } else {
                        echo "Erreur lors de la lecture dans la table utilisateur";
                    }

                    $requete2 = "SELECT Imrepertoire FROM image";
                    $reponse2 = mysqli_query($db, $requete2);
                    if($reponse2){
                        // Récupère la dernière image mise par l'utilisateur
                        while($donnee2 = mysqli_fetch_assoc($reponse2)){
                            $image = $donnee2['Imrepertoire'];
                        }

                    } else {
                        echo "Erreur lors de la lecture dans la table image";
                    }

                    echo "<img src='".$image."'><br>";
                    echo "<p>".$prenom." ".$nom."</p>";
                    echo $email;
                    echo "<br> <br> <h2>".$description."</h2>";
                ?>
            </div>
        </center>
        <
    </body>
</html>