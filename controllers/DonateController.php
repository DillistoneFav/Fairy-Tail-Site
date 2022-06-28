<?php


class DonateController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/donate/donate.php');

        return true;
    }
}
