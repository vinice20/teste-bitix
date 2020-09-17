<?php


$MatrizA = array(1,2,3,4,5);
$$MatrizEmOrdem = sort($MatrizA);
$qntd_itens = count($Matriz);
$soma = 0;

foreach($MatrizA as $Value1){
foreach($MatrizEmOrdem  as $value2){
    if($value1 == $value2){
        $soma = $soma + 1;
        return 1;
    }else{
        return 0;
    }
}
}

if($soma == $qntd_itens){
echo "matriz crescente";
}else{
echo "matrizz nao esta crescente";   
}

print_r($array); 



?>

  
