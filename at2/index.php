<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="dinheiro">Ensira um quanto dinheiro você tem: R$</label>
        <input type="number" name="dinheiro" id="dinheiro" required>
        <button type="submit">Enviar</button> 
    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $dinheiro = $_POST["dinheiro"];
        if($dinheiro >= 10000000){
            echo "Caramba você é o elon Musk";
        }elseif($dinheiro < 10000000 && $dinheiro >= 1000000){
            echo "Cararamba você é o Ricão mesmo";
        }elseif($dinheiro < 1000000 && $dinheiro >= 100000){
          echo "Cararamba você é o Ricão mesmo";
        }
         elseif($dinheiro < 100000 && $dinheiro >= 10000){
          echo "Que tal você é o Riquinho mesmo";
        }
         elseif($dinheiro < 10000 && $dinheiro >= 1000){
          echo "Ta bom você é Classe Medio";
        }
        else{
            echo "Você é pobre";
        }
    }
    
    ?>
</body>
</html>