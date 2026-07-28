<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $idade = $_POST["idade"];
    if($idade >= 18){
        echo "Você é maior de idade";
    }else{
        echo "Você é menor de idade";
    }
}
    ?>
    
</body>
</html>

