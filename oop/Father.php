<?php
/**
 * Created by PhpStorm.
 * User: jagad
 * Date: 7/12/2018
 * Time: 10:52 PM
 */

require_once 'GrandFather.php';

class Father extends GrandFather
{
    public function place()
    {
        return parent::place();
    }
}