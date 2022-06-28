<?php


class Staff_castController
{

    public function actionIndex()
    {
        require_once(ROOT . '/theme/views/staff_cast/staff-cast.php');

        return true;
    }
}
