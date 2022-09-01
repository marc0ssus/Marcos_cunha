<?php
  $sql = "SELECT * from paginas order by ordem";
  $consulta = $conn->prepare($sql);
  $resultado = $consulta->execute();
?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="imgs/northwind_img.png" width="225px" height="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
          while ($linha_menu = $consulta->fetch())
          {
            echo "<li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"?pagina={$linha_menu['id']}\">{$linha_menu['label']}</a>
                  </li>";
          }
        ?>
        <!--
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=p_lista">Listar Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=p_cadastro">Cadastrar Produtos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=f_lista">Listar Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=f_cadastro">Cadastrar Fornecedores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=c_lista">Listar Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=c_cadastro">Cadastrar Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=fu_lista">Listar Funcionários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=fu_cadastro">Cadastrar Funcionários</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pagina=logout">Sair</a>
        </li>
    </div>
  </div>
</nav>