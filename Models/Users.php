<?php namespace Model; use PDO;
class Accounts{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

}
