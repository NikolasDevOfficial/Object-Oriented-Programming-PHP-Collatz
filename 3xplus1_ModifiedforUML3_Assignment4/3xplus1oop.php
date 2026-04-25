<?php  //Create a 3-class UML diagram using previous works. Create a UML diagram of job inheritance.
include_once "userCollatzClass.php";
include_once "subclass.php";
include_once "IterationPeakGapsSubClass.php";

do {
echo "--Welcome, here is a practical demonstration of the Collatz sequence!--\n";

    do { 
$userNum = (int) readline("Enter a number to receive Collatz (number must be >= 1): ");

    if ($userNum < 1) {
        echo "Enter. a number. above. or equal. to 1. \n";
    } } while ($userNum <1);


$collatz = new userCollatz($userNum);
$listCollatz = $collatz->collatzCalculate();

foreach ($listCollatz as $index => $value) {
    echo "Sequence step " . ($index + 1) . ": " . $value . "\n"; }


do {
$userFirstIntervalNumber = (int) readline("Enter the first interval number for Collatz:");
if ($userFirstIntervalNumber < 1) {
    echo "You must enter a larger positive integer\n";
} } while ($userFirstIntervalNumber <1);

do {

$userSecondIntervalNumber = (int) readline("Enter the second interval number for Collatz:");
if ($userSecondIntervalNumber <= $userFirstIntervalNumber) {
    echo "you must enter a number larger than " . $userFirstIntervalNumber . " ! \n";
} } while ($userSecondIntervalNumber <= $userFirstIntervalNumber);

//hmm. Give the user the option to choose between a full display of the data, or a partial, or none. Too much console spam otherwise 


$calculatedIntervalCollatz = $collatz->intervalCalculate($userFirstIntervalNumber,$userSecondIntervalNumber);
//The user can choose an interval range 
  $userDisplayChoice = strtoupper(readline("Do you Wish to display every single interval (Y), a Partial snippet (P), or none at all (N)"));

  //Display every single
switch ($userDisplayChoice) { 
    case "Y": 
foreach ($calculatedIntervalCollatz as $startingNumber => $sequence) {
    echo "Starting number: " . $startingNumber . "\n";

    foreach ($sequence as $index => $value) {
        echo "Sequence step " . ($index + 1) . ": " . $value . "\n";
    }

    echo "\n";
}

break;
 case "P": 

 do { 
    $userPartialDisplayIntervalStart = (int) (readline("Please enter the first number of your range"));

if ($userPartialDisplayIntervalStart < $userFirstIntervalNumber || $userPartialDisplayIntervalStart >= $userSecondIntervalNumber) {
    echo "Please enter a valid number for the end of the chosen range\n";
     
} } while ($userPartialDisplayIntervalStart < $userFirstIntervalNumber || $userPartialDisplayIntervalStart >= $userSecondIntervalNumber);

do { 
    $userPartialDisplayIntervalEnd = (int) (readline("Please enter the second number of your range"));

if ($userPartialDisplayIntervalEnd <= $userPartialDisplayIntervalStart || $userPartialDisplayIntervalEnd > $userSecondIntervalNumber) {
    echo "Please enter a valid number for the end of the chosen range\n";
     
} } while ($userPartialDisplayIntervalEnd <= $userPartialDisplayIntervalStart || $userPartialDisplayIntervalEnd > $userSecondIntervalNumber);


foreach ($calculatedIntervalCollatz as $startingNumber => $sequence) {
    if ($startingNumber >= $userPartialDisplayIntervalStart && $startingNumber <= $userPartialDisplayIntervalEnd) 
        {  echo "Starting number: " . $startingNumber . "\n";

    foreach ($sequence as $index => $value) {
        echo "Sequence step " . ($index + 1) . ": " . $value . "\n";
        }

    }
}
    echo "\n";

//if the user doesn't want it at all
break;
 case "N": 
echo "Alrighty, we don't want to waste time do we? here are the stats! \n";
 echo "--------------------------------------------------------\n";

break;
 
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

  echo "--------------------------------------------------------\n";
   echo "                   HISTOGRAM                            \n";
foreach ($displayHistogram as $histograminterval => $histocount) {
 
echo "Of the interval numbers within the range, the Collatz interval count of " . $histograminterval . " - " . " was found " .  $histocount . " times\n";
 
}
  echo "--------------------------------------------------------\n";


$IterationPeakGapAnalyze = new IterationPeakGapAnalyze($userNum);
$displayIterationPeakGap = $IterationPeakGapAnalyze->IterationPeakGapAnalyzer($calculatedIntervalCollatz);
    echo "--------------------------------------------------------\n";
   echo "                ITERATION PEAK GAP ANALYSIS                \n";
foreach ($displayIterationPeakGap as $iterationindex => $iterationpeak) {
    foreach ($iterationpeak as $label => $value) {
        echo $label . " " . $value . "\n";
    }
    echo "\n";
}
 echo "--------------------------------------------------------\n";
do {
    print_r("----------------------------------------\n");
    $continuation = strtoupper(readline("Do you wish to continue? Y/N: "));

    if ($continuation != "Y" && $continuation != "N") {
        echo "Y FOR YES. OR N FOR NO.\n";
    }
} while ($continuation != "Y" && $continuation != "N");

} while ($continuation == "Y");

echo "Alright. Geros Dienos.\n";