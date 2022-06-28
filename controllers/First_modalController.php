<?php


class First_modalController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/first_modal/manga.php');

        return true;
    }
}
