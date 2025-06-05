<?php
// index.php
$titulo = "art-alex";
$ano = date("Y");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="idex.css">
</head>
<body>
    <header>
        <h1><?= $titulo ?></h1>
        <nav>
          <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </nav>
    </header>

    <section id="projetos">
        <h2>Projetos</h2>
        <p>Projetos novos, ideias em andamento e colaborações criativas.</p>
    </section>

    <footer>
        <p>&copy; <?= $ano ?> <?= $titulo ?>. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
