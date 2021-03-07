<?php
include './Includes/Header.php';
include '../www/Class/ClassConexao.php';
include '../www/Class/ClassCrud.php';
?>

<div class="Content">
    <table class="TabelaCrud">
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        <!-- Estrutura de loop -->
        <?php
        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB(
                "*", "cadastro", "", array()
        );

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
                <td><?php echo $Fetch['Nome']; ?></td>
                <td><?php echo $Fetch['Sexo']; ?></td>
                <td><?php echo $Fetch['Cidade']; ?></td>
                <td>
                    <a href="visualizar.php"><img src="Images/Visualizar.png" alt="Visualizar"></a>
                    <a href="atualizacao.php"><img src="Images/Edite.png" alt="Editar"></a>
                    <a href="delete.php"><img src="Images/Lixeira.png" alt="Deletar"></a>
                </td>
            </tr> 
        <?php }
     ?>
    </table>
</div>

<?php include './Includes/Footer.php'; ?>