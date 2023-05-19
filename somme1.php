<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3/css/bootstrap.min.css">
    <title>Calcul de la somme</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nombre">Entier N :</label>
        <input type="nombre" name="nombre" id="nombre" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $somme =0;
        $digits = str_split($nombre);

        foreach ($digits as $digit) {
            $somme += $digit;
        }

        echo "La somme des chiffres de $nombre est : $somme";
    }
    ?>
</body>
</html>
