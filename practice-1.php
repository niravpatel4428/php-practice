<!DOCTYPE html>
<html>
<body>
<pre>

/* array splice means remove */
<?php
    $cars = array("volvo","BMW","Toyota");
    array_splice($cars, 1, 2);
    var_dump($cars);
?>

/* remove array from associative array */
<?php
    $car1 = array("volvo","BMW","Toyota");
    unset($car1[1]);
    var_dump($car1);
?>

/* Remove Multiple Array Items */
<?php
    $car2 = array("volvo","BMW","Toyota");
    unset($car2[0],$car2[1]);
    var_dump($car2);
?>

/* Remove the Last Item */
<?php
    $cars3 = array("volvo","BMW","toyota");
    array_pop($cars3); //Last item remove
    array_shift($cars3); //first Item remove
    var_dump($cars3);
?>


</pre>
</body>
</html>
