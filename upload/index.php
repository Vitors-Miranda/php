<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Upload de arquivos</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navBar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navBar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container my-3">
        <h1 class="display-5">Carregar a foto</h1>
        <hr class="my-4">
        <form method="POST" action="upload.php" class="p-5" enctype="multipart/form-data">
        <!-- enctype muda o tipo de arquivo a ser enviado-->
            <div class="mb-3">
                <label for="arquivo" class="form-label">Arquivo: </label>
                <input class="form-control" type="file" id="arquivo" name="arquivo">
                        <!-- se adicionar [] no arquivo e colocar multiple pode carregar mais de 1 arquivo -->
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>