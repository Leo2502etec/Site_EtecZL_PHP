<?php
$tituloPagina = "Etec Zona Leste - Quem Somos";
$nomeEscola = "Etec Zona Leste";
$tituloQuemSomos = "Quem Somos";
$tituloDestaques = "Nossos Destaques";
$tituloCursos = "Nossos Cursos";
$rodape = "&copy; 2026 - Etec Zona Leste";

$texto1 = "A Etec Zona Leste é uma instituição de ensino voltada à formação acadêmica e profissional, oferecendo ensino de qualidade e preparando os alunos para o mercado de trabalho.";
$texto2 = "Nosso compromisso é contribuir para o desenvolvimento dos estudantes por meio da educação, da disciplina, da inovação e da busca constante por conhecimento.";

$destaque1Titulo = "Ensino de Qualidade";
$destaque1Texto = "Compromisso com a formação técnica e acadêmica dos estudantes.";

$destaque2Titulo = "Infraestrutura";
$destaque2Texto = "Ambientes preparados para apoiar o aprendizado e o desenvolvimento profissional.";

$destaque3Titulo = "Preparação para o Futuro";
$destaque3Texto = "Formação pensada para aproximar o aluno das exigências do mercado de trabalho.";

$curso1Titulo = "Desenvolvimento de Sistemas";
$curso1Texto = "Curso técnico voltado à programação, lógica, banco de dados e criação de sistemas.";

$curso2Titulo = "Administração";
$curso2Texto = "Formação voltada à gestão, organização, planejamento e rotina administrativa.";

$curso3Titulo = "Logística";
$curso3Texto = "Curso focado em transporte, armazenagem, distribuição e controle de processos.";

$curso4Titulo = "Contabilidade";
$curso4Texto = "Formação voltada ao controle financeiro, registros contábeis e organização patrimonial.";

$curso5Titulo = "Serviço Jurídico";
$curso5Texto = "Curso relacionado a documentos, rotinas legais e apoio em atividades da área jurídica.";

$curso6Titulo = "Recursos Humanos";
$curso6Texto = "Formação voltada à gestão de pessoas, recrutamento, seleção e organização interna.";
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
                    <li><a href="quem-somos.php" class="ativo">Quem Somos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="pagina">
            <h2><?php echo $tituloQuemSomos; ?></h2>
            <p><?php echo $texto1; ?></p>

            <p><?php echo $texto2; ?></p>
        </section>

        <section class="conteudo">
            <h2><?php echo $tituloDestaques; ?></h2>
            <div class="cards">
                <div class="card">
                    <h3><?php echo $destaque1Titulo; ?></h3>
                    <p><?php echo $destaque1Texto; ?></p>
                </div>

                <div class="card">
                    <h3><?php echo $destaque2Titulo; ?></h3>
                    <p><?php echo $destaque2Texto; ?></p>
                </div>

                <div class="card">
                    <h3><?php echo $destaque3Titulo; ?></h3>
                    <p><?php echo $destaque3Texto; ?></p>
                </div>
            </div>
        </section>

        <section class="cursos">
            <h2><?php echo $tituloCursos; ?></h2>

            <div class="grade-cursos">
                <div class="curso-card">
                    <img src="imagens/imagem5.jpg" alt="Curso de Desenvolvimento de Sistemas">
                    <div class="curso-info">
                        <h3><?php echo $curso1Titulo; ?></h3>
                        <p><?php echo $curso1Texto; ?></p>
                    </div>
                </div>

                <div class="curso-card">
                    <img src="imagens/imagem6.jpg" alt="Curso de Administração">
                    <div class="curso-info">
                        <h3><?php echo $curso2Titulo; ?></h3>
                        <p><?php echo $curso2Texto; ?></p>
                    </div>
                </div>

                <div class="curso-card">
                    <img src="imagens/imagem7.jpg" alt="Curso de Logística">
                    <div class="curso-info">
                        <h3><?php echo $curso3Titulo; ?></h3>
                        <p><?php echo $curso3Texto; ?></p>
                    </div>
                </div>

                <div class="curso-card">
                    <img src="imagens/imagem8.jpg" alt="Curso de Contabilidade">
                    <div class="curso-info">
                        <h3><?php echo $curso4Titulo; ?></h3>
                        <p><?php echo $curso4Texto; ?></p>
                    </div>
                </div>

                <div class="curso-card">
                    <img src="imagens/imagem9.jpg" alt="Curso de Serviço Jurídico">
                    <div class="curso-info">
                        <h3><?php echo $curso5Titulo; ?></h3>
                        <p><?php echo $curso5Texto; ?></p>
                    </div>
                </div>

                <div class="curso-card">
                    <img src="imagens/imagem10.jpg" alt="Curso de Recursos Humanos">
                    <div class="curso-info">
                        <h3><?php echo $curso6Titulo; ?></h3>
                        <p><?php echo $curso6Texto; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p><?php echo $rodape; ?></p>
    </footer>

</body>
</html>