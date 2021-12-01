<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Models/User.php';

if (empty($_POST['user_first_name'])) {
    ?>
    <script>
        alert('Введите имя пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_second_name'])) {
    ?>
    <script>
        alert('Введите фамилию пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_phone'])) {
    ?>
    <script>
        alert('Введите телефон пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_phone'])) {
    ?>
    <script>
        alert('Введите телефон пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_name'])) {
    ?>
    <script>
        alert('Введите логин пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_password'])) {
    ?>
    <script>
        alert('Введите пароль пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_password_repeat'])) {
    ?>
    <script>
        alert('Повторите пароль пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif ($_POST['user_password_repeat'] != $_POST['user_password']) {
    ?>
    <script>
        alert('Повторите пароли не совпадают');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} else {
    $passwordHash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $email = '';
    if (!empty($_POST['user_email'])) {
        $email = $_POST['user_email'];
    }
    $user = new User('', $_POST['user_first_name'], $_POST['user_second_name'], $_POST['user_phone'], $_POST['user_name'], $passwordHash, $email);
    if (true == $user->insert()) {
        ?>
        <script>
            alert('Пользователь успешно добавлен');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('Ошибка при добавлении пользователя');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    }
}