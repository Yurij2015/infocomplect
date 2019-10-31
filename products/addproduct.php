<?php
if ($_POST) {
    $productname = trim(htmlspecialchars($_POST['productname']));
    $weight = trim(htmlspecialchars($_POST['weight'])) ?: null;
    $volume = trim(htmlspecialchars($_POST['volume'])) ?: null;
    $count = trim(htmlspecialchars($_POST['count'])) ?: null;
    $category_idcategory = $_POST['category_idcategory'];
    if (!empty($productname)) {
        require_once("../DB.php");
        $products = R::dispense('products');
        $products->productname = $productname;
        $products->weight = $weight;
        $products->volume = $volume;
        $products->count = $count;
        $products->category_idcategory = $category_idcategory;
        R::store($products);
        header('location: products.php?msg=Записьуспешно добавлена!');
    }
}
?>
<?php $title = "Добавить продукт"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="productname">Название товара</label>
                        <input type="text" class="form-control" name="productname" id="productname">
                    </div>
                    <div class="form-group">
                        <label for="weight">Вес</label>
                        <input type="text" class="form-control" name="weight" id="weight">
                    </div>
                    <div class="form-group">
                        <label for="volume">Объем</label>
                        <input type="text" class="form-control" name="volume" id="volume">
                    </div>
                    <div class="form-group">
                        <label for="count">Количество</label>
                        <input type="text" class="form-control" name="count" id="count">
                    </div>
                    <div class="form-group">
                        <label for="category_idcategory">Категория</label>
                        <select type="text" class="form-control" name="category_idcategory" id="category_idcategory">
                            <?php
                            require_once("../DB.php");
                            $categories = R::getAll('SELECT * FROM categories');
                            foreach ($categories as $category) { ?>
                                <option value="<?php echo $category['id']; ?>">
                                    <?php echo $category['categoryname']; ?>                                                            </option>
                            <?php } ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить товар</button>
                    <a href="products.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>