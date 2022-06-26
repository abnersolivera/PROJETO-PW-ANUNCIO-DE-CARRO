<?php
    //require("conecta.php");
    define("servidor", "127.0.0.1");
    define("usuario", "root");
    define("senha", "");
    define("banco", "carro");

    $conexao = mysqli_connect(servidor,usuario,senha,banco);

    
    if(isset($_POST['id_hidden']))
        $id = $_POST['id_hidden'];
        $sqlDelete = "DELETE FROM tb_carro WHERE id_cr = $id";

        $resposta = mysqli_query($conexao,$sqlDelete);
        header("Location: ../pagina/lista.php");