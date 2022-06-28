<?php


class DeclinedController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/payment_declined/canceled.php');

        return true;
    }
}
