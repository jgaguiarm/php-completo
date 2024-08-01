<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/execicio.css">
   
    <title>Exercicio</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>

    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include('teste/teste.php')
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
            
        </div>
        
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y');?>

    </footer>
</body>
</html>