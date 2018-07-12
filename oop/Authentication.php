<?php

interface Authentication
{
    public function register();

    public function login();

    public function logout();
}