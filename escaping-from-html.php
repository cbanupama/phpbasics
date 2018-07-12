<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Number</th>
        <th>Operator</th>
        <th>Number</th>
        <th>Equals</th>
        <th>Result</th>
    </tr>
    </thead>
    <tbody>

    <?php $num = 2;
    for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>*</td>
            <td><?php echo $num; ?></td>
            <td>=</td>
            <td><?php echo $num * $i; ?></td>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>

<?php
$a = 9;
?>
<?php if ($a == 10): ?>
    <b>Hey i am a king</b>
<?php else: ?>
    <i>Hey i am not a king</i>
<?php endif; ?>
?>

<?php $a = 11; ?>
<?php if ($a == 10): ?>
    <b>Hey i am a king</b>
<?php else: ?>
    <i>Hey i am not king</i>
<?php endif; ?>

</body>
</html>