<?php
if (isset($_POST['categoryname'])) {
    $categoryname = trim(htmlspecialchars($_POST['categoryname']));
    if (!empty($categoryname)) {
        require_once("../DB.php");
        $category = R::dispense('categories');
        $category->categoryname = $categoryname;
        R::store($category);
        header('location: category.php?msg=Записьуспешно добавлена!');
    }
}
?>
<?php $title = "Добавить категорию"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="categoryname">Название категории</label>
                        <input type="text" class="form-control" name="categoryname" id="categoryname">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить категорию</button>
                    <a href="category.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("footer.php") ?>