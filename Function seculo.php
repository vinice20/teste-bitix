<?php 
$Ano = readline("digite o ano:  ");

function CalculeOseculo($Ano){
   $seculo =  Math.floor($Ano/100) + (($Ano%100 ? 1 : $Ano) % 10 ? 1 : 0);
}
   echo $seculo;

?>