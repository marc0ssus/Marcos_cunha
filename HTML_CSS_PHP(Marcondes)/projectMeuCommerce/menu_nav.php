<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Meu Commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a class="btn btn-success" href="?pagina=carrinho">
                Carrinho

                <?php if (isset($_SESSION["carrinho"])) {
                  echo "(" . count($_SESSION["carrinho"]) . ")";
                } ?>
            </a>
            <?php if (isset($_SESSION["autenticado"])) { ?>
            <a class="btn btn-info" href="?pagina=pedidos">Meus pedidos</a>
            <?php } ?>
        </div>
    </div>
</nav>