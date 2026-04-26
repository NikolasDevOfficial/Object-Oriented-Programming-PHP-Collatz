 <?php
echo "--Welcome, here is a practical demonstration of the Collatz sequence!--\n";

do {
   do {
        $userNum = (int) readline("Enter a number to receive Collatz (number must be >= 1): ");

       if ($userNum < 1) {
            echo "Enter. a number. above. or equal. to 1.\n";
        }
    } while ($userNum < 1);

  $listCollatz = [$userNum];

    while ($userNum != 1) {
        if ($userNum % 2 == 0) {
            $userNum = $userNum / 2;
        } else {
            $userNum = 3 * $userNum + 1;
        }

        $listCollatz[] = $userNum;
    }
    print_r("Thank you. Here is the Collatz sequence!\n");
    print_r("----------------------------------------\n");
  foreach ($listCollatz as $index => $value) {
    echo "Sequence step " . ($index + 1) . ": " . $value . "\n";
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