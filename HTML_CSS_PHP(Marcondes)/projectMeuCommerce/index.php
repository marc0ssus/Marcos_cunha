<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<?php
session_start();

if (isset($_GET["pagina"]) && $_GET["pagina"] == "logout") {
  session_destroy();
  session_start();
}

include_once "lib/conexao.php";
include_once "lib/sql.php";
include_once "lib/autenticar.php";

if (isset($_POST["limpar_carrinho"])) {
  unset($_SESSION["carrinho"]);
}
if (isset($_POST["adicionar_carrinho"])) {
  $_SESSION["carrinho"][] = $_GET["id"];
}
if (isset($_POST["remover_carrinho"])) {
  unset($_SESSION["carrinho"][$_POST["produto"]]);
}

include "home.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>