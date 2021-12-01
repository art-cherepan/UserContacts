<?php
?>

<!doctype html>
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
    <title>Редактирование пользователя</title>
</head>

<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-6 offset-3 alert alert-success">
            <form action="/UserContacts/services/changeUser.php" method="post">
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputIdUser">Идентификатор пользователя</label>
                    <input type="text"
                           name="id"
                           class="form-control"
                           id="inputIdUser"
                           placeholder="Идентификатор пользователя"
                           value="<?php echo $this->data['userFields'][0]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputFirstNameUser">Имя пользователя</label>
                    <input type="text"
                           name="firstName"
                           class="form-control"
                           id="inputFirstNameUser"
                           placeholder="Имя пользователя"
                           value="<?php echo $this->data['userFields'][1]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputSecondNameUser">Фамилия пользователя</label>
                    <input type="text"
                           name="secondName"
                           class="form-control"
                           id="inputSecondNameUser"
                           placeholder="Фамилия пользователя"
                           value="<?php echo $this->data['userFields'][2]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputEmailUser">Email пользователя</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           id="inputEmailUser"
                           placeholder="Email пользователя"
                           value="<?php echo $this->data['userFields'][3]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputPhoneUser">Телефон пользователя</label>
                    <input type="tel"
                           name="phone"
                           class="form-control"
                           id="inputPhoneUser"
                           placeholder="Телефон пользователя"
                           value="<?php echo $this->data['userFields'][4]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputUserName">Логин пользователя</label>
                    <input type="text"
                           name="userName"
                           class="form-control"
                           id="inputUserName"
                           placeholder="Логин пользователя"
                           value="<?php echo $this->data['userFields'][5]; ?>">
                </div>
                <div class="form-group pt-3">
                    <button class="btn btn-primary" type="submit">Изменить данные пользователя</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
