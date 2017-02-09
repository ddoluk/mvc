<?php

class Session
{

    public static function initSession()
    {
        session_start();
    }

    public function setSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getSession($key)
    {
        if(!empty($_SESSION[$key])){

            $_SESSION[$key];

        }

        return $_SESSION[$key];
    }

    public function destroySession()
    {
        session_destroy();
    }

}