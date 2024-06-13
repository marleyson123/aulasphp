<?php 
  function calcularImc($peso, $altura){
    $imc = $peso/(pow($altura,2));
    return $imc;
  }
  function situacao($imc){
    if($imc < 16){
        echo"O imc e: {$imc}. Situação baixo peso";
    }else if($imc >=16 && $imc <= 25){
        echo"O imc e: {$imc}. Situação Saudavel";
    }else if($imc > 25 && $imc < 29){
        echo"O imc e: {$imc}. Situação Sobrepeso";
    }else{
        echo"O imc e: {$imc}. Situação Obeso";
    }
  }
  //debugar
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  
  $imc = calcularImc($peso,$altura);
  situacao($imc);




