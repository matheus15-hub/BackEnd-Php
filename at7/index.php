<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="numero1">NUMERO 1:</label>
        <input type="number" name="numero1" id="numero1" required>
        <label for="numero1">NUMERO 2:</label>
        <input type="number" name="numero2" id="numero2" required>
        <button type="submit">Resultado</button>
        </form>

        <?php 
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $soma = $numero1 + $numero2;
            $sub = $numero1 - $numero2;
            echo "<h3>Que Interresante você sabia que dar para somar esses dois numeros o resultado é $soma </h3>";
            echo "<h3>E tambem sabia que tem como fazer o inverso subtraindo eles resultado fica assim $sub </h3>";
        }
        ?>
</body>
</html>