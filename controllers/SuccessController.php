<?php


class SuccessController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/payment_success/thanks.php');

        return true;
    }
}
