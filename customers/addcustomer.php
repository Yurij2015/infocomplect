<?php
if ($_POST) {
    $customername = trim(htmlspecialchars($_POST['customername']));
    $address = trim(htmlspecialchars($_POST['address'])) ?: null;
    $phone = trim(htmlspecialchars($_POST['phone'])) ?: null;
    $email = trim(htmlspecialchars($_POST['email'])) ?: null;
    if (!empty($customername)) {
        require_once("../DB.php");
        $customers = R::dispense('customers');
        $customers->customername = $customername;
        $customers->address = $address;
        $customers->phone = $phone;
        $customers->email = $email;
        R::store($customers);
        header('location: customers.php?msg=Записьуспешно добавлена!');
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
                        <label for="customername">ФИО</label>
                        <input type="text" class="form-control" name="customername" id="customername">
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Электронная почта</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <button type="submit" class="btn btn-success">Сохранить товар</button>
                    <a href="customers.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>