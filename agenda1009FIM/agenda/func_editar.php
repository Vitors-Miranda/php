<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="3; url=listagem.php">
  <title>Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9dabb0ed4f.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <i class="far fa-address-book"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listagem.php">Listagem</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container my-5">
    <?php

      require_once 'lib/conn.php';

      extract($_POST);

      $arrayCelular = explode(" ",$celular);
      $ddd = $arrayCelular[0];
      $celular = $arrayCelular[1];

      $sql = "UPDATE tbl_contatos SET nome = :nome, email = :email, ddd = :ddd, celular = :celular WHERE id_contato = :id";
      $stmt = $conn->prepare($sql);// $stmt -> statement | prepare -> evitar SQL Injection | : -> alias
      $stmt->bindParam(':nome',$nome);
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':ddd',$ddd);
      $stmt->bindParam(':celular',$celular);
      $stmt->bindParam(':id',$id);
      $stmt->execute();
    ?>
    <div class="alert alert-success">
      <i class="far fa-check-circle"></i> Contato atualizado com sucesso!
    </div>
  </div>
</body>

</html>