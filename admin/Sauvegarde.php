<?php
    session_start();    // Initialise la session de donnée
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['email']))
    {
        // Connexion à la base de données
        require("connexion.php");
        
        // Récupération des données entrées dans le formulaire
        $nom        = $_POST['nom'];
        $prenom     = $_POST['prenom'];
        $login      = $_POST['login'];
        $mdp        = $_POST['mdp'];
        $email      = $_POST['email'];


        $requete = "INSERT INTO utilisateur (Login, Nom, Prenom, Mdp, Email) VALUES ('".$login."', '".$nom."', '".$prenom."', PASSWORD('".$mdp."'), '".$email."')";
        $reponse = mysqli_query($db,$requete);

        if ($reponse){
            $_SESSION['login'] = $login;
            header('Location: presentation_back.php');
        }
        else
        {
            header('Location: Enregistrement.php?erreur=1');
        }
    }
    mysqli_close($db); // fermer la connexion
?>