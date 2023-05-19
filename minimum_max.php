<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3/css/bootstrap.min.css">
    <title>Recherche de minimum et maximum</title>
</head>
<body>
    <h1>Recherche de minimum et maximum</h1>

    <form method="POST" action="">
        <label for="nombres">Entrez les nombres séparés par des virgules :</label>
        <input type="text" name="nombres" id="nombres" required>
        <br><br>
        <input type="submit" value="Rechercher">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombres = $_POST['nombres'];

        // Convertir la chaîne de caractères en tableau de nombres
        $nombresArray = explode(',', $nombres);

        // Supprimer les espaces vides autour de chaque nombre
        $nombresArray = array_map('trim', $nombresArray);

        // Supprimer les nombres vides
        $nombresArray = array_filter($nombresArray);

        if (count($nombresArray) > 0) {
            // Recherche du minimum et du maximum
            $minimum = min($nombresArray);
            $maximum = max($nombresArray);

            echo "<p>Ensemble de nombres : $nombres</p>";
            echo "<p>Minimum : $minimum</p>";
            echo "<p>Maximum : $maximum</p>";
        } else {
            echo "<p>Aucun nombre n'a été saisi.</p>";
        }
    }
    ?>
</body>
</html>


