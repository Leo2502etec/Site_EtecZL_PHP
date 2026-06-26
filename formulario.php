<?php
$tituloPagina = "Etec Zona Leste - Formulário";
$nomeEscola = "Etec Zona Leste";
$tituloFormulario = "Formulário de Cadastro";
$rodape = "&copy; 2026 - Etec Zona Leste";

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
                    <li><a href="formulario.php" class="ativo">Formulário</a></li>
                    <li><a href="quem-somos.php">Quem Somos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="pagina">
            <h2><?php echo $tituloFormulario; ?></h2>

            <form action="formulario.php" method="POST" class="formulario" id="formularioCadastro" novalidate>
                <label for="nome">Nome completo:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">
                <div class="mensagem-erro" id="erro-nome"></div>

                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
                <div class="mensagem-erro" id="erro-email"></div>

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" placeholder="(11) 99999-9999">
                <div class="mensagem-erro" id="erro-telefone"></div>

                <label for="curso">Curso de interesse:</label>
                <select name="curso" id="curso">
                    <option value="">Selecione um curso</option>
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                    <option value="Administração">Administração</option>
                    <option value="Logística">Logística</option>
                    <option value="Contabilidade">Contabilidade</option>
                    <option value="Serviço Jurídico">Serviço Jurídico</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                </select>
                <div class="mensagem-erro" id="erro-curso"></div>

                <label for="periodo">Período:</label>
                <select name="periodo" id="periodo">
                    <option value="">Selecione o período</option>
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
                <div class="mensagem-erro" id="erro-periodo"></div>

                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento">
                <div class="mensagem-erro" id="erro-data_nascimento"></div>

                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="5" placeholder="Escreva uma mensagem ou dúvida"></textarea>
                <div class="mensagem-erro" id="erro-mensagem"></div>

                <div class="botoes-formulario">
                    <button type="submit">Enviar</button>
                    <button type="button" onclick="limparFormulario()">Limpar</button>
                </div>
            </form>

            <div class="resultado">
                <?php echo $mensagem; ?>
            </div>
        </section>
    </main>

    <footer>
        <p><?php echo $rodape; ?></p>
    </footer>

    <button onclick="voltarAoTopo()" id="botaoTopo">Topo</button>

    <script>
        const formulario = document.getElementById("formularioCadastro");

        const nome = document.getElementById("nome");
        const email = document.getElementById("email");
        const telefone = document.getElementById("telefone");
        const curso = document.getElementById("curso");
        const periodo = document.getElementById("periodo");
        const dataNascimento = document.getElementById("data_nascimento");
        const mensagem = document.getElementById("mensagem");

        function mostrarErro(campo, idErro, texto) {
            campo.classList.add("campo-invalido");
            document.getElementById(idErro).textContent = texto;
        }

        function limparErro(campo, idErro) {
            campo.classList.remove("campo-invalido");
            document.getElementById(idErro).textContent = "";
        }

        function validarNome() {
            if (nome.value.trim() === "") {
                mostrarErro(nome, "erro-nome", "Preencha o nome completo.");
                return false;
            }
            limparErro(nome, "erro-nome");
            return true;
        }

        function validarEmail() {
            const valorEmail = email.value.trim();

            if (valorEmail === "") {
                mostrarErro(email, "erro-email", "Coloque um e-mail válido.");
                return false;
            }

            if (!valorEmail.includes("@") || !valorEmail.includes(".")) {
                mostrarErro(email, "erro-email", "Coloque um e-mail válido.");
                return false;
            }

            limparErro(email, "erro-email");
            return true;
        }

        function validarTelefone() {
            const valorTelefone = telefone.value.replace(/\D/g, "");

            if (valorTelefone === "") {
                mostrarErro(telefone, "erro-telefone", "Coloque um telefone válido.");
                return false;
            }

            if (valorTelefone.length < 10 || valorTelefone.length > 11) {
                mostrarErro(telefone, "erro-telefone", "Coloque um telefone válido.");
                return false;
            }

            limparErro(telefone, "erro-telefone");
            return true;
        }

        function validarCurso() {
            if (curso.value === "") {
                mostrarErro(curso, "erro-curso", "Selecione um curso.");
                return false;
            }
            limparErro(curso, "erro-curso");
            return true;
        }

        function validarPeriodo() {
            if (periodo.value === "") {
                mostrarErro(periodo, "erro-periodo", "Selecione um período.");
                return false;
            }
            limparErro(periodo, "erro-periodo");
            return true;
        }

        function validarDataNascimento() {
            if (dataNascimento.value === "") {
                mostrarErro(dataNascimento, "erro-data_nascimento", "Selecione uma data de nascimento.");
                return false;
            }
            limparErro(dataNascimento, "erro-data_nascimento");
            return true;
        }

        function validarMensagem() {
            if (mensagem.value.trim() === "") {
                mostrarErro(mensagem, "erro-mensagem", "Escreva uma mensagem.");
                return false;
            }
            limparErro(mensagem, "erro-mensagem");
            return true;
        }

        nome.addEventListener("input", validarNome);
        email.addEventListener("input", validarEmail);
        telefone.addEventListener("input", validarTelefone);
        curso.addEventListener("change", validarCurso);
        periodo.addEventListener("change", validarPeriodo);
        dataNascimento.addEventListener("change", validarDataNascimento);
        mensagem.addEventListener("input", validarMensagem);

        formulario.addEventListener("submit", function(evento) {
            const nomeValido = validarNome();
            const emailValido = validarEmail();
            const telefoneValido = validarTelefone();
            const cursoValido = validarCurso();
            const periodoValido = validarPeriodo();
            const dataValida = validarDataNascimento();
            const mensagemValida = validarMensagem();

            if (!nomeValido || !emailValido || !telefoneValido || !cursoValido || !periodoValido || !dataValida || !mensagemValida) {
                evento.preventDefault();
            }
        });

        function limparFormulario() {
            formulario.reset();

            limparErro(nome, "erro-nome");
            limparErro(email, "erro-email");
            limparErro(telefone, "erro-telefone");
            limparErro(curso, "erro-curso");
            limparErro(periodo, "erro-periodo");
            limparErro(dataNascimento, "erro-data_nascimento");
            limparErro(mensagem, "erro-mensagem");
        }

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
