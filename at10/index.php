<?php 
    $pessoa =[
    "nome" => "Mathues",
    "idade" => 26,
    "cidade" => "Guarapuava",
    "tchola" => "não"
    ];

    

    foreach($pessoa as $atributos => $dados){
        echo "$atributos: $dados <br>";
    }

?>