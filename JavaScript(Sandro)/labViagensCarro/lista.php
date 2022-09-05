<?php
    include "lib/conexao.php";

    $sql = "SELECT * from viagens order by id";
    $consulta = $conn->prepare($sql);
    $consulta->execute();

    foreach($consulta as $linha)
    {
        echo "Carro: ".$linha['placa']."<br>";
        echo "Motorista : ".$linha['nome']."<br>";
        echo "Local de origem: ".$linha['origem']."<br>";
        echo "local de destino: ".$linha['destino']."<br>";
        echo "Kilometragem percorrida: ".$linha['km']."<br>";
        echo "Litros de Combustível gastos: ".$linha['litros']."<br>";
        echo "Valor do Compustível atual: ".$linha['gas']."<br><br>";
        echo "Autonomia:<br>R$".$linha['gas'] * $linha['litros']." e R$".($linha['gas'] * $linha['litros']) / $linha['km']."/Km<hr>";
    }
?>