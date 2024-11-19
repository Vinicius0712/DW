<?php
include 'config/database.php';
session_start();

// Verifica se o usuário é administrador (nivelPermissao 2)
if (!isset($_SESSION['user_id']) || !isset($_SESSION['nivelPermissao']) || $_SESSION['nivelPermissao'] != 2) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    // Insere o novo autor no banco de dados
    $sql = "INSERT INTO Autor (nome, sobrenome) VALUES ('$nome', '$sobrenome')";
    if ($conn->query($sql) === TRUE) {
        echo "Autor adicionado com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

