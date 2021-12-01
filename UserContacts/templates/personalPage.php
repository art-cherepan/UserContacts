<?php
?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/UserContacts/css/bootstrap.min.css">
        <!--собственные стили-->
        <link rel="stylesheet" href="/UserContacts/css/styles.css">
        <!-- Bootstrap JS + Popper JS -->
        <script defer src="/UserContacts/js/bootstrap.bundle.min.js"></script>
        <title>Личная страница</title>
    </head>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-4 mt-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        Избранное
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php
                        foreach ($this->data['contactsDataByUser'] as $contactDataByUser) { ?>
                            <li>
                                <a class="dropdown-item"
                                   href="/UserContacts/contactInfo.php?idContact=<?php echo $contactDataByUser['id']; ?>">
                                    <span><?php echo $contactDataByUser['user_first_name']; ?></span>
                                    <span><?php echo $contactDataByUser['user_second_name']; ?></span>
                                </a>
                            </li>
                            <?php
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-4 mt-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton2"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        Общие контакты
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <?php
                        foreach ($this->data['contacts'] as $contact) { ?>
                            <li>
                                <a class="dropdown-item"
                                   href="/UserContacts/addContact.php?idContact=<?php echo $contact->getId(); ?>">
                                    <span><?php echo $contact->getUserFirstName(); ?></span>
                                    <span><?php echo $contact->getUserSecondName(); ?></span>
                                </a>
                            </li>
                            <?php
                        } ?>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-4 mt-3">
                <a href="/UserContacts/logOut.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Выйти</a>
            </div>
        </div>
    </div>
