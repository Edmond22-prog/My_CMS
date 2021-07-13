<?php
session_start();    // initialise la session de donnée
if(isset($_POST['login']) && isset($_POST['mdp']))
{
    // connexion à la base de données
   require("connexion.php");
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
   $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['login'])); 
   $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
    
   if($username !== "" && $password !== "")
   {
      $requete = "SELECT count(*) FROM utilisateur where login = '".$username."' and mdp = PASSWORD('".$password."') ";
      $exec_requete = mysqli_query($db,$requete);
      $reponse      = mysqli_fetch_array($exec_requete);
      $count = $reponse['count(*)'];
      if($count!=0) // nom d'utilisateur et mot de passe correctes
      {
         $_SESSION['login'] = $username;
         header('Location: presentation_back.php');
      }
      else
      {
         header('Location: Login.php?erreur=1'); // utilisateur ou mot de passe incorrect
      }
   }
   else
   {
      header('Location: Login.php?erreur=2'); // utilisateur ou mot de passe vide
   }
}
else
{
   header('Location: Login.php');
}
mysqli_close($db); // fermer la connexion
?>