<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "cadastro_hub_saude";

    if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
       // echo "Conectado";
    } else
        echo "Erro de conexão com o servidor";

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }
?>