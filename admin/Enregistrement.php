<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container" class="main">
            <!-- zone de connexion -->
            
            <form action="Sauvegarde.php" method="POST">
                <h1>Enregistrement</h1>
                
                <label>Nom </label>
                <input type="text" placeholder="Entrer votre nom" name="nom" required>

                <label>Prénom </label>
                <input type="text" placeholder="Entrer votre prénom" name="prenom" required>

                <label>Login </label>
                <input type="text" placeholder="Entrer votre login de connexion" name="login" required>

                <label>Mot de passe </label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <!-- <label>Confirmer votre mot de passe </label>
                <input type="password" name="mdp_confirmation" id="confirmation" required>
                <p align="center" style="color: red;" id="erreur"></p> -->
                
                <label>Email </label>
                <input type="email" placeholder="Entrer votre email" name="email">

                <input type="submit" id='submit' value="S'INSCIRE" >
                <input type="reset" value='ANNULER' >
                
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1)
                        echo "<p style='color:red'>Problème lors de l'enregistrement</p>";
                }
                ?>
            </form>
            <script src="tp.js"></script>
        </div>
    </body>
</html>