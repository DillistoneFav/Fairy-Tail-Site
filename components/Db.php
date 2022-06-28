<?php

class Db
{
    public $mysqli;

    public function __construct()
    {
        $params = include(ROOT . '/config/db_params.php');
        $this->mysqli = new mysqli($params['host'], $params['user'], $params['password'], $params['name']);
        if ($this->mysqli->connect_errno) {
            echo ('Нет подключения к базе данных !');
            exit;
        }
    }

    public function printResult($result)
    {
        $list = [];
        while ($row = $result->fetch_assoc()) {
            $list[] = $row;
        }
        return $list;
    }



    public function getListSql($sql)
    {
        $result = $this->mysqli->query($sql);
        if (!$result) {
            echo 'Ошибка запроса';
        }
        return $this->printResult($result);
    }
}
