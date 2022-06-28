<?php


class SiteController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/site/index.php');

        return true;
    }
}
