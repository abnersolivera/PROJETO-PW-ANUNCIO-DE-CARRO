<?php
    require("conecta.php");

    extract($_POST);

    $sqlInsert = "INSERT INTO tb_carro(nome_cr, ano_cr, preco_cr)VALUES('$txtNome','$txtAno', '$txtPreco')";
        
    $resposta = mysqli_query($conexao,$sqlInsert);

    if($resposta){
        mysqli_close($conexao);
        header("Location: ../pagina/lista.php");
        echo "<script>function msgCadastro(){ swal({title: 'Cadastro',text:'Cadastro realizado com sucesso!',icon: 'success',button: 'OK',});}</script>";      
    }
    else{
        echo mysqli_connect_error();
        
    }