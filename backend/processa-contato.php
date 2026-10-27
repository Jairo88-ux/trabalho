<?php
date_default_timezone_set("America/Sao_Paulo");

date_default_timezone_set("America/Sao_Paulo");

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$assunto = $_POST["assunto"] ?? "";
$mensagem = $_POST["mensagem"] ?? "";

$limite = 500;
$hoje = date("d/m/Y");
$hora = date("H:i");
$tamanho = strlen($mensagem);
$sobra = $limite - $tamanho;
$carimbo = "Recebida em " . $hoje . " às " . $hora . ".";
$nomeSeguro = htmlspecialchars($nome);
$emailSeguro = htmlspecialchars($email);
$assuntoSeguro = htmlspecialchars($assunto);
$mensagemSegura = htmlspecialchars($mensagem);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem recebida — Fulano de Tal</title>
    <link rel="stylesheet" href="../frontend/css/estilo.css">
</head>

<body>
    <header>
        <h1>Jairo de Oliveira</h1>
        <p>Estudante de Engenharia de Software</p>
    </header>
    <main>
        <section id="resposta">
            <h2>Obrigado, <?php echo $nomeSeguro; ?>!</h2>

            <p class="aviso"><?php echo $carimbo; ?></p>

            <p>Vou responder no e-mail <strong><?php echo $emailSeguro; ?></strong>.</p>

            <p>Assunto: <?php echo $assuntoSeguro; ?></p>

            <p>A sua mensagem tem <?php echo $tamanho; ?> caracteres

                — sobraram <?php echo $sobra; ?> dos <?php echo $limite; ?>.</p>

            <blockquote><?php echo $mensagemSegura; ?></blockquote>

            <p><a href="../frontend/pagina.html#contato">← Voltar para a página</a></p>
        </section>
    </main>
    <footer>
        <p>Fulano de Tal &middot; 2026 &middot; ARA0062 &middot; Newton Paiva</p>
    </footer>
</body>

</html>