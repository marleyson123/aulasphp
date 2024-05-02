<?php
//receber os dados do formulario e guardar na memoria
$nome = $_GET["nome"];
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$soma = $numero1 + $numero2;

echo "Seja bem vindo {$nome}";
echo "<br>Você digitou o numero: {$numero1}";
echo "<br>Você digitou o numero: {$numero2}";
echo "<br>E o resultado da soma dos numeros é: $soma";




?>