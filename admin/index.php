<?php

require '../config.php';
include '../src/artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <div>
            <?php foreach ($artigos as $artigo): ?>
            <div id="artigo-admin">
                <p><?= $artigo['titulo']; ?></p>
                <nav>
                    <a class="botao" href="editar-artigo.php?id=<?php echo $artigo['id']; ?>">Editar</a>
                    <a class="botao" href="excluir-artigo.php?id=<?php echo $artigo['id']; ?>">Excluir</a>
                </nav>
            </div>
            <?php endforeach; ?>
        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>