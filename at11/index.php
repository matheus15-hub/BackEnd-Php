<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="peso">PESO:</label>
        <input type="number" name="peso" id="name" required>
        <label for="altura">ALTURA:</label>
        <input type="number" name="altura" step="0.01" min="1" max="2.5" required>
        <button type="submit">Calcular IMC</button>
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura * $altura);
    echo "<h3>Seu IMC é :". number_format($imc,2)."</h3>";
    }
    ?>
</body>
</html>