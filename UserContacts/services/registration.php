<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/../classes/Models/User.php';
require_once __DIR__ . '/../classes/Models/Users.php';

$users = new Users();

if (empty($_POST['firstName'])) {
    ?>
    <script>
        alert('Не заполнено имя пользователя');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (empty($_POST['secondName'])) {
    ?>
    <script>
        alert('Не заполнена фамилия пользователя');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (empty($_POST['phone'])) {
    ?>
    <script>
        alert('Не заполнен телефон пользователя');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (empty($_POST['userName'])) {
    ?>
    <script>
        alert('Не заполнен логин');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (empty($_POST['password'])) {
    ?>
    <script>
        alert('Не заполнен пароль');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (empty($_POST['passwordRepeat'])) {
    ?>
    <script>
        alert('Не заполнен пароль повторно');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif ($_POST['password'] != $_POST['passwordRepeat']) {
    ?>
    <script>
        alert('Пароли не совпадают');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (true == $users->checkUserName($_POST['userName'])) {
    ?>
    <script>
        alert('Пользователь с таким логином уже зарегистрирован');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (true == $users->checkPhone($_POST['phone'])) {
    ?>
    <script>
        alert('Пользователь с таким телефоном уже зарегистрирован');
        window.location.href = "/UserContacts/registration.php";
    </script> <?php
} elseif (true == $users->checkEmail($_POST['email'])) {
    ?>
	<script>
        alert('Пользователь с такой электронной почтой уже зарегистрирован');
        window.location.href = "/UserContacts/registration.php";
	</script> <?php
} else {
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user = new User('', $_POST['firstName'], $_POST['secondName'], $_POST['phone'], $_POST['userName'], $passwordHash, '{}', $_POST['email']);
    if (true == $user->insert()) {
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['passwordHash'] = $passwordHash;
        ?>
        <script>
            alert('Вы успешно зарегестрировались!');
            window.location.href = "/UserContacts/index.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('При регистрации произошла ошибка!');
            window.location.href = "/UserContacts/index.php";
        </script> <?php
    }
}
