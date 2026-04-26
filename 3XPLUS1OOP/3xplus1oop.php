<?php 
include_once "userCollatzClass.php";
include_once "subclass.php";
$userNum = (int) readline("Enter a number to receive Collatz (number must be >= 1): ");
$collatz = new userCollatz($userNum);
$listCollatz = $collatz->collatzCalculate();

foreach ($listCollatz as $index => $value) {
    echo "Sequence step " . ($index + 1) . ": " . $value . "\n"; }


$userFirstIntervalNumber = (int) readline("Enter the first interval number for Collatz:");
$userSecondIntervalNumber = (int) readline("Enter the first interval number for Collatz:");

$calculatedIntervalCollatz = $collatz->intervalCalculate($userFirstIntervalNumber,$userSecondIntervalNumber);
foreach ($calculatedIntervalCollatz as $startingNumber => $sequence) {
    echo "Starting number: " . $startingNumber . "\n";

    foreach ($sequence as $index => $value) {
        echo "Sequence step " . ($index + 1) . ": " . $value . "\n";
    }

    echo "\n";
}
$statisticsData = $collatz->GloriousStatistics($calculatedIntervalCollatz);
foreach ($statisticsData as $title => $details) {
    echo $title . "\n";

    foreach ($details as $subtitle => $subdetails) {
        echo $subtitle . ": " . $subdetails . "\n";
    }

    echo "\n";
}
$Histogram = new Histogram($userNum);
$displayHistogram = $Histogram->createHistogramDisplay($calculatedIntervalCollatz);


foreach ($displayHistogram as $histograminterval => $histocount) {
    echo $histograminterval . " - " . $histocount . "\n";
   
}
