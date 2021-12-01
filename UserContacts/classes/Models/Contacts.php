<?php

require_once __DIR__ . '/Contact.php';
require_once __DIR__ . '/../DB.php';

class Contacts
{
    protected $DB;
    protected $contacts = [];

    public function __construct()
    {
        $this->DB = new DB('localhost', 'user_contacts', 'root', 'root');
        $getContacts = 'SELECT * FROM contacts';
        $queryContacts = $this->DB->query($getContacts, []);
        if (false !== $queryContacts) {
            foreach ($queryContacts as $queryContact) {
                $contact = new Contact($queryContact['id'], $queryContact['user_first_name'],
                    $queryContact['user_second_name'], $queryContact['user_phone'],
                    $queryContact['user_email']);
                $this->contacts[] = $contact;
            }
        } else {
            die;
        }
    }

    public function getContact($id)
    {
        $getContact = 'SELECT * FROM contacts WHERE id=:id;';
        $queryContact = $this->DB->query($getContact, [':id' => $id]);
        if (false !== $queryContact) {
            return new Contact($queryContact[0]['id'], $queryContact[0]['user_first_name'], $queryContact[0]['user_second_name'], $queryContact[0]['user_phone'], $queryContact[0]['user_email']);
        }
        return false;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function checkPhone($phone)
    {
        $getContactsPhone = 'SELECT * FROM contacts WHERE phone=:phone;';
        $queryContactsPhone = $this->DB->query($getContactsPhone, [':phone' => $phone]);
        if ($queryContactsPhone !== false) {
            if (count($queryContactsPhone) > 0) {
                return true;
            }
        }
        return false;
    }

    public function checkEmail($email)
    {
        $getContactsEmail = 'SELECT * FROM contacts WHERE email=:email;';
        $queryContactsEmail = $this->DB->query($getContactsEmail, [':email' => $email]);
        if ($queryContactsEmail !== false) {
            if (count($queryContactsEmail) > 0) {
                return true;
            }
        }
        return false;
    }
}