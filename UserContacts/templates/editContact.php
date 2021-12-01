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
            <form action="/UserContacts/services/changeContact.php" method="post">
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputIdContact">Идентификатор контакта</label>
                    <input type="text"
                           name="id"
                           class="form-control"
                           id="inputIdContact"
                           placeholder="Идентификатор контакта"
                           value="<?php echo $this->data['contactFields'][0]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputFirstNameContact">Имя пользователя</label>
                    <input type="text"
                           name="firstName"
                           class="form-control"
                           id="inputFirstNameContact"
                           placeholder="Имя пользователя"
                           value="<?php echo $this->data['contactFields'][1]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputSecondNameContact">Фамилия пользователя</label>
                    <input type="text"
                           name="secondName"
                           class="form-control"
                           id="inputSecondNameContact"
                           placeholder="Фамилия пользователя"
                           value="<?php echo $this->data['contactFields'][2]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputPhoneContact">Телефон пользователя</label>
                    <input type="tel"
                           name="phone"
                           class="form-control"
                           id="inputPhoneContact"
                           placeholder="Телефон пользователя"
                           value="<?php echo $this->data['contactFields'][3]; ?>">
                </div>
                <div class="form-group pb-2">
                    <label class="pb-1" for="inputEmailContact">Email пользователя</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           id="inputEmailContact"
                           placeholder="Email пользователя"
                           value="<?php echo $this->data['contactFields'][4]; ?>">
                </div>
                <div class="form-group pt-3">
                    <button class="btn btn-primary" type="submit">Изменить данные контакта</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>