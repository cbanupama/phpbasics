<?php

// require throws fatal error when file is not found and also stops execution
// include gives warning and continues execution
// require_once will check if a file has already been included or not, if included then it wont include again
// include_once also does the same and gives warning if no file was found

$calc = ['add', 'div', 'mul', 'sub'];

foreach ($calc as $val) {
    require 'code/' . $val . '.php';
}