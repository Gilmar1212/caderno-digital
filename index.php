<!DOCTYPE html>
<html lang="pt-br">
    <?php include("head.php");
    ?>
<body>
    <?php include("topo.php")?>
    <h1>Caderno Digital</h1>
    <form action="model/cria-materia.php" enctype="multipart/form-data" method="POST">
    <input type="text" name="materias" placeholder="DIGITE AQUI A SUA MATÉRIA, EX: ARTES, QUIMICA..." required>
    <input type="submit" placeholder="Enviar">
    </form>
    <h2>Matérias</h2>
    <h3>Clique abaixo e acesse a sua matéria, dentro dela possui todas as suas anotações.</h3>
    <div class="materias"></div>
</body>
<script src="view/carrega-materias.js" type="module" ></script>
</html>
