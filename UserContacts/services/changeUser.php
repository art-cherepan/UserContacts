<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Models/User.php';

if (empty($_POST['id'])) {
    ?>
    <script>
        alert('Не передан идентификатор пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['firstName'])) {
    ?>
    <script>
        alert('Не передано имя пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['secondName'])) {
    ?>
    <script>
        alert('Не передана фамилия пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['email'])) {
    ?>
    <script>
        alert('Не передан email пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['phone'])) {
    ?>
    <script>
        alert('Не передан телефон пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['userName'])) {
    ?>
    <script>
        alert('Не передан логин пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} else {
    $user = new User($_POST['id'], $_POST['firstName'], $_POST['secondName'], $_POST['phone'], $_POST['userName'], '', $_POST['email']);
    if (true == $user->update()) {
        ?>
        <script>
            alert('Данные пользователя успешно обновлены');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('Произошла ошибка при обновлении данных');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    }
}
