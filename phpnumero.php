<?php
global $isValid; //controle do while do menu
$isValid = false;

function menu(){
    echo <<<_MENU
    |Calculadora PiiagaaPii(PHP)|
       1 - Adi��o
       2 - Subtra��o
       3 - Multiplica��o
       4 - Divis�o
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
        echo "\n Iniciando teste padr�o da calculadora: \n";
        echo " Padr�o 1 + 1 = " . soma(1,1) . " \n" .
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