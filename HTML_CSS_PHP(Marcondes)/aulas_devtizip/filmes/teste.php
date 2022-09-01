<?php
    if (isset($_GET['listar1'])) {
        $stmt = $conn->prepare('SELECT * FROM pessoas WHERE codigo = :codigo');
        $stmt->execute(array('codigo' => $_GET['listar1']));

        while($row = $stmt->fetch()) {
            print_r($row);
        }
    }
?>