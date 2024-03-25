<?php
$bdd = new PDO('mysql:host=localhost;db_name  multi_service', 'root', 'root');
if(isset($_POST['valider'])){
    if(!empty($_POST['email']) AND (!empty($_POST['password']))) {
        $recupEmailPwd = $bdd->prepare("SELECT * from user_inscription WHERE email = ? AND password = ?");
        $recupEmailPwd->execute(array($_POST['email'] AND ($_POST['password'])));

        if($recupEmailPwd->rowCount() > 0){

        }else{
            echo "aucun utilisateur trouvé";
        };
    };
};
?>