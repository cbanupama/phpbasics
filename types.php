<?php

/**
 * Scalar data types
 */

$c = 'A'; // this is a character
$line = "Anu"; // this is a string
$a = 10; // this is an integer
$f = 10.00; // this is a float
$b = true; // this is a boolean

$b = 2 + 2;
echo $b . '\n';


/**
 * Compound data types
 */
$arr = ['C', 'String', 1, 10.0, true, false];
print_r($arr);

function anupama($item)
{
    return $item . ' ' . gettype($item);
}

$connection = mysqli_connect('localhost', 'root', '', 'minifb', 3306);
echo gettype($connection);
$arr = array_map('anupama', $arr);
print_r($arr);


$foo = true;
//echo "it is true";
$action = 2.11;
if ($action == "show_version") {
    echo "The version is 2.11";

}

$char = 'c';
$str = 'Hello my name is anu';
echo $str;
$str1 = "Hello i am inside qu\"otes\\";
echo $str1;
$fl = 10.505;
var_dump($fl);

$arr = [0, 2, 5];
$ascoc = [
    'key' => 'value',
    5 => 10
];
// in associative array keys are the indexes
//echo $ascoc['key'];

foreach ($ascoc as $key => $value) {
    echo $key . '=>' . $value;
}

unset($ascoc['key']);
print_r($ascoc);
//unlink('test.txt');

$a = "1";
echo gettype($a);
$a = (double)$a;
echo gettype($a);
echo $a;

echo 1 + "1.5";

$foo = 10;   // $foo is an integer
$bar = (boolean)$foo;   // $bar is a boolean
echo (int)$bar;

$a = 4;
$b = &$a;
$b = 5;
echo $a;

// naming rules

$_a = 5;
$a = 6;
$b6 = 6;

