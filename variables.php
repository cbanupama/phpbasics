<?php

// rules

// variable should start with alphabet or underscore
// variables can not start with number
// variables can be of alphanumeric

// example
$x = 9;
$_y = 10;
$_b_6 = 8;

// scope

$scope = 10;

function a() {
    echo $GLOBALS['scope'];
    $anu = 'Anu';
    echo $anu;
}

a();

// variable variable
$hello = 'world';
$$hello = 10;
echo $hello . ' ' .${$hello};

?>

<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Name:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Beer: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="submit me!" />
</form>


<?php

// constants
define('DB_HOST', 'localhost');
define('DATABASE', 'minifb');
define('DB_USER', 'root');

echo DB_HOST;
echo DATABASE;
echo DB_USER;

echo 1 + 1;

$a = 19;

if($a==10) {
    echo 'hi';
} else {
    echo 'hello';
}

// ternary operator

echo ($a==10) ? 'hi' : 'hello';

function isUserLoggedIn() {
    return false;
}

function redirect() {
    echo 'redirecting to home page';
}

function logout() {
    echo 'loggin out';
}

isUserLoggedIn() ? redirect() : logout();


echo 1 * 2 + (3 - 5);

echo 2**3;

$set1 = [1,2,3];
$set2 = [2,3,4];
$set3 = $set1 + $set2;
print_r($set3);

print($a instanceof int);