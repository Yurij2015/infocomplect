<?php $title = "Товары"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title ?></h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Наименование</th>
                        <th>Вес</th>
                        <th>Объем</th>
                        <th>Количество</th>
                        <th>Категория</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $products = R::getAll('SELECT * FROM products');
                    foreach ($products as $product) {
                        $id = $product['id'];
                        $prodcat = $product['category_idcategory'];
                        $category = R::load('categories', $prodcat);
                        $categoryname = $category->categoryname;
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $product['productname'] . "</td>
                        <td>" . $product['weight'] . "</td>
                        <td>" . $product['volume'] . "</td>
                        <td>" . $product['count'] . "</td>
                        <td>" . $categoryname . "</td>
                        <td><a href='productupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='productdelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addproduct.php">Добавить товар</a>
    </div>
<?php require_once("../footer.php") ?>