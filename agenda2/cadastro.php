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
    <div class="container my-5">
        <form action="func_cadastrar.php" method="POST" class="form-inline">
            <div class="row mb-3">
                <label for="nome" class="col-auto col-form-label">Nome: </label>
                <div class="col-sm-10">
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-auto col-form-label">E-mail: </label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="celular" class="col-auto col-form-label">Celular: </label>
                <div class="col-sm-10">
                    <input type="tel" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" name="celular" id="celular" class="form-control" placeholder="Formato: 99 99999-9999">
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-outline-primary rounded-pill">Cadastrar</button>
            <button reset="submit" class="btn btn-outline-primary rounded-pill">Limpar</button>
        </form>
    </div>
</body>

</html>