<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone" required>
    <br><br>

    <label>Data de Nascimento:</label>
    <input type="date" name="nascimento" required>
    <br><br>

    <label>Cidade:</label>
    <input type="text" name="cidade" required>
    <br><br>

    <label>Estado:</label>
    <input type="text" name="estado" required>
    <br><br>

    <label>Sexo:</label>
    <input type="radio" name="sexo" value="Masculino" required> Masculino
    <input type="radio" name="sexo" value="Feminino"> Feminino
    <br><br>

    <label>Curso:</label>
    <select name="curso">
        <option>Informática</option>
        <option>Administração</option>
        <option>Enfermagem</option>
        <option>Engenharia</option>
    </select>

    <br><br>

    <label>Observações:</label>
    <br>
    <textarea name="observacoes" rows="4" cols="30"></textarea>

    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $nascimento = $_POST["nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $curso = $_POST["curso"];
    $observacoes = $_POST["observacoes"];

    echo "<hr>";

    echo "<h2>Cartão de Cadastro</h2>";

    echo "<strong>Nome:</strong> $nome <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Telefone:</strong> $telefone <br>";
    echo "<strong>Data de Nascimento:</strong> $nascimento <br>";
    echo "<strong>Cidade:</strong> $cidade <br>";
    echo "<strong>Estado:</strong> $estado <br>";
    echo "<strong>Sexo:</strong> $sexo <br>";
    echo "<strong>Curso:</strong> $curso <br>";
    echo "<strong>Observações:</strong> $observacoes <br>";
}

?>
</body>
</html>