<?php
if ($_POST) {
    $count = trim(htmlspecialchars($_POST['count']));
    $product_idproduct = $_POST['product_idproduct'];
    $orders_idorder = $_POST['orders_idorder'];
    require_once("../DB.php");
    $productsoforders = R::dispense('productsoforders');
    $productsoforders->count = $count;
    $productsoforders->product_idproduct = $product_idproduct;
    $productsoforders->orders_idorder = $orders_idorder;
    R::store($productsoforders);
    header('location: productoforders.php?msg=Запись успешно добавлена!');
}
?>
<?php $title = "Добавить товары в заказ"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="orders_idorder">Номер заказа</label>
                        <select type="text" class="form-control" name="orders_idorder" id="orders_idorder">
                            <?php
                            require_once("../DB.php");
                            $orders = R::getAll('SELECT * FROM orders');
                            foreach ($orders as $order) { ?>
                                <option value="<?php echo $order['id']; ?>">
                                    <?php echo $order['id']; ?>                                                                     </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_idproduct">Товар</label>
                        <select type="text" class="form-control" name="product_idproduct" id="product_idproduct">
                            <?php
                            require_once("../DB.php");
                            $products = R::getAll('SELECT * FROM products');
                            foreach ($products as $product) { ?>
                                <option value="<?php echo $product['id']; ?>">
                                    <?php echo $product['productname']; ?>                                                                     </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="count">Количество</label>
                        <input type="text" class="form-control" name="count" id="count">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить данные</button>
                    <a href="productoforders.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>