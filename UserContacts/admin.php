<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/Models/Users.php';
require_once __DIR__ . '/classes/Models/Contacts.php';

$view = new View();

if (!empty($_SESSION['userName'])) {
    if ('root' != $_SESSION['userName']) {
        $view->assign('admin', false);
    } else {
        $users = new Users();
        $users = $users->getUsers();
        $contacts = new Contacts();
        $contacts = $contacts->getContacts();
        $view->assign('users', $users);
        $view->assign('contacts',  $contacts);
        $view->assign('admin', true);
    }
} else {
    $view->assign('admin', false);
}

$view->display(__DIR__ . '/templates/admin.php');