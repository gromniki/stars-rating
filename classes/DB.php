<?php

class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new PDO($dsn, $config['username'], $config['password']);
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            return false;
        }
        return true;

        //return $this->dbh->prepare($sql)->execute($data); // сокращенная запись
    }

    public function query(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);
        if ($result === false) {
            return false;
        }
        return $sth->fetchAll();
    }
}