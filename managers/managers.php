<?php $title = "Менеджеры"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title; ?></h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>ФИО</th>
                        <th>Телефон</th>
                        <th>Электронная почта</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $managers = R::getAll('SELECT * FROM managers');
                    foreach ($managers as $manager) {
                        $id = $manager['id'];
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $manager['name'] . "</td>
                        <td>" . $manager['phone'] . "</td>
                        <td>" . $manager['email'] . "</td>
                        <td><a href='managerupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='managerdelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addmanager.php">Добавить менеджера</a>
    </div>
<?php require_once("../footer.php") ?>