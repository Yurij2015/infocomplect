<?php
require_once("../DB.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $productsoforders = R::load('productsoforders', $id);
    $count = $productsoforders->count;
    $product_idproduct = $productsoforders->product_idproduct;
    $orders_idorder = $productsoforders->orders_idorder;
}
if ($_POST) {
    $count = trim(htmlspecialchars($_POST['count']));
    $product_idproduct = $_POST['product_idproduct'];
    $orders_idorder = $_POST['orders_idorder'];
    require_once("../DB.php");
    $productsoforders = R::load('productsoforders', $id);
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
                            ?>
                            <option value="<?= $orders_idorder; ?>" selected="selected">
                                <?php $orders = R::load('orders', $orders_idorder);
                                echo $orders->id; ?>
                            </option>
                            <?php
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
                            ?>
                            <option value="<?= $product_idproduct; ?>" selected="selected">
                                <?php $product = R::load('products', $product_idproduct);
                                echo $product->productname; ?>
                            </option>
                            <?php
                            $products = R::getAll('SELECT * FROM products');
                            foreach ($products as $product) { ?>
                                <option value="<?php echo $product['id']; ?>">
                                    <?php echo $product['productname']; ?>                                                                     </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="count">Количество</label>
                        <input type="text" class="form-control" name="count" id="count" value="<?= $count ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить данные</button>
                    <a href="productoforders.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>