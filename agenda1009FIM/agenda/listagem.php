<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="container">

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require_once 'lib/conn.php';
                    $sql = "SELECT * FROM tbl_contatos";
                    $stmt = $conn->query($sql);
                    //var_dump($stmt);
                    $contatos = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach($contatos as $contato){
                ?>
                    <tr>
                        <td><?= $contato->id_contato ?></td>
                        <td><?= $contato->nome ?></td>
                        <td><?= $contato->email ?></td>
                        <td><!-- link dinamico -->
                            <a href="https://api.whatsapp.com/send?phone=55<?= $contato->ddd.$contato->celular ?>" class="btn btn-outline-success" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <?= $contato->ddd.$contato->celular ?>
                            </a>
                           
                        </td>
                        <td>
                        <a href="editar.php?id=<?= $contato->id_contato ?>" class="btn btn-outline-warning">
                          <i class="fas fa-user-edit"></i> 

                        </td>
                        <td>
                            <!--Button excluir-->
                         <!-- a.btn.btn-outline-danger -->
                            <a href="excluir.php?id=<?= $contato->id_contato ?>" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>    

                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>