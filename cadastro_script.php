<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
                include "conexao.php";

                $nome = $_POST['nome'];
                $profissao = $_POST['profissao'];
                $raca = $_POST['raca'];
                $data_nascimento = $_POST['data_nascimento'];
                $sexo = $_POST['sexo'];
                $sus = $_POST['sus'];
                $cpf = $_POST['cpf'];
                $senha = $_POST['senha'];

                $sql = "INSERT INTO `pacientes`(`nome`, `profissao`, `raca`, `data_nascimento`, `sexo`, `sus`, `cpf`, `senha`) 
                VALUES ('$nome','$profissao','$raca','$data_nascimento','$sexo','$sus','$cpf','$senha')";
            
                if (mysqli_query($conn, $sql)) {
                    mensagem("$nome cadastrado com sucesso!", 'success');
                } else 
                    mensagem("$nome NÂO cadastrado(a)", 'danger');
            
            ?>

            <a href="index.php" class="btn btn-primary">Voltar</a>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>