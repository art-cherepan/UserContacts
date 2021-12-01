<?php

if (!isset($_SESSION)) {
    session_start();
  //  var_dump($_POST); die;
}

require_once __DIR__ . '/../classes/Models/User.php';

if (!empty($_POST['delete_user_select'])) {
    $user = new User($_POST['delete_user_select'], '', '', '', '', '', '');
    if (true == $user->delete()) {
        ?>
        <script>
            alert('Пользователь успешно удален');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    } else {
        ?>
        <script>
            alert('Ошибка при удалении пользователя');
            window.location.href = "/UserContacts/admin.php";
        </script> <?php
    }
}