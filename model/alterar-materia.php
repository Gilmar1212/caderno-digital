<!DOCTYPE html>
<html lang="pt-br">
    <?php include("../head.php")?>
    <link rel="stylesheet" href="../styles/style.css">
<head>
<a href="../view/topicos-materia.php" title="Voltar" class="voltar"><i class="fa-solid fa-arrow-left"></i></a>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
<?php $id = filter_input(INPUT_GET, "id"); ?>
<h1>Altere sua materia:</h1>
<form method="POST" action="model-alterar-materia.php?id=<?=$id?>">
    <input type="text" name="assunto" placeholder="TITULO DA ANOTAÇÃO EX: ARTE É LEGAL..." required>
    <input type="submit" value="Alterar">
    </form>
</body>
</html>

