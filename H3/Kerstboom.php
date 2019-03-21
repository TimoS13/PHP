<?php
/**
 * Created by PhpStorm.
 * User: timos
 * Date: 21-3-2019
 * Time: 09:39
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i <=9; $i++){
    for ($j = 0; $j<$i; $j++){
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</html>
