<?php
$tituloPagina = "Etec Zona Leste - Contato";
$nomeEscola = "Etec Zona Leste";
$tituloContato = "Contato";
$endereco = "Av. Águia de Haia, São Paulo - SP";
$telefone = "(11) 2045-4000";
$email = "eteczl211@cps.sp.gov.br";
$rodape = "&copy; 2026 - Etec Zona Leste";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="topo">
            <h1><?php echo $nomeEscola; ?></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="formulario.php">Formulário</a></li>
                    <li><a href="quem-somos.php">Quem Somos</a></li>
                    <li><a href="contato.php" class="ativo">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="pagina">
            <h2><?php echo $tituloContato; ?></h2>
            <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
            <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
            <p><strong>E-mail:</strong> <?php echo $email; ?></p>

            <div class="imagem-contato">
                <img src="imagens/imagem11.jpg" alt="Imagem de contato">
            </div>
        </section>
    </main>

    <footer>
        <p><?php echo $rodape; ?></p>
    </footer>

    <button onclick="voltarAoTopo()" id="botaoTopo">Topo</button>

    <script>
        window.onscroll = function () {
            mostrarBotaoTopo();
        };

        function mostrarBotaoTopo() {
            let botao = document.getElementById("botaoTopo");

            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                botao.style.display = "block";
            } else {
                botao.style.display = "none";
            }
        }

        function voltarAoTopo() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

</body>
</html>