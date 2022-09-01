<h1>Atualizar Produto</h1>

<?php
    if (isset($_POST['atualizar']))
    {
        $sql = "UPDATE produtos
                set nome = :nome,
                valor = :valor,
                grupo_id = :grupo
                where codigo = :codigo";
        
        $atualizar = $conn ->prepare($sql);
        $atualizar ->execute(array(
                            "nome" => $_POST['nome'],
                            "valor" => $_POST['valor'],
                            "grupo" => $_POST['grupo'],
                            "codigo" => $_GET['codigo']
        ));
        echo "Sucesso!";
    }

    $sql = "SELECT p.codigo, p.nome, p.valor, pg.descricao from produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id) where codigo = :codigo";
    $produto = $conn ->prepare($sql);
    $produto ->execute(array("codigo" => $_GET['codigo']));

    $linha = $produto ->fetch();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
    </tr>
    <tr>
        <td><?php echo $linha['codigo']; ?></td>
        <td><?php echo $linha['nome']; ?></td>
        <td><?php echo $linha['valor']; ?></td>
        <td><?php echo $linha['descricao']; ?></td>
    </tr>
</table>

<form method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nome" value="<?php echo $linha['nome']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Valor:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="valor" value="<?php echo $linha['valor']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Grupo:</span>
        <select class="form-select" name="grupo">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $grupos = $conn->prepare($sql);
            $grupos->execute();
            while ($grupo = $grupos ->fetch())
            {
                if ($grupo['id'] == $linha['grupo_id'])
                {
                    echo "<option value=\"{$grupo['id']}\" selected>{$grupo['descricao']}</option>";
                }
                echo "<option value=\"{$grupo['id']}\">{$grupo['descricao']}</option>";
            }         
        ?>
    </select>
    </div>
    <input class="btn btn-primary" type="submit" name="atualizar" value="Atualizar">
</form>