<?php

class Session {

    public static function startSession($id)
    {
        $_SESSION['id_admin'] = true;
    }

    public static function destroySession()
    {
        session_destroy();
    }
}