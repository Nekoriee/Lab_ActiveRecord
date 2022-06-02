<?php

namespace Pcat\ActiveRecord;

use PDO;

class Person
{
    private $id;
    private $name;
    private $age;
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:dbname=testdb;host=127.0.0.1', 'pcat', 'basedcat');
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAll() {
        $sql = 'SELECT * from person';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}