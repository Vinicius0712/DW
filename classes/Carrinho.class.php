<?php
include 'config/database.php';
session_start();

// Initialize cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add a book to the cart
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];
    $_SESSION['cart'][] = $bookId;
    header("Location: ../Carrinho.php");
    exit();
}

// Retrieve details of books in the cart
$cartItems = [];
if (!empty($_SESSION['cart'])) {
    $ids = implode(",", $_SESSION['cart']);
    $sql = "SELECT * FROM Livro WHERE id IN ($ids)";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }
}
?>

