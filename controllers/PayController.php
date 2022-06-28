<?php


class PayController
{

    public function actionIndex()
    {
        require_once(ROOT . '/handlers/pay/index.php');

        return true;
    }
}
