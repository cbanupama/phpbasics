<?php

require_once 'UserInterface.php';

class User implements UserInterface {

    //properties
    public $greet = 'Welcome';
    protected $name;
    protected $age;
    protected $dob;
    const PLACE = 'BANGALORE';

    public function __construct()
    {
        echo 'User object was created';
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDob($dob) {
        $this->dob = $dob;
        $this->setAge($dob);
    }

    public function getAge() {
        return $this->age;
    }

    protected function setAge($dob)
    {
        $this->age = (date('Y') - $dob) + 1;
    }

    public function phone()
    {
        return 'Lenovo K8';
    }

    public function pillers()
    {
        return 4;
    }

    public function getPlace()
    {
        return self::PLACE;
    }

    public static function hey()
    {
        return 'Hey';
    }
}