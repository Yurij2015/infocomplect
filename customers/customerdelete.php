<?php
require_once("../DB.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $customers = R::load('customers', $id);
        R::trash($customers);
        header('location: customers.php?msg=Запись удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить. Есть связанные данные!";
    echo "<br><a href = 'customers.php'>Назад</a>";
}
