<?php 
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut ="admin123";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut ){
            $_SESSION['mdp'] = $mdp_saisi;
            header('location:index.php');
        } else{
            echo "misy diso.."; 
        }

    } else{
        echo "fenohy le champ tompoko";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <form action="" method="POST" align="center">
        <h1>Connexion</h1><br>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" autocomplete="off"><br>
        <label for="mdp">Mot de passe</label>
        <input type="text" name="mdp" autocomplete="off"><br>
        <input type="submit" name="valider">  
    </form>
</body>
</html>