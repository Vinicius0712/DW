<?php
require_once('classes/CriarCategoria.class.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicionar Categoria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
    <h2>Adicionar Nova Categoria</h2>
    <form method="post">
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" name="descricao" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
    </form>
</div>
</body>
</html>
