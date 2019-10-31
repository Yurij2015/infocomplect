<?php
require_once("../DB.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $productsoforders = R::load('productsoforders', $id);
        R::trash($productsoforders);
        header('location: productoforders.php?msg=Запись удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить. Есть связанные данные!";
    echo "<br><a href = 'productoforders.php'>Назад</a>";
}
