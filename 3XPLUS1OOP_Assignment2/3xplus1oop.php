<?php //Rewrite 3x+1 task to OOP.
//The class part move to separate file.
//Append Constructor to add start Nummber.
//Create a separate method, perform calculations based on a given interval (e.g.: 25-24658)
//Create a method statistics that returns: the number with max iterations, the number with min iterations, the number with max reached value.
include_once "userCollatzClass.php";

do {
echo "--Welcome, here is a practical demonstration of the Collatz sequence!--\n";

    do { 
$userNum = (int) readline("Enter a number to receive Collatz (number must be >= 1): ");

    if ($userNum < 1) {
        echo "Enter. a number. above. or equal. to 1. \n";
    } } while ($userNum <1);

$collatz = new userCollatz($userNum);
$listCollatz = $collatz->collatzCalculate();
    print_r("Thank you. Here is the Collatz sequence!\n");
    print_r("----------------------------------------\n");
foreach ($listCollatz as $index => $value) {
    echo "Sequence step " . ($index + 1) . ": " . $value . "\n"; }

do {
$userFirstIntervalNumber = (int) readline("Enter the first interval number for Collatz:");
if ($userFirstIntervalNumber < 1) {
    echo "You must enter a larger positive integer\n";
} } while ($userFirstIntervalNumber <1);

do {

$userSecondIntervalNumber = (int) readline("Enter the first interval number for Collatz:");
if ($userSecondIntervalNumber <= $userFirstIntervalNumber) {
    echo "you must enter a number larger than " . $userFirstIntervalNumber . " ! \n";
} } while ($userSecondIntervalNumber <= $userFirstIntervalNumber);


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
do {
        print_r("----------------------------------------\n");
        $continuation = strtoupper(readline("Do you wish to continue? Y/N: "));

        if ($continuation != "Y" && $continuation != "N") {
           echo "Y FOR YES. OR N FOR NO.\n";
        }
    } while ($continuation != "Y" && $continuation != "N");
    
} while ($continuation == "Y");

echo "Alright. Geros Dienos.\n";