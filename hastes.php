<?php
//tabela de precos por tamanho
$precos = [1, 5, 8, 9, 10, 17, 17, 20, 24, 30];
//tamanho da haste:
$n = 4;
echo <<<_END
    CORTE DE HASTES
    Tamanho da Haste n = $n
    Iniciando... Prog Dinamica bottom-up:
_END;

function show_array($array1){
    foreach($array1 as $k => $v){
        echo "[ $k ] = $v \n";
    }
    return 0;
}

function bottom_up($precos, $n){
    //$q = -INFINITE;
    $q = -1000;
    for($i = 0; $i < $n; ++$i){
        $aux[$i] = -1;
        $s[$i] = -1;
    }
    $aux[0] = 0;
    for($j = 1; $j <= $n; $j++){
        $q = -1;
        echo "[iteração j = $j]\n";
        echo "[ elementos memoizados ]\n";
        show_array($aux);
        for($i = 1 ; $i <= $j ; $i++){
            if ($q < ($precos[$i-1]+$aux[$j-$i])){
                $q = $precos[$i-1]+$aux[$j-$i];
                $s[$j] = $i;
            }
            $aux[$j] = $q;
        }
    }
    echo "[ Reconstruindo solução ]\n Hastes Utilizadas(i): ";
    $aux_impressao = $n;
    while($aux_impressao > 0){
        echo "$s[$aux_impressao] ";
        $aux_impressao = $aux_impressao - $s[$aux_impressao];
    }
    return $q;
}
$a = bottom_up($precos, $n);
echo "\n\n [SOLUÇÃO ENCONTRADA] \n RESULTADO (Receita) : $a";
?>