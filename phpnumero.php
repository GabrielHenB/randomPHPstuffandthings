<?php
global $isValid; //controle do while do menu
$isValid = false;

function menu(){
    echo <<<_MENU
    |Calculadora PiiagaaPii(PHP)|
       1 - Adição
       2 - Subtração
       3 - Multiplicação
       4 - Divisão
       5 - Modulo
       6 - Matrix
    _MENU;
    
    $escolha = 100;
    //io
    $isValid = true; //controle do while do menu
    if($escolha < 5){
        
    }
    else if($escolha == 5){
        
    }
    else if($escolha == 6){
        
    }
    else{
        $isValid = false;
        echo "\n Iniciando teste padrão da calculadora: \n";
        echo " Padrão 1 + 1 = " . soma(1,1) . " \n" .
            " 1 - 1 = " . subtrai(1,1) . " \n" .
            " 2 x 2 = " . multiplica(2,2) . " \n" .
            " 2 / 2 = " . divide(2,2) . " \n" .
            " modulo -2 " . modulo(-2) . " \n";
    }
}
function soma($a, $b){
    return $a+$b;
}
function subtrai($a, $b){
    return $a-$b;
}
function multiplica($a, $b){
    return $a*$b;
}
function divide($a, $b){
    return $a/$b;
}
function modulo($a){
    return abs($a);
}

//while(!$isValid) menu();
menu();
    
?>