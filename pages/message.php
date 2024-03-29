<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=multi_service', 'root', 'root');
if(!$_SESSION['pseudo']){
    header('Location: connexionMembre.php');
}
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare("SELECT * FROM user_inscription WHERE id = ?");
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
        if(isset($_POST['envoyer'])){
            $message = htmlspecialchars($_POST['message']);
            $insererMessage = $bdd->prepare("INSERT INTO messages(message, id_destinataire, id_auteur) VALUES (?, ?, ?)");
            $insererMessage->execute(array($message, $getid, $_SESSION['id']));
        }
    }else{
        echo "Aucun utlisateur trouvé";
    }   
}else{
    echo "Aucun identifiant trouvé";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message privé</title>
</head>
<body>
<form action="" method="post">
    <textarea name="message"></textarea>
    <br><br>
    <input type="submit" name="envoyer">
</form>


    <section id="message">
        <?php
        $recupMessages = $bdd->prepare('SELECT * FROM message WHERE id_auteur = ? AND id_destinataire = ?');
        $recupMessages->execute(array($_SESSION['id'], $getid));
        while($message = $recupMessages->fetch()){
            ?>
            <p><?php echo $message ?></p>
            <?php
        }
        ?>


    </section>
</body>
</html>