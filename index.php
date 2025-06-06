<?php
// index.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>art-alex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>art-alex</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
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

</body>
</html>
