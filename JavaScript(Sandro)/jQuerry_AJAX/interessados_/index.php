<?php
include_once('lib/conexao.php');

function Lista_interessados() {
    $conn = $GLOBALS['conn'];        
    $sql = "SELECT nome,email,fone FROM interessados order by nome";
    $consulta = $conn->prepare($sql);
    try {
       $interessados = $consulta->execute();
    }
    catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }   
    echo "<table>";

    $linha = "0";
    while($r = $consulta->fetch()) {
        echo "<tr id='l".$linha."'>";
        echo "<td><input type='text' readonly id='n".$linha."' ondblclick='Altera_valor(this,\"".$r["email"]."\")' value='".$r["nome"]."'></td>";
        echo "<td><input type='text' readonly id='e".$linha."' value='".$r["email"]."'></td>";
        echo "<td><input type='text' readonly id='f".$linha."' ondblclick='Altera_valor(this,\"".$r["email"]."\")' value='".$r["fone"]."'></td>";
        printf("<td><input type='button' value='D' onclick='fExcluirInteressado(\"%s\",%u)'></td>",$r["email"],$linha);
        echo "</tr>";
        $linha = $linha+1;
    } 
    echo "</table>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/style.css">
    <title>Interessandos</title>
</head>
<body class="container">
<h1>INTERESSADOS - NewsLetter - DEVs-TI</h1>
    <div class="btn btn-light">
        <a href="cadastro_interessados.php">Cadastro</a>
    </div>     
    <br><br>
    <?php
         Lista_interessados();
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript">
   
   function Altera_valor(valor,email)
   {    
      $("#"+valor.id).removeAttr("readonly");
      $("#"+valor.id).attr("class","altera");
      let campo = valor.id.slice(0,1);
      
      $("#"+valor.id).change( function() {
        let acao = "altera_valor.php?email="+email+"&valor="+$("#"+valor.id).val()+"&campo="+campo;
        $.get(acao, function(dados, status) {
           if (status == "success") {
               $("#"+valor.id).attr("readonly");
               $("#"+valor.id).removeAttr("class");
          }
        });  
      });

      $("#"+valor.id).blur( function() { 
            $("#"+valor.id).attr("readonly");
            $("#"+valor.id).removeAttr("class");
        });

   }
   function fExcluirInteressado(email,l) {
    let acao = "excluir_interessado.php?email="+email;
    $.get(acao, function(dados, status){
        if (status == "success") {
            $("#l"+l).remove();
        }
    });
    }
</script>   
</html>