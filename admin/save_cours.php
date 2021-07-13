<?php
    require ("connexion.php");
    session_start();
    $user = $_SESSION['login'];

    if(isset($_POST['intitule']) && isset($_POST['description'])){
        $intitule       = $_POST['intitule'];
        $description    = $_POST['description'];
    }

    if(!empty($_FILES)){
        $fichier_nom = $_FILES['cours']['name'];
        $fichier_extension = strrchr($fichier_nom, ".");  // Recupere la chaine de caractere apres le . sur le file_name
        
        $file_repertoire = $_FILES['cours']['tmp_name'];
        $repertoire_dest = '../documents/'.$fichier_nom;

        $extension_autorisees = array('.pdf', '.PDF');

        if(in_array($fichier_extension, $extension_autorisees)){
            if(move_uploaded_file($file_repertoire, $repertoire_dest)){ // Copie le fichier dans le dossier images
                $requete = "INSERT INTO cours VALUES ('".$intitule."', '".$description."', '".$repertoire_dest."', '".$user."')";
                $reponse = mysqli_query($db, $requete);
                if($reponse){
                    header('Location: cours_back.php?val=true');
                } else{
                    /* header('Location : cours_back.php?erreur=1'); */
                    echo "Erreur lors de la sauvegarde en BD";
                }
            }else{
                /* header('Location : cours_back.php?erreur=2'); */
                echo "Erreur lors de la copie du document";
            }
        } else {
            /* header('Location : cours_back.php?erreur=3'); */
            echo "Seuls les fichiers PDF sont permis";
        }
    }
?>