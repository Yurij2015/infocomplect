<?php
require_once("../DB.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = R::load('categories', $id);
    R::trash($category);
    header('location: category.php?msg=Запись удалена!');
}