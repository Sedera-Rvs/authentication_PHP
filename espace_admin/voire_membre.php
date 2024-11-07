<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espaces_membres;','root','');
if(!$_SESSION['mdp']){
    header('location:connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichier membres</title>
</head>
<body>
    <?php
        $recupMembre = $bdd->query('SELECT * FROM admins');
        while($users = $recupMembre->fetch()){
            ?>

            <p><?= $users['pseudo']?><a href="bannir.php?=<?= $users['id']; ?>" 
            style="color:red; text-decoration:none;" >X</a></p>
            
            <?php
        }
    ?>
</body>
</html>