<?php
require_once('classes/RegistroLivro.class.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
    <h2>Adicionar Novo Livro</h2>
    <form method="post">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="anoPublicacao">Ano de Publicação:</label>
            <input type="number" class="form-control" name="anoPublicacao">
        </div>
        <div class="form-group">
            <label for="fotoCapa">URL da Foto de Capa:</label>
            <input type="text" class="form-control" name="fotoCapa">
        </div>
        <div class="form-group">
            <label for="idCategoria">Categoria:</label>
            <select class="form-control" name="idCategoria" required>
                <option value="">Selecione uma Categoria</option>
                <?php while($categoria = $categorias->fetch_assoc()): ?>
                    <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['titulo']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idAutor">Autor:</label>
            <select class="form-control" name="idAutor" required>
                <option value="">Selecione um Autor</option>
                <?php while($autor = $autores->fetch_assoc()): ?>
                    <option value="<?php echo $autor['id']; ?>"><?php echo $autor['nome']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" name="preco" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
    </form>
    <br>
    <!-- Botões para redirecionar para a página de criação de categoria e autor -->
    <a href="Categoria.php" class="btn btn-secondary">Criar Nova Categoria</a>
    <a href="CriarAutor.php" class="btn btn-secondary">Criar Novo Autor</a>
</div>
</body>
</html>