<?php
function calcularMedia($nota1, $nota2, $nota3){
   $media = (($nota1 + $nota2 + $nota3)/3);
   return $media;  
}
function situacao($media){
    if($media >= 7){
        echo"Sua media e: {$media}. Aprovado<br>";
    }else if( $media >= 4 && $media < 7){
        echo"Sua media e: {$media}.Recuperação<br>";
    }else{
        echo"Sua media e: {$media}.Reprovado<br>";
    }
}
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

echo"{$nome}:<br>";
//$media=number_format formatar o numero
$media = calcularMedia($nota1, $nota2, $nota3);
situacao($media);



?>





