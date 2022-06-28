<?php
    require("conecta.php");

    $sqlSelect = "SELECT * FROM tb_carro";
    $respostas = mysqli_query($conexao, $sqlSelect);
?>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Foto</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php while($linha = mysqli_fetch_assoc($respostas)) { ?>
            <tr>
                <td><?php echo $linha['id_cr']?></td>
                <td><?php echo $linha['nome_cr']?></td>
                <td><?php echo $linha['ano_cr']?></td>
                <td><?php echo $linha['preco_cr']?></td>
                <td><?php echo $linha['descricaoCarro_cr']?></td>
                <td><img height="50" src="<?php echo $linha['caminhoFoto_cr']?>" alt=""></td>
                <td>
                    <div>
                        <form action="../pagina/editarDados.php" method="post">
                            <input type="hidden" name="id_hidden" value="<?php echo $linha['id_cr']?>"/>
                            <button type="submit" class="btn btn-outline-light text-dark">
                                <i class="fa fa-pencil"></i>
                            </button> 
                        </form>

                        <form action="../dados/delete.php" method="post" id="excluir">
                            <input type="hidden" name="id_hidden" value="<?php echo $linha['id_cr']?>" />
                            <button type="submit" class="btn btn-outline-light text-dark">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>