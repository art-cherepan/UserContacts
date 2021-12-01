<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/../classes/Models/Contact.php';

if (!empty($_POST['delete_contact_select'])) {
    $contact = new Contact($_POST['delete_contact_select'], '', '', '', '');
    if (true == $contact->delete()) {
        ?>
        <script>
            alert('Контакт успешно удален');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('Ошибка при удалении контакта');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    }
}