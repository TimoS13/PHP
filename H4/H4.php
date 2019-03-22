<?php
/**
 * Created by PhpStorm.
 * User: timos
 * Date: 22-3-2019
 * Time: 11:56
 */
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$a = 30;
$b = 1.8;
$c = 32;
$d = $a*$b + $c;

echo $a."x".$b."+".$c."=".$d;
?>
<br>
<?php
function gedeeldD($a, $b){
    $c = $a / $b;
    return $a."/".$b."=".$c;

}
echo gedeeldD(10,3);

?>
</body>
</html>
