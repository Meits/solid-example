<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 24-Apr-19
 * Time: 14:16
 */

namespace App\S;


class DatabaseStorage implements IStorage
{

    private $mysqli;

    public function __construct($host, $user, $pass, $db)
    {
        $this->mysqli = new \mysqli($host, $user, $pass, $db);
        if ($this->mysqli->connect_error) {
            die('Ошибка подключения (' . $this->mysqli->connect_errno . ') '
                . $this->mysqli->connect_error);
        }
    }

    function save($data)
    {
        $this->mysqli->query("INSERT INTO `reports`(`text`) VALUES ('" .$data . "')");
    }
}