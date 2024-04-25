<?php
//declaraçao de variaveis
$nome = "Marleyson";
$numero = "10";
$salario = "1.500";
$numeros = array (1,2,"3", "hello");
$teste = true;
//impressao com intercolocaçao
echo "O nome é: {$nome} e o salario é: {$salario}<br>";
//impressao com concatenação
echo "\nNome:" .$nome. " e o salario: .$salario<br>";
//impressao com var_dump()
var_dump($teste);


print_r($numeros);


?>