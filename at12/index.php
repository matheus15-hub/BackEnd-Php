<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="num1">Primeiro Valor:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Segundo Valor:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit" name="operacao" value="somar">SOMAR</button>
        <button type="submit" name="operacao" value="subtrair">SUBTRAIR</button>
        <br>
        <button type="submit" name="operacao" value="dividir">DIVIDIR</button>
        <button type="submit" name="operacao" value="multiplicar">MULTIPLICAR</button>

        <br>

        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacao = $_POST["operacao"];
            $resultado;
           
            if ($operacao == "somar") {
                $resultado = $numero1 + $numero2;
            }

            if ($operacao == "subtrair") {
                $resultado = $numero1 - $numero2;
            }

            if ($operacao == "multiplicar") {
                $resultado = $numero1 * $numero2;
            }

            if ($operacao == "dividir") {
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = "Não é possível dividir por zero.";
                }
            }

    echo "<h3>Resultado: $resultado</h3>";


        }
        ?>
        in
    </form>
</body>
</html>