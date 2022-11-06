<?php
namespace Model\Database;

use PDO;
use PDOException;


class DbConnect {
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=bss';
        $this->username = 'root';
        $this->password = '';
    }

    public function connect()
    {
        try {
           return new PDO($this->dsn, $this->username, $this->password);
        }catch(PDOException $e) {
            return $e->getMessage();
        }   
    }
}
