<?php
// index.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art-allex</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <img src="imagens/fotodeperfilheader.png" class="navbar-brand">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="sobre">sobre</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="projetos">projetos</a>
                </li>
                <li class="nav-item">
                <a class="nav-contato" href="contato">comission</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>


    <main>
        <?php
            $pagina = $_GET["param"] ?? "home";

            $pagina = "pages/{$pagina}.php";
            include 'array.php';
                if (file_exists($pagina)){
                    include $pagina;
                } else {
                    include "pages/erro.php";
                }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> art-alex. Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
