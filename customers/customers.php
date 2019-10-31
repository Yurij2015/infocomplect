<?php $title = "Клиенты"; ?>
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
                        <th>Адрес</th>
                        <th>Телефон</th>
                        <th>Электронная почта</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $customers = R::getAll('SELECT * FROM customers');
                    foreach ($customers as $customer) {
                        $id = $customer['id'];
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $customer['customername'] . "</td>
                        <td>" . $customer['address'] . "</td>
                        <td>" . $customer['phone'] . "</td>
                        <td>" . $customer['email'] . "</td>
                        <td><a href='customerupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='customerdelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addcustomer.php">Добавить клиента</a>
    </div>
<?php require_once("../footer.php") ?>