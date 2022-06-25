<?php
    require("conecta.php");
    $sqlSelect = "SELECT * FROM tb_carro";
    $respostas = msqli_query($conexao, $sqlSelect);
?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Preço</th>
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
                <td>
                    <div>
                        <form action="delete.php" method="post" id="excluir">
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