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
        <title>(Admin)-Présentation</title>
        <meta nama="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="theme2.css">
        <script src="https://code.jquerry.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>

        <nav class="sidebar">
            <ul>
                <li><a class="active" href="presentation_back.php">Présentation</a></li>
                <li><a href="cours_back.php">Listes cours</a></li>
                <li><a href="articles_back.php">Articles écrits</a></li>
                <li><a href="cv_back.php">CV sommaire</a></li>
            </ul>
        </nav>
        
        <center>
            <div>
                <form id="formulaire-profil" action="save_profil.php" enctype="multipart/form-data" method="POST">
                    <table>
                        <tr>
                            <td><label for="photo_profil">Ajouter photo de profil:</label></td>
                            <td><input type="file" name="photo_profil" accept=".jpeg, .png, .jpg" required></td>
                        </tr>
                        <tr>
                            <div class="col-25">
                            <td class="preference"><label for="description">Texte de description :</label></td>
                            </div>
                            <td><textarea placeholder="Entrer votre description ici..." name="description" id="text_description" rows="20" cols="70" required></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" id="submit" value="Envoyer"></td>
                        </tr>
                    </table>
                    <?php
                        if(isset($_GET['val'])){
                            $val = $_GET['val'];
                            if($val == true)
                                echo "<p>Informations de profil envoyées avec succès !</p>";
                            else
                                echo "";
                        }
                    ?>
                </form>
            </div>
        </center>
    </body>
</html>