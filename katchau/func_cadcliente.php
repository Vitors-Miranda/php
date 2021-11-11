<?php
require_once 'lib/conn.php';

extract($_POST);

$sql = "INSERT INTO clientes VALUES(0,:nome,:endereco,:email)";
$stmt = $conn->prepare($sql);
$stmt ->bindValue(":nome",$nome);
$stmt ->bindValue(":endereco",$endereco);
$stmt ->bindValue(":email",$email);
$stmt->execute();

?>
<script>alert('Cliente cadastrado com sucesso')</script>
<meta http-equiv="refresh" content="0; url=cadcliente.php">