<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/Models/Users.php';
require_once __DIR__ . '/classes/Models/UsersContacts.php';

if (empty($_GET['idContact'])) {
    ?>
    <script>
        alert('Не передан идентификатор контакта');
        window.location.href = "/UserContacts/index.php";
    </script> <?php
} elseif (empty($_SESSION['userName'])) {
    ?>
    <script>
        alert('Пользователь не зарегистрирован');
        window.location.href = "/UserContacts/index.php";
    </script> <?php
} else {
   $users = new Users();
   $idUser = $users->getIdByUserName($_SESSION['userName']);
   if (false != $idUser) {
        $usersContacts = new UsersContacts('', $idUser, $_GET['idContact']);
        if (true == $usersContacts->insert()) {
            ?>
            <script>
                alert('Контакт успешно добавлен в избранное');
                window.location.href = "/UserContacts/index.php";
            </script> <?php
        } else {
            ?>
            <script>
                alert('Ошибка при получении добавлении контакта');
                window.location.href = "/UserContacts/index.php";
            </script> <?php
        }
   } else {
       ?>
       <script>
           alert('Ошибка при получении идентификатора пользователя');
           window.location.href = "/UserContacts/index.php";
       </script> <?php
   }
}


