<?php


class DB
{
    protected $host;
    protected $dbname;
    protected $userName;
    protected $password;
    protected $dbh;
    protected $sth;

    public function __construct($host, $dbname, $userName, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbh = new PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->userName, $this->password
        );
    }

    public function execute($sql) //для инсерта и делита
    {
        $this->sth = $this->dbh->prepare($sql);
        if (true == $this->sth->execute()) {
            return true;
        }
        else {
            return false;
        }
    }

    public function query($sql, $data) //для селекта
    {
        $this->sth = $this->dbh->prepare($sql);
        if (false == $this->sth->execute($data)) {
            return false;
        } else {
            return $this->sth->fetchall();
        }
    }

    public function getLastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}