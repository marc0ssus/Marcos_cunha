<?php
    include "lib/conexao.php";

    $sql = "INSERT into viagens(placa,nome,origem,destino,km,litros,gas) 
            values (:placa , :nome , :origem , :destino , :km, :litros , :gas)";       
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("placa"  => $_POST['placa'],
                            "nome"   => $_POST['nome'],
                            "origem"   => $_POST['origem'],
                            "destino" => $_POST['destino'],
                            "km" => $_POST['km'],
                            "litros" => $_POST['litros'],
                            "gas" => $_POST['gas'],
    ));
?>