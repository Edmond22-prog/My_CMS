<?php
    require ("connexion.php");
    session_start();
    $user = $_SESSION['login'];

    if(isset($_POST['intitule']) && isset($_POST['article'])){
        $intitule   = $_POST['intitule'];
        $lien       = $_POST['article'];
    }

    $requete = "INSERT INTO article VALUES ('".$intitule."', '".$lien."', '".$user."')";
    $resultat = mysqli_query($db, $requete);

    if($resultat){
        header('Location: articles_back.php?val=true');
    } else {
        echo "Erreur lors de la sauvegarde en BD";
    }
?>