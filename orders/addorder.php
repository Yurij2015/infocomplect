<?php
if ($_POST) {
    $date = trim(htmlspecialchars($_POST['date']));
    $status = trim(htmlspecialchars($_POST['status']));
    $managers_idmanager = $_POST['managers_idmanager'];
    $category_idcategory = $_POST['customers_idcustomer'];
//    if (!empty($productname)) {
    require_once("../DB.php");
    $orders = R::dispense('orders');
    $orders->date = $date;
    $orders->status = $status;
    $orders->managers_idmanager = $managers_idmanager;
    $orders->customers_idcustomer = $category_idcategory;
    R::store($orders);
    header('location: orders.php?msg=Запись успешно добавлена!');
//    }
}
?>
<?php $title = "Добавить заказ"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="date">Дата</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1">На рассмотрении</option>
                            <option value="2">На выполнеии</option>
                            <option value="3">Выполнен</option>
                            <option value="4">Отменен</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="managers_idmanager">Менеджер</label>
                        <select type="text" class="form-control" name="managers_idmanager" id="managers_idmanager">
                            <?php
                            require_once("../DB.php");
                            $managers = R::getAll('SELECT * FROM managers');
                            foreach ($managers as $manager) { ?>
                                <option value="<?php echo $manager['id']; ?>">
                                    <?php echo $manager['name']; ?>                                                                     </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customers_idcustomer">Клиент</label>
                        <select type="text" class="form-control" name="customers_idcustomer" id="customers_idcustomer">
                            <?php
                            require_once("../DB.php");
                            $customers = R::getAll('SELECT * FROM customers');
                            foreach ($customers as $customer) { ?>
                                <option value="<?php echo $customer['id']; ?>">
                                    <?php echo $customer['customername']; ?>                                                                     </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить заказ</button>
                    <a href="orders.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>