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
};

// Vérifier si tous les champs sont remplis
if (!empty($_POST['name']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Vérifier si l'email existe déjà dans la base de données
    $check_email_query = "SELECT COUNT(*) AS count FROM user_inscription WHERE email = '$email'";
    $result_check_email = mysqli_query($connexion, $check_email_query);
    $row = mysqli_fetch_assoc($result_check_email);
    $email_count = $row['count'];
    
    if ($email_count > 0) {
        echo "L'email '$email' existe déjà dans la base de données. Veuillez en choisir un autre.";
    } else {
        // Insertion des données dans la base de données
        $sql = "INSERT INTO user_inscription(nom, pseudo, email, password) VALUES ('$name', '$pseudo', '$email', '$password')";
        
        // Exécution de la requête SQL
        $result = mysqli_query($connexion, $sql);
        
        // Vérifier si l'insertion a réussi
        if($result) {
            echo "Enregistrement réussi !";
        } else {
            echo "Erreur lors de l'enregistrement : " . mysqli_error($connexion);
        }
    }
} else {
    echo "Veuillez renseigner tous les champs";
}

mysqli_close($connexion);
?>

