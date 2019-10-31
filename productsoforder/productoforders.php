<?php $title = "Категории"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Категории</h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Наименование</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $categories = R::getAll('SELECT * FROM categories');
                    foreach ($categories as $category) {
                        $id = $category['id'];
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $category['categoryname'] . "</td>
                        <td><a href='categoryupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='categorydelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addcategory.php">Добавить категорию</a>
    </div>
<?php require_once("../footer.php") ?>