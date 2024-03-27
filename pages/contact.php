<?php
$servname = "localhost";
$user = "root";
$password = "root";

// connexion au server
$connexion = mysqli_connect($servname, $user, $password);
if(!$connexion){
    die("La connexion à échoué ".mysqli_connect_error());
};

// connexion bdd
$db_name = "multi_service";
$cnx = mysqli_connect($servname, $user, $password, $db_name);
if(mysqli_connect_errno()){
    echo 'Erreur de connection à la base '.mysqli_connect_error();
    exit();
};

// on récupère les données du formulaire
@$nom = $_POST['nom'];
@$email = $_POST['email'];
@$object = $_POST['subject'];
@$messgae = $_POST['message'];

// on créer la requête SQL
$sql = "INSERT INTO user (nom, email, objet, message) VALUES ('$nom', '$email', '$object', '$messgae')";

// on verifie si la reqêute a foncionner
$result = mysqli_query($cnx, $sql);
if(!$result){
    echo "Un problème est survenue";
};

mysqli_close($cnx);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Fréderic Multi Services - Contact</title>
</head>
<body>
    <?php include "../components/header.php"?>
    <main>
        <section>
            <div class="title">
                <h1>Demande personnalisée</h1>
            </div>
            <div class="form__container">
                <div class="form__information">
                    <div class="form__info">
                        <h2>Information de contact</h2>
                        <p>Toutes les demandes seront étudiées personnelement</p>
                    </div>
                    <div class="form__information--contact">
                        <div class="information__tel">
                            <img src="../assets/icones/iconeTel.png" alt="Icône téléphone">
                            <p>...</p>
                        </div>
                        <div class="information__email">
                            <img src="../assets/icones/iconeMail.png" alt="">...
                        </div>
                        <div class="information__lieux">
                            <img src="../assets/icones/lieux.png" alt="Icône lieux">
                            <p>France</p>
                        </div>
                    </div>
                </div>
                    <form method="post">
                        <div class="form__nomEmail">
                            <div class="form__nom">
                                <label for="nom">Votre nom</label>
                                <input type="text" name="nom" id="nom" autofocus>
                            </div>
                            <div class="form__email">
                                <label for="email">Votre email</label>
                                <input type="email" name="email"    id="email">
                            </div>
                        </div>
                        <div class="form__subject">
                            <label for="subject">Sujet du message</label>
                            <input type="text" name="subject" id="subject">
                        </div>
                        <div class="form__message">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Écrivez votre message ici"></textarea>
                        </div>
                        <div class="form__submit">
                            <input type="submit" value="Envoyer mon message" id="submit">
                        </div>
                    </form>
            </div>
        </section>
    </main>
    <?php include "../components/footer.php" ?>
</body>
</html>