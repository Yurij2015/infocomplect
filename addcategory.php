<?php
if (isset($_POST['categoryname'])) {
    $categoryname = $_POST['categoryname'];
    require_once("DB.php");
    $category = R::dispense('categories');
    $category->categoryname = $categoryname;
    R::store($category);
    header('location: category.php?msg=Записьуспешно добавлена!');
}
?>
<?php $title = "Добавить категорию"; ?>
<?php require_once("header.php") ?>
    <div class="container-fluid" style="margin-top:30px; margin-bottom: 30px;">
        <form method="post">
            <div class="form-group">
                <label for="categoryname">Название категории</label>
                <input type="text" class="form-control" name="categoryname" id="categoryname">
            </div>
            <button type="submit" class="btn btn-light">Сохранить категорию</button>
        </form>
    </div>
<?php require_once("footer.php") ?>