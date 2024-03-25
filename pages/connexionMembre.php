<?php
$bdd = new PDO('mysql:host=localhost;db_name  multi_service', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['email']) AND (!empty($_POST['password']))) {
        $recupEmailPwd = $bdd->prepare("SELECT * from user_inscription WHERE email = ? AND password = ?");
        $recupEmailPwd->execute(array($_POST['email']));

        if($recupEmailPwd->rowCount() > 0){

        }else{
            echo "aucun utilisateur trouvé";
        };
    }else{
        echo "Veuillez rentrer vos informations";
    };
};
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