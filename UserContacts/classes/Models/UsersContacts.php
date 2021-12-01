<?php

require_once __DIR__ . '/../DB.php';

class UsersContacts
{
    protected $DB;
    protected $id;
    protected $idUser;
    protected $idContact;

    public function __construct($id, $idUser, $idContact)
    {
        $this->id = $id;
        $this->idUser = $idUser;
        $this->idContact = $idContact;
        $this->DB = new DB('localhost', 'user_contacts', 'root', 'root');
    }

    public function insert()
    {
        $insert = 'INSERT INTO users_contacts (id_user, id_contact) VALUES ' . '(\'' . $this->idUser . '\',\'' . $this->idContact . '\')';
        $executeInsert = $this->DB->execute($insert);
        if (false !== $executeInsert) {
            return true;
        }
        return false;
    }

    public function delete()
    {
        $delete = 'DELETE FROM users_contacts WHERE id = ' . $this->id;
        return $this->DB->execute($delete);
    }

    public function getContactsData()
    {
        $getData = 'SELECT id, user_first_name, user_second_name FROM contacts WHERE id IN (
                    SELECT id_contact FROM users_contacts WHERE id_user = ' . $this->idUser . ')';
        $contactsData = $this->DB->query($getData, []);
        if (false !== $contactsData) {
            $data = [];
            foreach ($contactsData as $contactData) {
                $arr = ['id' => $contactData['id'], 'user_first_name' => $contactData['user_first_name'], 'user_second_name' => $contactData['user_second_name']];
                $data[] = $arr;
            }
            return $data;
        } else {
            die;
        }
    }

    public function getIdUsers()
    {
        $getIds = 'SELECT id_user FROM users_contacts WHERE id_contact = ' . $this->idContact;
        $queryIds = $this->DB->query($getIds, []);
        if (false !== $queryIds) {
            $arrId = [];
            foreach ($queryIds as $queryId) {
                $arrId[] = $queryId['id_user'];
            }
            return $arrId;
        } else {
            die;
        }
    }

}