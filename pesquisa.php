<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Pesquisa</title>
</head>

<body>

    <?php
    if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    } else {
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = "SELECT * FROM pacientes WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Profissão</th>
                            <th scope="col">Raça</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">N° SUS</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $id_paciente = $linha['id_paciente'];
                            $nome = $linha['nome'];
                            $profissao = $linha['profissao'];
                            $raca = $linha['raca'];
                            $data_nascimento = $linha['data_nascimento'];
                            $data_nascimento = mostra_data($data_nascimento);
                            $sexo = $linha['sexo'];
                            $sus = $linha['sus'];
                            $cpf = $linha['cpf'];
                            $senha = $linha['senha'];

                            echo "<tr>
                                        <th scope='row'>$nome</th>
                                        <td>$profissao</td>
                                        <td>$raca</td>
                                        <td>$data_nascimento</td>
                                        <td>$sexo</td>
                                        <td>$sus</td>
                                        <td>$cpf</td>
                                        <td>$senha</td>
                                        <td><a href='cadastro_edit.php?id=$id_paciente' class='btn btn-success'>Editar</a>
                                            <a href='#' class='btn btn-danger'>Excluir</a>
                                        </td>

                                      </tr>";
                        }

                        ?>

                    </tbody>
                </table>

                <a href="index.php" class="btn btn-dark">Voltar para o início</a>
            </div>
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