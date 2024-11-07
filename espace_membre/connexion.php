<?php 
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espaces_membres;charset=utf8;','root', '');
if(isset($_POST['inscrire'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        
        $recupUser = $bdd->prepare('SELECT * FROM   users WHERE pseudo=? AND mdp=?');
        $recupUser->execute(array($pseudo,$mdp));
        if($recupUser->rowCount()>0){
            $_SESSION['pseudo']=$pseudo;
            $_SESSION['mdp']=$mdp;
            $_SESSION['id']=$recupUser->fetch()['id'];

            header('location:index.php');
        }else{
            echo "Verifier bien vos information";
        }
    }else{
        echo "Velliez bien verifier"; 
    }
}
?>

<?php 
if(isset($_POST['renvoie'])){
    header('location:inscription.php');
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
        <input type="submit" name="inscrire">
        <input type="submit" name="renvoie" value="pas de compte">      
    </form>
</body>
</html>