<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Models/Contact.php';

if (empty($_POST['user_first_name_contact'])) {
    ?>
    <script>
        alert('Введите имя пользователя для контакта');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_second_name_contact'])) {
    ?>
    <script>
        alert('Введите фамилию пользователя для контакта');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} elseif (empty($_POST['user_phone_contact'])) {
    ?>
    <script>
        alert('Введите телефон пользователя для контакта');
        window.location.href = "/UserContacts/admin.php";
    </script> <?php
} else {
    $email = '';
    if (!empty($_POST['user_email_contact'])) {
        $email = $_POST['user_email_contact'];
    }
    $contact = new Contact('', $_POST['user_first_name_contact'], $_POST['user_second_name_contact'], $_POST['user_phone_contact'], $email);
    if (true == $contact->insert()) {
        ?>
        <script>
            alert('Контакт успешно добавлен');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('Ошибка при добавлении контакта');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    }
}