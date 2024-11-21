<?php
require_once('classes/Carrinho.class.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrinho</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container">
    <h2>Seu Carrinho</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $totalPrice = 0;
            foreach ($cartItems as $item): 
                $totalPrice += $item['preco'];
            ?>
            <tr>
                <td><?= $item['titulo'] ?></td>
                <td>$<?= number_format($item['preco'], 2) ?></td>
                <td>1</td>
                <td>$<?= number_format($item['preco'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3>Total: $<?= number_format($totalPrice, 2) ?></h3>
    <a href="purchase.php" class="btn btn-primary">Proceed to Checkout</a>
</div>
</body>
</html>