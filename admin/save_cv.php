<?php
    require ("connexion.php");
    session_start();
    $user = $_SESSION['login'];

    if(!empty($_FILES)){
        $fichier_nom = $_FILES['cv']['name'];
        $fichier_extension = strrchr($fichier_nom, ".");  // Recupere la chaine de caractere apres le . sur le file_name
        
        $file_repertoire = $_FILES['cv']['tmp_name'];
        $repertoire_dest = '../cv/'.$fichier_nom;

        $extension_autorisees = array('.pdf', '.PDF');

        if(in_array($fichier_extension, $extension_autorisees)){
            if(move_uploaded_file($file_repertoire, $repertoire_dest)){ // Copie le fichier dans le dossier images
                $requete = "INSERT INTO cv VALUES ('".$repertoire_dest."', '".$user."')";
                $reponse = mysqli_query($db, $requete);
                if($reponse){
                    header('Location: cv_back.php?val=true');
                } else{
                    echo "Erreur lors de la sauvegarde en BD";
                }
            }else{
                echo "Erreur lors de la copie du document";
            }
        } else {
            echo "Seuls les fichiers PDF sont permis";
        }
    }
?>