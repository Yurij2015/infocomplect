<?php
if ($_POST) {
    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['phone'])) ?: null;
    $email = trim(htmlspecialchars($_POST['email'])) ?: null;
    if (!empty($name)) {
        require_once("../DB.php");
        $customers = R::dispense('managers');
        $customers->name = $name;
        $customers->phone = $phone;
        $customers->email = $email;
        R::store($customers);
        header('location: managers.php?msg=Запись успешно добавлена!');
    }
}
?>
<?php $title = "Добавить менеджера"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="name">ФИО</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Электронная почта</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить менеджера</button>
                    <a href="managers.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>