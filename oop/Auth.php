<?php

require_once 'Authentication.php';

class Auth implements Authentication
{
    public function __construct()
    {
        echo 'Auth object was created';
    }

    public function register()
    {
    }

    public function login()
    {
        return 'loggedin';
    }

    public function logout()
    {
    }
}