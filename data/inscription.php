<?php
$host = "localhost";
$user = "root";
$password = "root";
$bdd_name = "multi_service";

// test de connexion
$connexion = mysqli_connect($host, $user, $password, $bdd_name);
if(mysqli_connect_errno()){
    echo "Erreur de connexion à la base de donnée ".mysqli_connect_error();
    exit();
}else{
    echo "Connexion réusssi";
};

// on récupere element du formulaire
$name = $_POST['name'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
// on prépare la requete SQL
$sql = "INSERT INTO user_inscription(nom, pseudo, email, password) VALUES ('$name', '$pseudo', '$email', '$password')";

$result = mysqli_query($connexion, $sql) || die ('Echec de la requête insert');


mysqli_close($connexion);

?>