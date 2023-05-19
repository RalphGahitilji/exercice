<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Calculatrice du Binaire</title>
</head>
<body>
    <div class="container align-self-center">
        <div class="row align-self-center mx-auto">
        <h2>Calculatrice Binaire</h2>
            <form method="post" action="">
                <label for="number">Entier N :</label>
                <input type="number" name="number" id="number" required>
                <input type="submit" value="Convertir">
            </form>
        </div>
   
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        $binary = decbin($number);

        echo "Le binaire de $number est : $binary";
    }
    ?>
     </div>
</body>
</html>
