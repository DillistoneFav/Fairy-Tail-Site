<?php

include ROOT . '/components/Db.php';

class News
{

    static function getNewsList()
    {
        $mysql = new Db();
        return $mysql->getListSql('SELECT * FROM `characters`');
    }

    static function getNewsItemById()
    {
        echo ('Новость по id');
    }
}
