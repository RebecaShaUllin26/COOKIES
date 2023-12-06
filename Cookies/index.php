<?php
include 'Manipulação.php';

$usuarioAtual = getUsuarioCookie();

$usuarioLogado = ($usuarioAtual !== null);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Cookies</title>
    <script src="https://cdn.lordicon.com/lordicon-1.3.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid bg">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jogos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Episodios
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="Pesquisar" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="centralitems">
            <div class="overlay">
                <div class="content">

                    <form method="post" action="index.php">
                        <label for="usuario">Usuário:</label>
                        <input type="text" id="usuario" name="usuario" value="<?= $usuarioAtual ?>">
                        <?php if ($usuarioLogado) : ?>
                            <button type="submit" name="definirCookie">Editar Cookie</button>
                        <?php else : ?>
                            <button type="submit" name="definirCookie">Definir Cookie</button>
                        <?php endif; ?>
                    </form>

                    <?php if ($usuarioLogado) : ?>
                        <p>Bem-vindo de volta, <?= $usuarioAtual ?>!</p>
                    <?php else : ?>
                        <p>Bem-vindo pela primeira vez!</p>
                    <?php endif; ?>

                    <form method="post" action="index.php">
                        <?php if ($usuarioLogado) : ?>
                            <button type="submit" name="excluirCookie">
                                <lord-icon src="https://cdn.lordicon.com/hjbrplwk.json" trigger="hover" colors="primary:#646e78,secondary:#848484,tertiary:#ebe6ef,quaternary:#3a3347" style="width: 1.5rem;height:1.5rem"></lord-icon>
                            </button>
                        <?php endif; ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>