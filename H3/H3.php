<?php
/**
 * Created by PhpStorm.
 * User: timos
 * Date: 21-3-2019
 * Time: 09:36
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: timos
 * Date: 21-3-2019
 * Time: 08:48
 */
?>]
<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
for ($i = 1; $i<= 9 ;$i++){
    echo "<img src='img/aap".$i.".jpg'>";
}

$bomen = array("img_0050.jpg","lillypilly1.jpg","Maranchrey_Biyyam_Kayal_kandal.jpg");

foreach($bomen as $boom){
    echo "<img src='img/bomen/".$boom."'>";
}
?>
</body>
</html>
