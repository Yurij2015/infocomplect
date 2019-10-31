<?php $title = "Товары в заказах"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title ?></h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Номер заказа</th>
                        <th>Товар</th>
                        <th>Количество</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $productsoforders = R::getAll('SELECT * FROM productsoforders');
                    foreach ($productsoforders as $item) {
                        $id = $item['id'];
                        $product_idproduct = $item['product_idproduct'];
                        $orders_idorder = $item['orders_idorder'];
                        $products = R::load('products', $product_idproduct);
                        $product = $products->productname;
                        $orders = R::load('orders', $orders_idorder);
                        $order = $orders->id;
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $order . "</td>
                        <td>" . $product . "</td>
                        <td>" . $item['count'] . "</td>
                        <td><a href='prodofordupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='prodofordersdelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addprodoford.php">Добавить товары к заказу</a>
    </div>
<?php require_once("../footer.php") ?>