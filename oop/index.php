<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$user = new User();
$user->setName('Anupama');
echo $user->getName();
$user->setDob(1989);
echo $user->getAge();
echo $user->pillers();
echo $user->greet;

echo User::PLACE;
echo $user::PLACE;
echo $user->getPlace();
echo $user::hey();
echo User::hey();

$auth = new Auth();
$auth1 = new Auth();
echo $auth->login();

$learn = new LearnTraits();
$learn->hi();