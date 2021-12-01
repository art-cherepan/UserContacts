<?php
?>
<html lang="en">
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
        <title>Станица администрирования</title>
    </head>

<?php
if (false == $this->data['admin']) {
    ?>
    <script>
        alert('У вас нет прав');
        window.location.href = "/UserContacts/index.php";
    </script> <?php
} else {
    ?>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Добавление пользователя</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/addUser.php" method="post" name="add_user">
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserFirstName">Введите имя пользователя</label>
						<input type="text"
							   name="user_first_name"
							   class="form-control"
							   id="inputUserFirstName"
							   placeholder="Имя пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserSecondName">Введите фамилию пользователя</label>
						<input type="text"
							   name="user_second_name"
							   class="form-control"
							   id="inputUserSecondName"
							   placeholder="Фамилия пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserEmail">Введите электронный адрес</label>
						<input type="email"
							   name="user_email"
							   class="form-control"
							   id="inputUserEmail"
							   placeholder="Email пользователя">
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserPhone">Введите телефон</label>
						<input type="tel"
							   name="user_phone"
							   class="form-control"
							   id="inputUserPhone"
							   placeholder="Телефон пользователя"
							   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserName">Введите логин</label>
						<input type="text"
							   name="user_name"
							   class="form-control"
							   id="inputUserName"
							   placeholder="Логин пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserPassword">Введите пароль</label>
						<input type="password"
							   name="user_password"
							   class="form-control"
							   id="inputUserPassword"
							   placeholder="Пароль пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserPasswordRepeat">Повторите пароль</label>
						<input type="password"
							   name="user_password_repeat"
							   class="form-control"
							   id="inputUserPasswordRepeat"
							   placeholder="Повторите пароль"
							   required>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Добавить пользователя</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Добавление контакта</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/addContact.php" method="post" name="add_contact">
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserFirstNameContact">Введите имя пользователя</label>
						<input type="text"
							   name="user_first_name_contact"
							   class="form-control"
							   id="inputUserFirstNameContact"
							   placeholder="Имя пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserSecondNameContact">Введите фамилию пользователя</label>
						<input type="text"
							   name="user_second_name_contact"
							   class="form-control"
							   id="inputUserSecondNameContact"
							   placeholder="Фамилия пользователя"
							   required>
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserEmailContact">Введите электронный адрес</label>
						<input type="email"
							   name="user_email_contact"
							   class="form-control"
							   id="inputUserEmailContact"
							   placeholder="Email пользователя">
					</div>
					<div class="form-group pb-2">
						<label class="pb-1" for="inputUserPhoneContact">Введите телефон</label>
						<input type="tel"
							   name="user_phone_contact"
							   class="form-control"
							   id="inputUserPhoneContact"
							   placeholder="Телефон пользователя"
							   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
							   required>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Добавить Контакт</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Редактирование пользователя</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/editUser.php" name="edit_user_form" method="post">
					<div class="form-group">
						<label class="pb-1" for="selectEditUser">Выберите пользователя</label>
						<select name="edit_user_select" class="form-control" id="selectEditUser">
                            <?php foreach ($this->data['users'] as $user) { ?>
								<option value="<?php echo $user->getId() . '&&&' . $user->getFirstName() . '&&&' . $user->getSecondName() . '&&&' . $user->getEmail() . '&&&' . $user->getPhone() . '&&&' . $user->getUserName(); ?>"><?php echo $user->getFirstName() . ' ' .$user->getSecondName(); ?></option>
                            <?php } ?>
						</select>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Ок</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Редактирование контакта</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/editContact.php" name="edit_contact_form" method="post">
					<div class="form-group">
						<label class="pb-1" for="selectEditContact">Выберите контакт</label>
						<select name="edit_contact_select" class="form-control" id="selectEditContact">
                            <?php foreach ($this->data['contacts'] as $contact) { ?>
								<option value="<?php echo $contact->getId() . '&&&' . $contact->getUserFirstName() . '&&&' . $contact->getUserSecondName() . '&&&' . $contact->getUserPhone() . '&&&' . $contact->getUserEmail(); ?>"><?php echo $contact->getUserFirstName() . ' ' . $contact->getUserSecondName();?></option>
                            <?php } ?>
						</select>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Ок</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Удаление пользователя</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/deleteUser.php" name="delete_user_form" method="post">
					<div class="form-group">
						<label class="pb-1" for="selectDeleteUser">Выберите пользователя</label>
						<select name="delete_user_select" class="form-control" id="selectDeleteUser">
                            <?php foreach ($this->data['users'] as $user) { ?>
								<option value="<?php echo $user->getId(); ?>"><?php echo $user->getFirstName() . ' ' . $user->getSecondName(); ?></option>
                            <?php } ?>
						</select>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Ок</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<h1>Удаление контакта</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 alert alert-success">
				<form action="/UserContacts/services/deleteContact.php" name="delete_contact_form" method="post">
					<div class="form-group">
						<label class="pb-1" for="selectDeleteContact">Выберите контакт</label>
						<select name="delete_contact_select" class="form-control" id="selectDeleteContact">
                            <?php foreach ($this->data['contacts'] as $contact) { ?>
								<option value="<?php echo $contact->getId(); ?>"><?php echo $contact->getUserFirstName() . ' ' . $contact->getUserSecondName(); ?></option>
                            <?php } ?>
						</select>
					</div>
					<div class="form-group pt-3">
						<button class="btn btn-primary" type="submit">Ок</button>
					</div>
				</form>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col-6 offset-3">
				<div class="d-flex justify-content-center">
					<div class="form-group pt-3">
						<a href="/UserContacts/index.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">На главную страницу</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
	</html>
    <?php
}
