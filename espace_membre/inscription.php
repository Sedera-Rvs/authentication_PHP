<?php 
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espaces_membres;charset=utf8;','root', '');
if(isset($_POST['inscrire'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM   users WHERE pseudo=? AND mdp=?');
        $recupUser->execute(array($pseudo,$mdp));
        if($recupUser->rowCount()>0){
            $_SESSION['pseudo']=$pseudo;
            $_SESSION['mdp']=$mdp;
            $_SESSION['id']=$recupUser->fetch()['id'];
        }

        echo $_SESSION['id'];
        echo "Verifier bien vos information"; 
    }
}
?>

<?php 
if(isset($_POST['connecter'])){
    header('location:connexion.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <form action="" method="POST" align="center">
        <h1>Inscription</h1><br>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" autocomplete="off"><br>
        <label for="mdp">Mot de passe</label>
        <input type="text" name="mdp" autocomplete="off"><br>
        <input type="submit" name="inscrire" value="ok"> 
        <input type="submit"  name="connecter" value="connecter">    
    </form>
</body>
</html>