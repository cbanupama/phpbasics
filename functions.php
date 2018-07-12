<?php

// what is a function?
// why do we need function?

// function is a reusable piece of code
// to avoid code duplication

$num = 1234;
$num2 = 4567;
$reverse = 0;

while ($num > 0) {
    $rem = $num % 10;
    $reverse = ($reverse * 10) + $rem;
    $num = (int)$num / 10;
}

echo $reverse;

$reverse = 0;
while ($num2 > 0) {
    $rem = $num2 % 10;
    $reverse = ($reverse * 10) + $rem;
    $num2 = (int)$num2 / 10;
}

echo $reverse;

function reverse($num)
{
    $reverse = 0;
    while ($num > 0) {
        $rem = $num % 10;
        $reverse = ($reverse * 10) + $rem;
        $num = (int)$num / 10;
    }
    return $reverse;
}

echo reverse(1234);
echo reverse($num2);

// function syntax
// function key word and then space and then name of the function (here we can specify arguments) { ..here we write code }

function name($arr) {
    $length = strlen('hasdasdi');
    echo $length;
    print array_sum($arr);
}
echo '-------';
name([1,2,3,4,5,6]);

function non_returning() {
    echo 'hi';
}

function returning($val=0) {
    return $val;
}

non_returning();
$v = returning();
print $v;

// build in functions
echo strpos('hello', 'o');
echo strlen('hi');

$arr = [100, 200, 300];

$ars = array_map(function ($item) {
    return $item + 100;
}, $arr);

print_r($ars);