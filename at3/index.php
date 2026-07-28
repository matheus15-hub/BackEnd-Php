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
        <h4>Operaçoes  <br> 1 - Soma <br> 2 - Subtrair <br> 3 - Multiplicar <br> 4 - Dividir</h4>
        <label for="cont">Escolha a operação:</label>
        <input type="number" name="cont" id="cont" required>
        <button type="submit">FAZER CONTA</button>
        <br>

        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $cont = $_POST["cont"];
            $resultado = 0;
            switch($cont){
                case 1:
            $resultado = $num1 + $num2;
            echo "Resultado: " . $resultado;
            break;

        case 2:
            $resultado = $num1 - $num2;
            echo "Resultado: " . $resultado;
            break;

        case 3:
            $resultado = $num1 * $num2;
            echo "Resultado: " . $resultado;
            break;

        case 4:
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "Resultado: " . $resultado;
            } else {
                echo "Erro: não é possível dividir por zero.";
            }
            break;

        default:
            echo "Operação inválida.";
            }

        }
        ?>
        in
    </form>
</body>
</html>