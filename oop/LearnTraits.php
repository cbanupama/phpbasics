<?php
/**
 * Created by PhpStorm.
 * User: jagad
 * Date: 7/12/2018
 * Time: 11:03 PM
 */

require_once 'Example.php';

class LearnTraits
{
    use Example;

    public function hi() {
        $this->angry();
        $this->laugh();
    }
}