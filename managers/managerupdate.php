<?php
require_once("../DB.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $managers = R::load('managers', $id);
    $name= $managers->name;
    $phone = $managers->phone;
    $email = $managers->email;
}

if ($_POST) {
    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['phone'])) ?: null;
    $email = trim(htmlspecialchars($_POST['email'])) ?: null;
    if (!empty($name)) {
        require_once("../DB.php");
        $managers = R::load('managers', $id);
        $managers->name = $name;
        $managers->phone = $phone;
        $managers->email = $email;
        R::store($managers);
        header('location: managers.php?msg=Запись успешно обновлена!');
    }
}
?>
<?php $title = "Обновить данные клиента"; ?>
<?php require_once("../header.php") ?>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label for="customername">ФИО</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Электронная почта</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Сохранить</button>
                    <a href="managers.php" class="btn btn-info">Назад</a>
                </form>
            </div>
        </div>
    </div>
<?php require_once("../footer.php") ?>