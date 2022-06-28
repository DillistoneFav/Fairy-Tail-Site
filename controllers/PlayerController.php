<?php


class PlayerController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/player/player.php');

        return true;
    }
}
