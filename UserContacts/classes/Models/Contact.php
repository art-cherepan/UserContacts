<?php

require_once __DIR__ . '/../DB.php';

class Contact
{
    protected $id;
    protected $userFirstName;
    protected $userSecondName;
    protected $userPhone;
    protected $userEmail;
    protected $DB;

    public function __construct($id, $userFirstName, $userSecondName, $userPhone, $userEmail = '')
    {
        $this->id = $id;
        $this->userFirstName = $userFirstName;
        $this->userSecondName = $userSecondName;
        $this->userPhone = $userPhone;
        $this->userEmail = $userEmail;
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
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @return mixed
     */
    public function getUserSecondName()
    {
        return $this->userSecondName;
    }

    /**
     * @return mixed
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function insert()
    {
        $insert = 'INSERT INTO contacts (user_first_name, user_second_name, user_email, user_phone) VALUES ' . '(\'' . $this->userFirstName . '\',\'' . $this->userSecondName . '\',\'' . $this->userEmail . '\',\'' . $this->userPhone . '\')';
        $executeInsert = $this->DB->execute($insert);
        if (false !== $executeInsert) {
            return true;
        }
        return false;
    }

    public function update()
    {
        $update = 'UPDATE contacts SET user_first_name = ' . '\'' . $this->userFirstName . '\'' . ', user_second_name = ' . '\'' . $this->userSecondName . '\'' . ', user_email = ' . '\'' . $this->userEmail . '\'' . ', user_phone = ' . '\'' . $this->userPhone . '\' WHERE id = ' . $this->id;
        return $this->DB->execute($update);
    }

    public function delete()
    {
        $delete = 'DELETE FROM contacts WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }
}