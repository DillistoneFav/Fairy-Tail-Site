<?php


class CharactersController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/characters/characters.php');

        return true;
    }
}
