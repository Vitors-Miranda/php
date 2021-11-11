<?php

require_once 'lib/conn.php';

extract($_POST);

$dataentrega = strtotime($data."+$dias days");
$dataentrega = date('Y-m-d', $dataentrega);

$carro = explode('|',$carro);
$id_carro = $carro[0];
$marcaModelo = $carro[1];

$sqlBuscaCarro = "SELECT * FROM carros WHERE id_carro = :id_carro";
$buscaCarro = $conn->prepare($sqlBuscaCarro);
$buscaCarro->bindValue(":id_carro",$id_carro);
$buscaCarro->execute();
$carro = $buscaCarro->fetch(PDO::FETCH_OBJ);
$diaria = $carro->diaria;
$valorAluguel = $diaria * $dias;

$sqlCadastroAluguel = "INSERT INTO aluguel VALUES(0,:nome_cliente,:marca_modelo,:id_carro,:data,:data_entrega,:valor_aluguel,0)";
$aluguel = $conn->prepare($sqlCadastroAluguel);
$aluguel->bindValue(":nome_cliente",$cliente);
$aluguel->bindValue(":marca_modelo",$marcaModelo);
$aluguel->bindValue(":id_carro",$id_carro);
$aluguel->bindValue(":data",$data);
$aluguel->bindValue(":data_entrega",$dataentrega);
$aluguel->bindValue(":valor_aluguel",$valorAluguel);
$aluguel->execute();

$sqlUpdateCarro = "UPDATE carros SET disponibilidade = 0 WHERE id_carro = :id_carro";
$updateCarro = $conn->prepare($sqlUpdateCarro);
$updateCarro->bindValue(":id_carro",$id_carro);
$updateCarro->execute();
?>
<script>alert('Aluguel registrado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=cadaluguel.php">