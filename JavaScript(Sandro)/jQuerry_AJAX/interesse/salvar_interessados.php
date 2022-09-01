<?php
    include_once('lib/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
</body>
</html>
<h1>Cadastro de Interessados News Letter</h1>

<?php
function fValida($valores) {
    $msg = "";
    $valido = true;
    if (empty($valores['nome'])) {
        $msg = "Nome Inválido";
        $valido = false;
    } elseif (!filter_var($valores['email'], FILTER_VALIDATE_EMAIL)) {
        $msg = "e-mail Inválido";
        $valido = false;
    } elseif (!preg_match("/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/",$valores['fone'])) {
        $msg = "Fone Inválido";
        $valido = false;
    } elseif ($valores['estado']=='00') {
        $msg = "Fone Cidade";
        $valido = false;
    } elseif ($valores['cidade']=='00') {     
        $msg = "Fone Inválido";
        $valido = false;
    }   
    echo "<h3>".$msg."</h3>";
   return $valido;
}

if (isset($_POST['Gravar'])) {
    $valores = array("email"  => $_POST['Email'],
                     "nome"   => $_POST['Nome'],
                     "fone"   => $_POST['Fone'],
                     "estado" => $_POST['Estado'],
                     "cidade" => $_POST['Cidade']);
    if (fValida($valores)) {
        try {
            $sql = "INSERT into interessados(email,nome,fone,estado,cidade) 
                    values (:email,:nome,:fone,:estado,:cidade)";
            $consulta = $conn->prepare($sql);
            $consulta->execute($valores);
            echo "<h2>Dados Salvos</h2>";
            echo "e-mail: ".$valores['email']."<br>";
            echo "Nome: ".$valores['nome']."<br>";
            echo "Fone: ".$valores['fone']."<br>";
       } catch(PDOException $e) {
           echo 'ERROR: ' . $e->getMessage() . "<br>";
       }
    }
}
?>
<br>
<input type="button" value="voltar" onclick="JavaScript:history.back();">
<html>

