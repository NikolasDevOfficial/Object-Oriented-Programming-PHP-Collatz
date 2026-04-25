<?php
//reate a child class (inheritance) based on the class of the previos task (3x+1) by adding new method wich can calculate statistics (histogram ) of function  3x+1 iteration values  from interval [n;m]
//Set correct variable modifiers (public, private...);
//Use  2-3 constants values.
class Histogram extends userCollatz  {

public function createHistogramDisplay($intervalCollatz) { 
$histogram = [];
foreach ($intervalCollatz as $histoindex => $histovalues) {
    $iterationCount = count($histovalues) - 1;
if (array_key_exists($iterationCount, $histogram)) {
    $histogram[$iterationCount]++;
}
else {
    $histogram[$iterationCount] = 1;
}
}
 arsort($histogram);
return $histogram;
}
}
