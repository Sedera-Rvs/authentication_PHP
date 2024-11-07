<?php 
session_start();
if(!$_SESSION['mdp']){
    header('location:connexion.php');
}
// echo ""$_SESSION['pseudo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body align="center">
    
    <?php
        echo "<h1>Welcome " .$_SESSION['pseudo']."</h1>";
    ?>
    <a href="deconnexion.php">
        <button>Se deconnecter</button>
    </a>
</body>
</html>