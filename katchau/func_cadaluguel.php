<?php
    require_once 'lib/conn.php';
    extract($_POST);

    $dataentrega = strtotime($data."+$dias days");
    $dataentrega = date('Y-m-d', $dataentrega);
    //criar data de entrega com base nos dias alugados
?>