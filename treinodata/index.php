<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <!-- cabeçalho -->
    <header>
        <nav class="nav navbar-dark bg-success">
            <div class="container-fluid">
                <a href="index.php" class="nav navbar-brand">Home</a>
            </div>
        </nav>
    </header>
    <!-- corpo -->
    <main class="container">
        <form action="resultado.php" method="post" class="row row-colts-lg-auto g-3 align-items-center my-3">

            <div class="col-6">
                <label for="dtnascimento" class="form-label">
                    Data de nascimento:
                </label>

                <input type="date" name="dtnascimento" id="dtnascimento" class="form-control" required>
                </input>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>