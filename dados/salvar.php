<?php
    require("conecta.php");

    extract($_POST);    
    $fileFoto = $_FILES['fileFoto'];

    //Pasta de Destino da foto
    $pasta = "../arquivos/";

    //Nome da foto
    $nomeDaFoto = $fileFoto['name'];

    //Alterando o nome do arquivo para um nome unico
    $novoNomeDaFoto = uniqid();

    //Pegando somente a extensão do arquivo
    $extensao = strtolower(pathinfo($nomeDaFoto, PATHINFO_EXTENSION));

    $caminho = $pasta . $novoNomeDaFoto . "." . $extensao;

    if($extensao != "jpg" && $extensao != "png"){
        die("Tipo de arquivo não aceito!!");
        //Movendo a foto para a pasta de destino
    }

    $movendoFoto = move_uploaded_file($fileFoto['tmp_name'], $caminho);

    $sqlInsert = "INSERT INTO tb_carro(nome_cr, ano_cr, preco_cr, descricaoCarro_cr, fotoNome_cr, caminhoFoto_cr)VALUES('$txtNome','$txtAno', '$txtPreco','$txtDescricao','$nomeDaFoto','$caminho')";

        $resposta = mysqli_query($conexao,$sqlInsert);

        if($resposta){
            mysqli_close($conexao);
            header("Location: ../pagina/lista.php");
        }
        else{
            echo mysqli_connect_error();
        }