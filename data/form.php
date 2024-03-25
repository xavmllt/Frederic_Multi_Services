<?php
$servname = "localhost";
$user = "root";
$password = "root";

// connexion au server
$connexion = mysqli_connect($servname, $user, $password);
if(!$connexion){
    die("La connexion à échoué ".mysqli_connect_error());
}else{
    echo "Connexion réussi";
};

// connexion bdd
$db_name = "multi_service";
$cnx = mysqli_connect($servname, $user, $password, $db_name);
if(mysqli_connect_errno()){
    echo 'Erreur de connection à la base '.mysqli_connect_error();
    exit();
}else{
    echo "Bien connecté à la bdd";
};

// on récupère les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$object = $_POST['subject'];
$messgae = $_POST['message'];

// on créer la requête SQL
$sql = "INSERT INTO user (nom, email, objet, message) VALUES ('$nom', '$email', '$object', '$messgae')";

// on verifie si la reqêute a foncionner
$result = mysqli_query($cnx, $sql);
if($result){
    echo "Donnée bien envoyées";
};

mysqli_close($cnx);
?>