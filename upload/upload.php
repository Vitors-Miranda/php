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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <?php
        // $_FILES é o que carrega arquivos, $_POST só manda texto
        // move_uploaded_file($_FILES['arquivo']["tmp_name"],"img/".$_FILES
        // ['arquivo']['name']);
        // move_uploaded_file muda o arquivo carregado pra determinada pasta.
        $arquivo= $_FILES['arquivo']['name'];

        //config do upload
        $_UP['pasta'] = 'img/';
        $_UP['tamanho']= 1024*1024*1;
        $_UP['extensoes']=array('png','jpg','gif','jpeg');
        $_UP['renomear']= true;

        //Tipos de erros e upload PHP
        $_UP['erros'][0]="Não houve erros";
        $_UP['erros'][1]="O arquivo é maior que o limite do PHP";
        $_UP['erros'][2]="O arquivo é maior que o limite do formulário";
        $_UP['erros'][3]="O upload é feito parcialmente";
        $_UP['erros'][4]="Não foi feito o upload do arquivo";
        $_UP['erros'][6]="Pasta temporária ausente";
        //alguem apagou a pasta que recebe temporariamente do arquivo
        $_UP['erros'][6]="Falha ao escrever o arquivo em disco";
        //algum problema do hd
        $_UP['erros'][7]="Uma extensão do PHP interrompeu o upload";
        //extensao deu problema, não retorna qual

        // os 3 últimos erros são os piores

        if($_FILES['arquivo']['error'] != 0){
            exit("Não foi possível fazer o upload, erro: ".$_UP['erros'][$_FILES['arquivo']
            ['error']]);
        }

        $extensao= pathinfo($arquivo, PATHINFO_EXTENSION);
        
        if (array_search($extensao,$_UP['extensoes'])=== false) {
    ?>
        <div class="alert alert-danger">Tipo de arquivo inválido</div>
        <a href="index.php" class="btn btn-danger">Voltar</a>
    <?php
        }else if ($_FILES['arquivo']['size']> $_UP['tamanho']) {
    ?>
        <div class="alert alert-danger">Arquivo maior que o limite do 1MB</div>
        <a href="index.php" class="btn btn-danger">Voltar</a>
    <?php
        }else{
            if($_UP['renomear']===true){
                echo $nome_final= time().".".$extensao;
            }else{
                $nome_final= $arquivo;
            }

            if (move_uploaded_file($_FILES['arquivo']["tmp_name"],$_UP['pasta'].$nome_final)) {
            ?>
            <img src="<?php echo $_UP['pasta'].$nome_final?>" alt="<?php echo $_UP['pasta'].$nome_final?>" class="rounded mx-auto mb-3 d-block img-fluid">
            <a href="index.php" class="btn btn-danger">Voltar</a>
            <?php
            }else{
                //erros não previstos
            }
        }
    ?>

    </div>
</body>

</html>