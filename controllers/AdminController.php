<?php

include('components/Admin.php');

class AdminController extends Admin
{

    public function actionPanel()
    {
        self::checkAdmin();
        require_once(ADG_ROOT . '/views/panel/index.php');
        return true;
    }

    public function actionCharacters()
    {
        self::checkAdmin();
        require_once(ADG_ROOT . '/views/panel/characters.php');
        return true;
    }
}
