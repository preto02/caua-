<?php
// index.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>art-alex</title>
    <link rel="stylesheet" href="idex.css">
</head>
<body>
    
    <header>
        <h1>art-alex</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <div class="perfil">
                <img class="foto-perfil" src="imagens/fotodeperfil.jpeg" alt="foto de perfil">
            </div>
            <div class="textos">
                <h2>Bem-vindo à art-alex</h2>
                <p>Olá pessoal! Meu nome é Stephany, sou artista digital. Estou aqui colocando meus projetos novos e minhas comissions.</p>
            </div>
        </section>

        <!-- <section id="contato">
            <h2>Contato</h2>
            <p>Fale com Alex pelo <a href="https://instagram.com/usuario_da_alex" target="_blank">Instagram</a>.</p>
        </section> -->
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> art-alex. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
