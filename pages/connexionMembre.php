<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=multi_service', 'root', 'root');

if(isset($_POST['valider'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $recupEmailPwd = $bdd->prepare("SELECT * FROM user_inscription WHERE email = ? AND password = ?");
        $recupEmailPwd->execute(array($_POST['email'], $_POST['password']));

        if($recupEmailPwd->rowCount() > 0){
            $user = $recupEmailPwd->fetch();

            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['id'] = $user['id'];
            // Rediriger l'utilisateur vers une autre page après la connexion
            header('Location: test.php');
            exit(); // Arrêter l'exécution du script après la redirection
        } else {
            echo "Identifiants incorrects";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="valider" name="valider">
    </form>
</body>
</html>