<?php 
//matriz - array associativo
$dados = array(
    array("nome" => "Joao", "idade" => 10),
    array("nome" => "pedro", "idade" => 15),
    array("nome" => "marcos", "idade" => 20),
    array("nome" => "maria", "idade" => 18),
);

foreach($dados as $d){
    echo"\nNome: ".$d['nome']. "idade:".$d['idade'];
}




