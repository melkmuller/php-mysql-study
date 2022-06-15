<?php

require 'config.php';
include 'src/artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron"> 
            <h1 class="display-4" >Meu Blog</h1>
        </div>
        <div class="list-group">
            <div class="list-group-item active">
                <h4>Artigos</h4>
            </div>  
            <?php foreach($artigos as $artigo): ?>
                <a href="artigo.php?id=<?php echo $artigo['id']; ?>" class="list-group-item">
                    <div>    
                        <h2>
                            <div>
                                <?php echo $artigo['titulo']; ?>
                            </div>
                        </h2>
                    </div>
                    <p>
                        <?php echo nl2br($artigo['conteudo']); ?>
                    </p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>