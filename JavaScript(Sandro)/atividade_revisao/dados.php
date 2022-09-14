<?php
function Valida($valores) {
    $msg = "";
    $valido = true;

    if (empty($valores['nome'])) {
        $msg = "Nome Inválido";
        $valido = false;
    }elseif (empty($valores['salario'])) {
        $msg = "Salário Inválido";
        $valido = false;
    }elseif (empty($valores['endereco'])) {
        $msg = "Endereço Inválido";
        $valido = false;
    }
    echo "<h3>".$msg."</h3>";
   return $valido;
};

if(isset($_POST['salvar']))
{
    $valores = array("nome" => $_POST['nome'],
                    "salario" => $_POST['salario'],
                    "endereco" => $_POST['endereco']);

    if(Valida($valores))
    {
        echo "<br><h2>Dados Salvos!!!</h2><br>";
        echo "Nome: ".$valores['nome']."<br>";
        echo "Salário: ".$valores['salario']."<br>";
        echo "Endereço: ".$valores['endereco']."<br>";
        echo "Salários mínimos aproximados: ".$valores['salario'] / 1212;
    }
}