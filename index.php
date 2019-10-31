<?php $title = "Главная"; ?>
<?php require_once("header.php") ?>
<div class="container">
    <div class="jumbotron">
        <h1>InfoComplect</h1>
        <p>Информационная система Интернет-магазина</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="images/store.png" class="rounded img-fluid" alt="Cinque Terre">
            <p class="lead" style="padding-top: 20px;">
                Система для учета продаж
            </p>
            <p>
                Учет операций и объектов процессов продаж
            </p>
            <div class="list-group" style="padding-bottom: 30px;">
                <a href="/category/category.php" class="list-group-item list-group-item-action">Категории</a>
                <a href="/category/category.php" class="list-group-item list-group-item-action">Товары</a>
                <a href="#" class="list-group-item list-group-item-action">Клиенты</a>
                <a href="#" class="list-group-item list-group-item-action">Менеджеры</a>
                <a href="#" class="list-group-item list-group-item-action">Заказы</a>
                <a href="#" class="list-group-item list-group-item-action">Товары в заказе</a>
            </div>
        </div>
    </div>
</div>

<?php require_once("footer.php") ?>


