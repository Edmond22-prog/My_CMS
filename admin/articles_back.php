<?php
    session_start();
    if($_SESSION['login'] !== ""){
        $user = $_SESSION['login'];
        // afficher un message
        echo $user." : connecté";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>(Admin)-Article de recherche</title>
        <meta nama="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme2.css">
        <script src="https://code.jquerry.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>

        <nav class="sidebar">
            <ul>
                <li><a href="presentation_back.php">Présentation</a></li>
                <li><a href="cours_back.php">Liste cours</a></li>
                <li><a  class="active" href="articles_back.php">Articles écrits</a></li>
                <li><a href="cv_back.php">CV sommaire</a></li>
            </ul>
        </nav>
        
        <center>
            <div class="midlebody">
                <form id="formulaire_article" action="save_article.php" method="POST">
                    <table>
                        <tr>
                            <td><label for="intitule">Intitulé de l'article :</label></td>
                            <td><input type="text" name="intitule" required></td>
                        </tr>
                        <tr>
                            <td><label for="carticle">Ajouter le lien de l'article :</label></td>
                            <td><input type="text" name="article" required></td>
                        </tr>
                    
                        <tr>
                            <td><input type="submit" id="submit" value="Envoyer"></td>
                        </tr>
                    </table>
                    <?php
                        if(isset($_GET['val'])){
                            $val = $_GET['val'];
                            if($val == true)
                                echo "<p>Article sauvegardé avec succès !</p>";
                            else
                                echo "";
                        }
                    ?>
                </form>
            </div>
        </center>
    </body>
</html>