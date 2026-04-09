<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $curso = $_POST["curso"];
    $periodo = $_POST["periodo"];
    $dataNascimento = $_POST["data_nascimento"];
    $mensagemAluno = $_POST["mensagem"];

    $mensagem = "Cadastro realizado com sucesso!<br>";
    $mensagem .= "Nome: " . $nome . "<br>";
    $mensagem .= "E-mail: " . $email . "<br>";
    $mensagem .= "Telefone: " . $telefone . "<br>";
    $mensagem .= "Curso de interesse: " . $curso . "<br>";
    $mensagem .= "Período: " . $periodo . "<br>";
    $mensagem .= "Data de nascimento: " . $dataNascimento . "<br>";
    $mensagem .= "Mensagem: " . $mensagemAluno;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec Zona Leste - Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="topo">
            <h1>Etec Zona Leste</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="formulario.php" class="ativo">Formulário</a></li>
                    <li><a href="quem-somos.php">Quem Somos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="pagina">
            <h2>Formulário de Cadastro</h2>

            <form action="formulario.php" method="POST" class="formulario">
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" required>

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>

                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(11) 99999-9999" required>

                <label for="curso">Curso de interesse:</label>
                <select name="curso" id="curso" required>
                    <option value="">Selecione um curso</option>
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                    <option value="Administração">Administração</option>
                    <option value="Logística">Logística</option>
                    <option value="Contabilidade">Contabilidade</option>
                    <option value="Serviço Jurídico">Serviço Jurídico</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                </select>

                <label for="periodo">Período:</label>
                <select name="periodo" id="periodo" required>
                    <option value="">Selecione o período</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>

                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="5" placeholder="Escreva uma mensagem ou dúvida"></textarea>

                <button type="submit">Enviar</button>
            </form>

            <div class="resultado">
                <?php
                echo $mensagem;
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 - Etec Zona Leste</p>
    </footer>

</body>
</html>