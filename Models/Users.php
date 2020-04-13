<?php namespace Models; use PDO;
class User{
    protected $db;

    public function __construct($database)
    {
        $this->db = $database;
    }
    public function insert($uname, $pword){
        $link = $this->db->openDbConnection($input);

        $query = 'INSERT INTO users (uname, pword) VALUES (:uname, :pword)';
        $statement = $link->prepare($query);
        $statement->bindValue(':uname', $uname, PDO::PARAM_STR);
        $statement->bindValue(':pword', $pword, PDO::PARAM_STR);
        $statement->execute();
        $this->db->closeDbConnection($link);
    }
    
}
