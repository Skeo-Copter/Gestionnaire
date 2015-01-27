<?php

namespace Model\DbTable;

class Task
{
    private $pdo;
    
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=timetracking;charset=utf8';
        $this->pdo = new \PDO($dsn, 'root', '');
    }
    public function findAll()
    {
        $sql= 'Select * from task ';
        $stmt = $this->pdo->query($sql);
        $result = array();
        foreach($stmt->fetchAll(\PDO::FETCH_ASSOC) as $row){
            $result[]= $row;
        }
        return $result;
    }
}