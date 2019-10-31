<?php
require_once("../DB.php");
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $managers = R::load('managers', $id);
        R::trash($managers);
        header('location: managers.php?msg=Запись удалена!');
    }
} catch (exception $e) {
    echo "Запись нельзя удалить. Есть связанные данные!";
    echo "<br><a href = 'managers.php'>Назад</a>";
}
