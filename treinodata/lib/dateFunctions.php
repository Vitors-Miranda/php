<?php
    function dateValidation($dtnascimento){
        $arrayDate= explode('-', $dtnascimento);
        if(checkdate($arrayDate[1], $arrayDate[2], $arrayDate[0])){
            return true;
        }
    }

    function calcularIdade($dtnascimento){
        $data_nasc= explode('-', $dtnascimento);
        $data= date('Y-m-d');
        $data_atual= explode('-',$data);

        $anos= $data_atual[0]- $data_nasc[0];

        if($data_nasc[1]>$data_atual[1]){
            $anos--;
        }
        
        if ($data_nasc[1]==$data_atual[1]) {
            if($data_nasc[2]>$data_atual[2]){
                $anos--;
            }
        }
        return $anos;
    }
?>