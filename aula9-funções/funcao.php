<?php 
//definicao de função
 function soma($n1, $n2){
   $res = $n1 + $n2;
   echo "A soma é {$res}";
 }
 function sub($n1, $n2){
    $res = $n1 - $n2;
    return $res;
 }
 function calcular($n1, $n2){
    
    soma ($n1, $n2);
    $resSub = sub($n1, $n2);
    echo"\n Resultado: {$resSub}"; 
 }
//chamada da função/invocação
soma(100,500);

sub(110,2);

$retornoFuncao = sub(10,8);

echo" Retorno: {$retornoFuncao}";
calcular(45,10);







