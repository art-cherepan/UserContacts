<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/UserContacts/css/bootstrap.min.css">
    <!--собственные стили-->
    <link rel="stylesheet" href="/UserContacts/css/styles.css">
    <!-- Bootstrap JS + Popper JS -->
    <script defer src="/UserContacts/js/bootstrap.bundle.min.js"></script>
    <title>Станица администрирования</title>
</head>

<div class="container">
    <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <div class="form-group pt-3">
                <h1>Информация о контакте</h1>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="pb-2 col-6 offset-3">
            <label class="pb-1" for="inputUserFirstName">Имя</label>
            <input type="text"
                   name="userFirstName"
                   class="form-control"
                   id="inputUserFirstName"
                   value="<?php echo $this->data['contact']->getUserFirstName() ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="pb-2 col-6 offset-3">
            <label class="pb-1" for="inputUserFirstName">Фамилия</label>
            <input type="text"
                   name="userFirstName"
                   class="form-control"
                   id="inputUserFirstName"
                   value="<?php echo $this->data['contact']->getUserSecondName() ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="pb-2 col-6 offset-3">
            <label class="pb-1" for="inputUserFirstName">Телефон</label>
            <input type="text"
                   name="userFirstName"
                   class="form-control"
                   id="inputUserFirstName"
                   value="<?php echo $this->data['contact']->getUserPhone() ?>"/>
        </div>
    </div>
    <div class="row">
        <div class="pb-2 col-6 offset-3">
            <label class="pb-1" for="inputUserFirstName">Email</label>
            <input type="text"
                   name="userFirstName"
                   class="form-control"
                   id="inputUserFirstName"
                   value="<?php echo $this->data['contact']->getUserEmail() ?>"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6 offset-3">
            <div class="d-flex justify-content-center">
                <div class="form-group pt-3">
                    <a href="/UserContacts/index.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">На
                        главную страницу</a>
                </div>
            </div>
        </div>
    </div>
</div>