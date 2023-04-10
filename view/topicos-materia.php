<?php
$id = filter_input(INPUT_GET, "id");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <script><?php include("../js/fontawesome.min.js") ?></script>
    <title>Assunto das matérias</title>
</head>
<body>  
    <a href="../index.php" title="Voltar" class="voltar"><i class="fa-solid fa-arrow-left"></i></a>  
    <h1></h1>
    <form method="POST" action="../model/cria-anotacoes.php?id=<?=$id?>">
        <input type="text" name="assunto-materia" placeholder="ASSUNTO DA MATÉRIA EX: ARTE É LEGAL..." required>
        <textarea name="anotacoes" id="anotacoes" cols="120" rows="20" value="anotacoes" placeholder="DIGITE O CORPO DO ASSUNTO AQUI!" required></textarea>
        <input type="submit">
    </form>
    <h2>Acesse as suas anotações abaixo:</h2>
    <div class="anotacoes--content"></div>
</body>
<script type="module" src="../view/view-materia-construct.js"></script>
</html>
