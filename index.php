<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ins = 20;
    $cent = $ins * 2.54;
    $cent = round($cent);





    ?>
    <p><?php echo $ins  ?> дюймов = сантиметров</p>



    <?php
    echo cos(3.14);

    echo "<br>";
    $str = 'abracadabra';
    echo str_replace('a', 'o', $str);


    function getSum($x, $y)
    {
return $x + $y;
    }
    $a = 5;

function getSumOfCos($x, $y)
{
    $cosX = cos($x);
    $cosY = cos($y);
    return $cosX + $cosY;
}



    ?>


<?php


function gut(int $x)
{
if ($x == 0) {
    echo $x;
    return $x;

}
$y = gut($x - 1);
}


?>


</body>

</html>