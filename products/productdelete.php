<?php
require_once("../DB.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $products = R::load('products', $id);
        R::trash($products);
        header('location: products.php?msg=Запись удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить. Есть связанные данные!";
    echo "<br><a href = 'products.php'>Назад</a>";
}
