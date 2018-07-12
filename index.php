<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php basics</title>
</head>
<body>
<?php
    echo "<b>Hello world</b>";
    echo "Hi";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo $a;
?>

<?php
    /**
     * Function to get user
     * @param $id
     * @return mixed
     */
    function getUser($id) {
        return $id;
    }
?>
</body>
</html>