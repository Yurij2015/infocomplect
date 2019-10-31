<?php $title = "Заказы"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title ?></h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Дата</th>
                        <th>Статус</th>
                        <th>Менеджер</th>
                        <th>Клиент</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once("../DB.php");
                    $orders = R::getAll('SELECT * FROM orders');
                    foreach ($orders as $order) {
                        $id = $order['id'];
                        $ordercustomer = $order['customers_idcustomer'];
                        $ordermanager = $order['managers_idmanager'];
                        $managers = R::load('managers', $ordermanager);
                        $manager = $managers->name;
                        $customers = R::load('customers', $ordercustomer);
                        $customer = $customers->customername;
                        $status = $order['status'];
                        switch ($status) {
                            case 1:
                                $statusvalue = "На рассмотрении";
                                break;
                            case 2:
                                $statusvalue = "На выполнеии";
                                break;
                            case 3:
                                $statusvalue = "Выполнен";
                                break;
                            case 4:
                                $statusvalue = "Отменен";
                                break;
                        }
                        echo "<tr>
                        <td>" . $id . "</td>
                        <td>" . $order['date'] . "</td>
                        <td>" . $statusvalue . "</td>
                        <td>" . $manager . "</td>
                        <td>" . $customer . "</td>
                        <td><a href='orderupdate.php?id=$id' class='btn btn-info'>Редактировать</a>
                        | <a href='orderdelete.php?id=$id' class='btn btn-warning' onclick='return confirmDelete();'>Удалить</a></td>
                      </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-light" href="addorder.php">Добавить заказ</a>
    </div>
<?php require_once("../footer.php") ?>