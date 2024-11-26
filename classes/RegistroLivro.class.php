<?php
include '../config/database.php';
session_start();

// Verifica se o usuário é administrador (nivelPermissao 2)
if (!isset($_SESSION['user_id']) || !isset($_SESSION['nivelPermissao']) || $_SESSION['nivelPermissao'] != 2) {
    header("Location: ../paginas/index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $anoPublicacao = $_POST['anoPublicacao'];
    $fotoCapa = $_POST['fotoCapa'];
    $idCategoria = $_POST['idCategoria'];
    $preco = $_POST['preco'];
    $idAutor = $_POST['idAutor'];

    $sql = "INSERT INTO Livro (titulo, anoPublicacao, fotoCapa, idCategoria, preco, idAutor) VALUES ('$titulo', '$anoPublicacao', '$fotoCapa', '$idCategoria', '$preco', '$idAutor')";
    if ($conn->query($sql) === TRUE) {
        // Armazenar a mensagem de sucesso na sessão
        $_SESSION['message'] = "Livro adicionado com sucesso!";
    } else {
        // Armazenar a mensagem de erro na sessão
        $_SESSION['message'] = "Erro: " . $conn->error;
    }
}

// Consulta para obter as categorias
$categorias = $conn->query("SELECT id, titulo FROM categorias");

// Consulta para obter os autores
$autores = $conn->query("SELECT id, nome FROM Autor");
?>
