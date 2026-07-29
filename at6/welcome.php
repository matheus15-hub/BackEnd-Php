<?php 
$nome = $_POST["nome"];
echo "<h3>Ola $nome seja bem vindo!</h3>";
$voltar = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
?>
<button onclick="location.href='<?php echo $voltar; ?>'">Voltar</button>