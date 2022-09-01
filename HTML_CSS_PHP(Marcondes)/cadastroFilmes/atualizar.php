<?php
    if (isset($_POST['atualizar']))
    {
        $erro = false;

        (isset($_POST['nomefilme']) && empty($_POST['nomefilme']))?$erro = false : '';
        (isset($_POST['resumofilme']) && empty($_POST['resumofilme']))?$erro = false : '';  
        (isset($_POST['anofilme']) && empty($_POST['anofilme']))?$erro = false : '';  
        (isset($_POST['imagemfilme']) && empty($_POST['imagemfilme']))?$erro = false : '';  
        (isset($_POST['complementofilme']) && empty($_POST['complementofilme']))?$erro = false : '';    

        if (!$erro)
        {
            $stmt = $conn->prepare('UPDATE filmes set nome = :nome, resumo = :resumo, ano = :ano, imagem = :imagem, complementos = :complementos where codigo = :id');
            if ($stmt->execute(array('nome' => $_POST['nomefilme'], 'resumo' => $_POST['resumofilme'], 'ano' => $_POST['anofilme'], 'imagem' => $_POST['imagemfilme'], 'complementos' => $_POST['complementosfilme'], 'id' => $_GET['id'] )))
            {
                echo '<div class="alert alert-success">Salvo com sucesso!</div>';
            }
            else
            {
                echo '<div class="alert alert-danger">Erro ao salvar!</div>';
            }
        }    
        else
        {
            echo '<div class="alert alert-warning">Informe todos os campos obrigatórios</div>';
        }  
    }
    $stmt = $conn->prepare('SELECT * FROM filmes WHERE codigo = :id');
    $stmt->execute(array('id' => $_GET['id']));
    $linha = $stmt->fetch();
?>

<form method="post">
    <div class="mb-3">
    <label for="nomefilme" class="form-label">Nome do Filme</label>
    <input type="text" class="form-control" id="nomefilme" name="nomefilme" value="<?php echo $linha['nome']; ?>" required>
    </div>

    <div class="mb-3">
    <label for="resumofilme" class="form-label">Resumo do filme</label>
    <textarea class="form-control" id="resumofilme" rows="3" name="resumofilme" required><?php echo $linha['resumo']; ?></textarea>
    </div>

    <div class="mb-3">
    <label for="anofilme" class="form-label">Ano do Filme</label>
    <input type="text" class="form-control" id="anofilme" name="anofilme" value="<?php echo $linha['ano']; ?>" required>
    </div>

    <div class="mb-3">
    <label for="imagemfilme" class="form-label">Imagem do Filme</label>
    <input type="text" class="form-control" id="imagemfilme" name="imagemfilme" value="<?php echo $linha['imagem']; ?>" required>
    </div>

    <div class="mb-3">
    <label for="complementosfilme" class="form-label">Informações complementais</label>
    <textarea class="form-control" id="complementosfilme" name="complementosfilme" rows="3" required><?php echo $linha['complementos']; ?></textarea>
    </div>

    <div class="mb-3">
    <input type="submit" name="atualizar" value="Atualizar" class="btn btn-primary">
    </div>
</form>