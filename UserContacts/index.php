<?php

if (!isset($_SESSION)) {
    session_start();
}

//foreach ($_SESSION as $key => $value) {
//    unset($_SESSION[$key]);
//}

//var_dump($_SESSION);

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Models/User.php';
require_once __DIR__ . '/classes/Models/Users.php';
require_once __DIR__ . '/classes/Models/Contact.php';
require_once __DIR__ . '/classes/Models/Contacts.php';
require_once __DIR__ . '/classes/Models/UsersContacts.php';

$view = new View();

if (!empty($_SESSION['userName']) && !empty($_SESSION['passwordHash'])) {
    $contacts = new Contacts();
    $contacts = $contacts->getContacts();
    $users = new Users();
    $userId = $users->getIdByUserName($_SESSION['userName']);
    $usersContacts = new UsersContacts('', $userId, '');
    $contactsDataByUser = $usersContacts->getContactsData();
    $view->assign('contacts', $contacts);
    $view->assign('contactsDataByUser', $contactsDataByUser);
    $view->display(__DIR__ . '/templates/personalPage.php');
} else {
    $view->display(__DIR__ . '/templates/main.php');
}
