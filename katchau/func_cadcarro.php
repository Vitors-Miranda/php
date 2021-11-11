<?php
require_once 'lib/conn.php';

extract($_POST);

$sql = "INSERT INTO carros VALUES(0,:marca,:modelo,:placa,:valorDiaria,1)";
$stmt = $conn->prepare($sql);
$stmt ->bindValue(":marca",$marca);
$stmt ->bindValue(":modelo",$modelo);
$stmt ->bindValue(":placa",$placa);
$stmt ->bindValue(":valorDiaria",$valorDiaria);
$stmt->execute();

?>
<script>alert('Carro cadastrado com sucesso')</script>
<meta http-equiv="refresh" content="0; url=cadcarros.php">