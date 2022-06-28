<?php

abstract class Admin
{
    public static function checkAdmin()
    {
        if ($_SESSION['user'] == 'admin') {
            return true;
        }

        die('Acecess denided');
    }
    
}
