<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php
    date_default_timezone_set("America/Sao_Paulo");
    $nome = '';
    $email = '';
    $telefone = '';
    $setor = '';
    $texto = '';
    $erro = false;

    if (isset($_POST['salvar'])) {
        if (empty($_POST['nome'])) {
            $erro = true;
            echo "O nome não foi informado!<br>";
        }
        if (empty($_POST['email'])) {
            $erro = true;
            echo "O e-mail não foi informado!<br>";
        }
        if (empty($_POST['telefone'])) {
            $erro = true;
            echo "O telefone não foi informado!<br>";
        }
        if (empty($_POST['setor'])) {
            $erro = true;
            echo "O setor não foi informado!<br>";
        }
        if (empty($_POST['texto'])) {
            $erro = true;
            echo "O texto não foi informado!<br>";
        }

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $setor = $_POST["setor"];
        $texto = $_POST["texto"];

        if (!$erro) {
            echo "Sucesso, os valores foram salvos!<br>O seu contato foi enviado as ".date("H:i")." horas. Um retorno da nossa parte pode ser esperado em até 2 dias úteis.";
            $nome = '';
            $email = '';
            $telefone = '';
            $setor = '';
            $texto = '';
        }
    }
?>
<form method="POST">
Nome:
<input type="text" name="nome" value="<?php echo $nome; ?>"><br>
E-Mail:
<input type="email" name="email" value="<?php echo $email; ?>"><br>
Telefone:
<input type="text" name="telefone" value="<?php echo $telefone; ?>"><br>
Setor:
<input type="text" name="setor" value="<?php echo $setor; ?>"><br>
Texto:
<br>
<textarea name="texto" cols="30" rows="10" value="<?php echo $setor; ?>"></textarea><br>
<input type="submit" name="salvar" value="Salvar">
</form>
</body>
</html>