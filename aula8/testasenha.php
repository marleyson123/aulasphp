<?php 
 $senha = $_POST['senha'];
 $login = $_POST['login'];

 //echo"{$senha}";//debugar
 //echo"{$login}";

  while(($senha != 123) && ($login !== "marley")){
     header('Location: login.php');

  }
   echo"Bem vindo ao login";
?>