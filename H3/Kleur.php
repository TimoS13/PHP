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
    <style>
        body{
            text-align: center;
        }
        .rood{
            border:red solid 5px;
        }
        .groen{
            border:green solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i<= 9 ;$i++){
    if ($i % 2== 0){
        $class = "class='rood'";
    } else{
        $class = "class='groen'";
    }
    echo "<img ".$class."src='img/aap".$i.".jpg'>";
}
?>
</body>
</html>
