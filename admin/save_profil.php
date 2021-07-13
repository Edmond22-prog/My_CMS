<?php
    require ("connexion.php");
    session_start();
    $user = $_SESSION['login'];

    if(isset($_POST['description'])){
        $description = $_POST['description'];

        $req = "UPDATE utilisateur SET Description = '".$description."' WHERE Login = '".$user."'";
        $rep = mysqli_query($db, $req);
    }

    if(!empty($_FILES)){
        $fichier_nom = $_FILES['photo_profil']['name'];
        $fichier_extension = strrchr($fichier_nom, ".");  // Recupere la chaine de caractere apres le . sur le file_name
        
        $file_repertoire = $_FILES['photo_profil']['tmp_name'];
        $repertoire_dest = '../images/'.$fichier_nom;

        $extension_autorisees = array('.jpeg', '.png', '.jpg', 'JPEG', 'PNG', 'JPG');

        if(in_array($fichier_extension, $extension_autorisees)){
            if(move_uploaded_file($file_repertoire, $repertoire_dest)){ // Copie le fichier dans le dossier images
                $requete = "INSERT INTO image VALUES ('".$fichier_nom."', '".$fichier_extension."', '".$user."', '".$repertoire_dest."')";
                $reponse = mysqli_query($db, $requete);
                if($reponse){
                    header('Location: presentation_back.php?val=true');
                    /* echo "Informations de profil envoyées avec succès !"; */
               } else{
                    /* header('Location: presentation_back.php?erreur=1'); */
                    echo "Erreur lors de la sauvegarde en BD";
               }
            }else{
                /* header('Location: presentation_back.php?erreur=2'); */
                echo "Erreur lors de la copie de l'image";
            }
        } else {
            /* header('Location: presentation_back.php?erreur=3'); */
            echo "Seuls les fichiers images sont permis";
        }
    }
?>