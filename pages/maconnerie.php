<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/electricite.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <script src="../js/maconnerie.js" type="module"></script>
    <title>Frederic Multi-Services - Maçonnerie</title>
</head>
<body>
    <?php include "../composants/navbar.php"?>
    <main>
        <div class="main__title">
            <h1>Réalisations maçonnerie</h1>
            <p>Quelques photos de mes travaux</p>
        </div>
        <div id="slider">
                <div id="numeroSlide">1</div>
                <img src="../assets/maconnerie/cloture.jpg" alt="Clôture" id="slide">
                <div id="precedent">&lt;</div>
                <div id="suivant">&gt;</div>
        </div>
    </main>
    <?php include "../composants/footer.php" ?>
</body>
</html>