<?php

require_once __DIR__ . '/../DB.php';

class User
{
    protected $id;
    protected $firstName;
    protected $secondName;
    protected $email;
    protected $phone;
    protected $userName;
    protected $passwordHash;
    protected $contacts;
    protected $DB;

    public function __construct($id, $firstName, $secondName, $phone, $userName, $passwordHash, $email = '')
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->phone = $phone;
        $this->userName = $userName;
        $this->passwordHash = $passwordHash;
        $this->email = $email;
        $this->DB = new DB('localhost', 'user_contacts', 'root', 'root');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function insert()
    {
        $insert = 'INSERT INTO users (first_name, second_name, email, phone, user_name, password_hash) VALUES ' . '(\'' . $this->firstName . '\',\'' . $this->secondName . '\',\'' . $this->email . '\',\'' . $this->phone . '\',\''  . $this->userName . '\',\'' . $this->passwordHash . '\')';
        $executeInsert = $this->DB->execute($insert);
        if (false !== $executeInsert) {
            return true;
        }
        return false;
    }

    public function update()
    {
        $update = 'UPDATE users SET first_name = ' . '\'' . $this->firstName . '\'' . ', second_name = ' . '\'' . $this->secondName . '\'' . ', email = ' . '\'' . $this->email . '\'' . ', phone = ' . '\'' . $this->phone . '\'' . ', user_name = ' . '\'' . $this->userName . '\' WHERE id = ' . $this->id;
        return $this->DB->execute($update);
    }

    public function delete()
    {
        $delete = 'DELETE FROM users WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }
}