<?php
    require("conecta.php");
    extract($_POST);

    if(!isset($_POST['id_hidden'])){
        die ("Usuario não identificado");
        
    }
    else{
        $id = $_POST['id_hidden'];
    }
    
    

    $sqlUpdate = "UPDATE tb_carro SET nome_cr = '$txtNome', ano_cr = '$txtAno', preco_cr = '$txtPreco', descricaoCarro_cr = '$txtDescricao' WHERE id_cr = '$id'";
    
    mysqli_query($conexao, $sqlUpdate);
    mysqli_close($conexao);
    header("Location: ../pagina/lista.php");
