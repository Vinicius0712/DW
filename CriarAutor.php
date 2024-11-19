<?php
require_once('classes/CriarAutor.class.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Criar Novo Autor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
    <h2>Adicionar Novo Autor</h2>
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Autor</button>
    </form>
</div>
</body>
</html>