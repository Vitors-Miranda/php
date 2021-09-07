<?php
function validaDados($dados){
    $erro= false;
    if (!isset($dados)|| empty($dados)) {
        $erro="Dados vazios";
    }
    foreach ($dados as $indice => $valor) {
        $valor=trim(strip_tags($valor));
        if(empty($valor)){
            $erro .="Campo $indice em branco <br>";
        }
        return $erro;
    }
    // trim () é o que tira os espaços das extremidades, strip_tags () tira as tags
}
function recuperaDados($dados){
    $arr= array();
    foreach ($dados as $valor) {
        $valor=trim(strip_tags($valor));
        array_push($arr,$valor);
    }
    return $arr;
}
?>