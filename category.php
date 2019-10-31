<?php $title = "Категории"; ?>
<?php require_once("header.php") ?>
    <div class="container-fluid" style="margin-top:30px; margin-bottom: 30px;">
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
            require_once("DB.php");
            $categories = R::getAll('SELECT * FROM categories');
            foreach ($categories as $category) {
                echo "<tr>
                        <td>" . $category['id'] . "</td>
                        <td>" . $category['categoryname'] . "</td>
                        <td><a href='categorydelete.php' class='btn btn-info'>Редактировать</a> 
                        | <a href='#'>Удалить</a></td>
                      </tr>";
            }
            ?>

            </tbody>
        </table>
    </div>
    <a class="btn btn-light" href="addcategory.php">Добавить категорию</a>
<?php require_once("footer.php") ?>