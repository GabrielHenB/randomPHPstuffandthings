<?php
class Manga{
    public $id, $nome, $ultimoCap, $ultimoLido;
    
    function __construct($a,$b,$c,$d){
        $this->id = $a;
        $this->nome = $b;
        $this->ultimoCap = $c;
        $this->ultimoLido = $d;
    }
    
    function salvar_manga(){
        //Transforma o objeto manga em uma entrada XML
        $XMLEquiv = <<<_H
        <manga>
            <id>$id</id>
            <nome>$nome</nome>
            <ultimoCap>$ultimoCap</ultimoCap>
            <ultimoLido>$ultimoLido</ultimoLido>
        </manga>
        _H;
        return $XMlEquiv;
    }
}

function main(){
    $manga = new Manga(0, "Name", 10, 20);
    print_r($manga);
    
    $manga->id = 1;
    $manga->nome = "Nome";
    $manga->ultimoCap = 940;
    $manga->ultimoLido = 920;
    
    print_r($manga);
}

main();
?>