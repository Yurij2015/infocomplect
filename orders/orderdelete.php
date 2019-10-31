<?php
require_once("../DB.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $orders = R::load('orders', $id);
        R::trash($orders);
        header('location: orders.php?msg=Запись удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить. Есть связанные данные!";
    echo "<br><a href = 'orders.php'>Назад</a>";
}
