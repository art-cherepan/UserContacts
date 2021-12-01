<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Models/Contact.php';

if (empty($_POST['id'])) {
    ?>
    <script>
        alert('Не передан идентификатор контакта');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['firstName'])) {
    ?>
    <script>
        alert('Не передано имя контакта пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['secondName'])) {
    ?>
    <script>
        alert('Не передана фамилия контакта пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['email'])) {
    ?>
    <script>
        alert('Не передан email контакта пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['phone'])) {
    ?>
    <script>
        alert('Не передан телефон контакта пользователя');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} else {
    $contact = new Contact($_POST['id'], $_POST['firstName'], $_POST['secondName'], $_POST['phone'], $_POST['email']);
    if (true == $contact->update()) {
        ?>
        <script>
            alert('Данные контакта пользователя успешно обновлены');
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