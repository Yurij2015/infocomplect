<?php
session_start();
if ($_SESSION['admin'] != "admin") {
    header("Location: /login.php");
    exit;
}
if ($_GET['do'] == 'logout') {
    unset($_SESSION['admin']);
    session_destroy();
    header("Location: /index.php");
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/category/category.php">Категории</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products/products.php">Товары</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/customers/customers.php">Клиенты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/managers/managers.php">Менеджеры</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/orders/orders.php">Заказы</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/productsoforder/productoforders.php">Товары в заказе</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-info" href="/index.php?do=logout">Выйти</a>
        </li>
    </ul>
</nav>
<br>

