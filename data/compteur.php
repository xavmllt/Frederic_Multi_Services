<?php

// Chemin vers le fichier compteur
$compteur_file = "compteur.txt";

// Vérifier si le fichier existe
if (file_exists($compteur_file)) {
    // Ouvrir le fichier en lecture
    if ($id_file = fopen($compteur_file, "r+")) {
        flock($id_file, LOCK_EX); // Verrouillage exclusif du fichier

        // Lire le contenu du fichier
        $nb = fread($id_file, filesize($compteur_file));
        $nb = intval($nb); // Convertir en entier

        // Incrémenter le compteur
        $nb++;

        // Rembobiner le fichier au début pour écrire la nouvelle valeur
        rewind($id_file);

        // Écrire la nouvelle valeur du compteur dans le fichier
        fwrite($id_file, $nb);

        fclose($id_file); // Fermer le fichier

        // Envoyer le compteur au serveur Discord
        $webhook_url = "https://discord.com/api/webhooks/1221704050848829440/a2BNmxh14J1ah45n-OSXklYMSyL1SfH0O2HZEI2ro1Pdo4PDANbcbqCK_lQitykxQIUV";
        $data = array(
            'content' => "Le compteur est maintenant à : " . $nb
        );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json",
                'method'  => 'POST',
                'content' => json_encode($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($webhook_url, false, $context);

        if ($result === FALSE) {
            // Gestion des erreurs si l'envoi échoue
            echo "Erreur lors de l'envoi du compteur au serveur Discord";
        }
    } else {
        echo "Fichier introuvable";
    }
} else {
    $nb = 1; // Initialiser le compteur à 1 s'il n'existe pas encore
    // Créer le fichier et écrire la valeur initiale du compteur
    file_put_contents($compteur_file, $nb);
}

?>
