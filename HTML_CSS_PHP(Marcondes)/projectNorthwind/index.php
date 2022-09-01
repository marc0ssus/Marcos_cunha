<?php
    session_start();

    if (isset($_GET['pagina']))
    {
        if ($_GET['pagina'] == 'logout')
        {
            session_destroy();
            session_start();
            header("Location: ?pagina=listagem_p");
        }
    }

    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include_once('lib/autenticar.php');

    if (isset($_SESSION['autenticado']))
    {
        if (isset($_GET['pagina']))
        {
            $sql = "SELECT * from paginas where id = :id";
            $consulta = $conn->prepare($sql);
            $consulta->execute(array("id" => $_GET['pagina']));
            $linha = $consulta->fetch();
            
            if ($consulta->rowCount() > 0)
            {
                include "menu.php";
                include $linha['src'];
            }
            else
            {
                include "404.php";
            }
        }
        else
        {
            include "home.php";
        }
    }
    else
    {
        include "login.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="normalize.css" type="stylesheet">
    <title>Northwind Project</title>
</head>
<body>
    <!--
    <div class="container">
        <?php
        /*
            include "menu.php";

            if (!isset($_GET['pagina']))
            {
                include('home.php');
            } */
        ?>
    <div>
    <?php
    /*
    //produtos//
    //listar produtos
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'p_lista')
    {
        include('produtos/listagem_p.php');
    }

    //atualizar produtos
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'p_update')
    {
        include('produtos/update_p.php');
    }

    //deletar produtos
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'p_delete')
    {
        include('produtos/delete_p.php');
    }

    //cadastrar produtos
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'p_cadastro')
    {
        include('produtos/cadastro_p.php');
    }
    //fornecedores//
    //listar fornecedores
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'f_lista')
    {
        include('fornecedores/listagem_f.php');
    }

    //atualizar fornecedores
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'f_update')
    {
        include('fornecedores/update_f.php');
    }

    //deletar fornecedores
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'f_delete')
    {
        include('fornecedores/delete_f.php');
    }

    //cadastrar fornecedores
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'f_cadastro')
    {
        include('fornecedores/cadastro_f.php');
    }
    //clientes//
    //listar clientes
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'c_lista')
    {
        include('clientes/listagem_c.php');
    }

    //atualizar clientes
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'c_update')
    {
        include('clientes/update_c.php');
    }

    //deletar clientes
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'c_delete')
    {
        include('clientes/delete_c.php');
    }

    //cadastrar clientes
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'c_cadastro')
    {
        include('clientes/cadastro_c.php');
    }
    //funcionarios//
    //listar funcionarios
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'fu_lista')
    {
        include('funcionarios/listagem_fu.php');
    }

    //atualizar funcionarios
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'fu_update')
    {
        include('funcionarios/update_fu.php');
    }

    //deletar funcionarios
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'fu_delete')
    {
        include('funcionarios/delete_fu.php');
    }

    //cadastrar funcionarios
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'fu_cadastro')
    {
        include('funcionarios/cadastro_fu.php');
    } */
    ?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>